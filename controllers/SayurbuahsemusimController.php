<?php

namespace app\controllers;

use Yii;
use app\models\Sayurbuahsemusim;
use app\models\Sayurbuahsemusimsearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SayurbuahsemusimController implements the CRUD actions for Sayurbuahsemusim model.
 */
class SayurbuahsemusimController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    function floatvalue($val){
        $val = str_replace(",",".",$val);
        $val = preg_replace('/\.(?=.*\.)/', '', $val);
        return floatval($val);
    }

    public function actionImport()
    {
        $input = new \app\models\Inputd();
        $model = new \app\models\Tahun();
        $field = [
            'fileImport' => 'File Import',
        ];
        
        $modelImport = new \yii\base\DynamicModel($field);
		$modelImport->addRule(['fileImport'], 'required');
		$modelImport->addRule(['fileImport'], 'file', ['extensions'=>'xls,xlsx'],['maxSize'=>1024*1024]);
        
        if (Yii::$app->request->post()) {
			$th = $_POST['Inputd']['tahun'];
			$kab = $_POST['Inputd']['kab'];

            $modelImport->fileImport = \yii\web\UploadedFile::getInstance($modelImport, 'fileImport');
            if ($modelImport->fileImport ) {                                
                $inputFileType = \PHPExcel_IOFactory::identify($modelImport->fileImport->tempName );
                $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($modelImport->fileImport->tempName);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                

                $model = Sayurbuahsemusim::findone([
                    'id_tahun'  =>  $th,
                    'id_wil'    =>  $kab
                ]);

                if($model==null){
                    $model = new \app\models\Sayurbuahsemusim();
                    $model->id_tahun = $th;
                    $model->id_wil = $kab;
                    $model->id_satuan = 2;
                }

                $model->bawang_merah = $this->floatvalue($sheetData[2]['B']);
                $model->cabe_besar = $this->floatvalue($sheetData[3]['B']);
                $model->kentang_ = $this->floatvalue($sheetData[4]['B']);
                $model->kubis = $this->floatvalue($sheetData[5]['B']);
                $model->petsaisawi = $this->floatvalue($sheetData[6]['B']);

                $model->bawang_putih = $this->floatvalue($sheetData[7]['B']);
                $model->bawang_daun = $this->floatvalue($sheetData[8]['B']);
                
                $model->kembang_kol = $this->floatvalue($sheetData[9]['B']);
                $model->wortel = $this->floatvalue($sheetData[10]['B']);
                $model->lobak = $this->floatvalue($sheetData[11]['B']);
                $model->kacang_merah = $this->floatvalue($sheetData[12]['B']);
                $model->kacang_panjang = $this->floatvalue($sheetData[13]['B']);

                $model->cabe_rawit = $this->floatvalue($sheetData[14]['B']);
                $model->paprika = $this->floatvalue($sheetData[15]['B']);
                $model->jamur = $this->floatvalue($sheetData[16]['B']);
                $model->tomat = $this->floatvalue($sheetData[17]['B']);
                $model->terung = $this->floatvalue($sheetData[18]['B']);
                $model->buncis = $this->floatvalue($sheetData[19]['B']);
                $model->ketimun = $this->floatvalue($sheetData[20]['B']);
                $model->labu_siam = $this->floatvalue($sheetData[21]['B']);
                $model->kangkung = $this->floatvalue($sheetData[22]['B']);
                $model->bayam = $this->floatvalue($sheetData[23]['B']);
                $model->lainnya = $this->floatvalue($sheetData[24]['B']);

                $model->save(); 

                print_r($model);die();
                
                Yii::$app->getSession()->setFlash('success','Data berhasil diupload');
            }
            else{
                Yii::$app->getSession()->setFlash('error', 'Error');
            }
			return $this->redirect(['sayurbuahsemusim/index']);
        }
        
        return $this->render('import',
            [
                'model' => $input,
                'modelImport' => $modelImport,
            ]
        );
    }

     public function actionIndex()
     {
         $searchModel = new Sayurbuahsemusimsearch();
         $tahun = date('Y');
         $wil = '1601';
 
         if (Yii::$app->request->post()) {
             $tahun = $_POST['Sayurbuahsemusimsearch']['id_tahun'];
             $wil = $_POST['Sayurbuahsemusimsearch']['id_wil'];
         }
 
         $searchModel->id_tahun = $tahun;
         $searchModel->id_wil = $wil;
 
         $dataProvider = Sayurbuahsemusim::find()
             ->where(['id_tahun' => $tahun,'id_wil' => $wil])
             ->one();

        // print_r($tahun);
        // print_r($wil);
        // print_r($dataProvider);die();
 
         return $this->render('index', [
             'searchModel' => $searchModel,
             'dataProvider' => $dataProvider,
         ]);
     }

    /**
     * Displays a single Sayurbuahsemusim model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Sayurbuahsemusim model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sayurbuahsemusim();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Sayurbuahsemusim model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Sayurbuahsemusim model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Sayurbuahsemusim model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sayurbuahsemusim the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sayurbuahsemusim::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
