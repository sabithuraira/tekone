<?php

namespace app\controllers;

use Yii;
use app\models\Atap;
use app\models\Atapsearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AtapController implements the CRUD actions for Atap model.
 */
class AtapController extends Controller
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

    /**
     * Lists all Atap models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Atapsearch();
        $tahun = date('Y');
        $wil = '1601';

        if (Yii::$app->request->post()) {
            $tahun = $_POST['Atapsearch']['id_tahun'];
            $wil = $_POST['Atapsearch']['id_wil'];
        }

        $searchModel->id_tahun = $tahun;
        $searchModel->id_wil = $wil;

        $dataProvider = Atap::find()
            ->where(['id_tahun' => $tahun,'id_wil' => $wil])
            ->orderBy(['subround'=>SORT_ASC])
            ->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Atap model.
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
     * Creates a new Atap model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Atap();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
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
                
                $cols = array('B', 'C', 'D');
                for($i=1;$i<=3;++$i){
                    $cur_col = $cols[$i - 1];

                    //if(!empty($sheetData[4][$cur_col])){
                        $model = Atap::findone([
                            'id_tahun'  =>  $th,
                            'id_wil'    =>  $kab,
                            'subround'  =>  $i
                        ]);

                        if($model==null){
                            $model = new \app\models\Atap();
                            $model->id_tahun = $th;
                            $model->id_wil = $kab;
                            $model->id_satuan = 2;
                            $model->subround = $i;
                        }

                        $model->padisawah = $this->floatvalue($sheetData[4][$cur_col]);
                        $model->padiladang = $this->floatvalue($sheetData[5][$cur_col]);
                        $model->padi = $this->floatvalue($sheetData[6][$cur_col]);
                        $model->jagung = $this->floatvalue($sheetData[7][$cur_col]);
                        $model->kedelai = $this->floatvalue($sheetData[8][$cur_col]);
                        $model->kacangtanah = $this->floatvalue($sheetData[9][$cur_col]);
                        $model->kacanghijau = $this->floatvalue($sheetData[10][$cur_col]);
                        $model->ubikayu = $this->floatvalue($sheetData[11][$cur_col]);
                        $model->ubijalar = $this->floatvalue($sheetData[12][$cur_col]);

                        $model->save(); 

                        // die(print_r($model));
                    //}
                }
                
                Yii::$app->getSession()->setFlash('success','Data berhasil diupload');
            }
            else{
                Yii::$app->getSession()->setFlash('error', 'Error');
            }
			return $this->redirect(['atap/index']);
        }
        
        return $this->render('import',
            [
                'model' => $input,
                'modelImport' => $modelImport,
            ]
        );
    }	



    /**
     * Updates an existing Atap model.
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
     * Deletes an existing Atap model.
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
     * Finds the Atap model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Atap the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Atap::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
