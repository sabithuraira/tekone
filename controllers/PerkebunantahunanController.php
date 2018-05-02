<?php

namespace app\controllers;

use Yii;
use app\models\Perkebunantahunan;
use app\models\Perkebunantahunansearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PerkebunantahunanController implements the CRUD actions for Perkebunantahunan model.
 */
class PerkebunantahunanController extends Controller
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
                

                $model = Perkebunantahunan::findone([
                    'id_tahun'  =>  $th,
                    'id_wil'    =>  $kab
                ]);

                if($model==null){
                    $model = new \app\models\Perkebunantahunan();
                    $model->id_tahun = $th;
                    $model->id_wil = $kab;
                    $model->id_satuan = 2;
                }

                $model->karet = $this->floatvalue($sheetData[2]['B']);
                $model->kelapa_dalam = $this->floatvalue($sheetData[3]['B']);
                $model->kelapa_sawit = $this->floatvalue($sheetData[4]['B']);
                $model->kopi = $this->floatvalue($sheetData[5]['B']);
                $model->lada = $this->floatvalue($sheetData[6]['B']);
                $model->kakao = $this->floatvalue($sheetData[7]['B']);
                $model->kemiri = $this->floatvalue($sheetData[8]['B']);
                $model->cengkeh = $this->floatvalue($sheetData[9]['B']);
                $model->lainnya = $this->floatvalue($sheetData[10]['B']);

                $model->pala = $this->floatvalue($sheetData[11]['B']);
                $model->kayu_manis = $this->floatvalue($sheetData[12]['B']);
                $model->aren = $this->floatvalue($sheetData[13]['B']);
                $model->kapok = $this->floatvalue($sheetData[14]['B']);
                $model->jambu_mete = $this->floatvalue($sheetData[15]['B']);
                $model->panili = $this->floatvalue($sheetData[16]['B']);
                $model->nipah = $this->floatvalue($sheetData[17]['B']);
                $model->pinang = $this->floatvalue($sheetData[18]['B']);
                $model->sagu_ = $this->floatvalue($sheetData[19]['B']);

                $model->save(); 

                
                Yii::$app->getSession()->setFlash('success','Data berhasil diupload');
            }
            else{
                Yii::$app->getSession()->setFlash('error', 'Error');
            }
			return $this->redirect(['perkebunantahunan/index']);
        }

        return $this->render('import',
            [
                'model' => $input,
                'modelImport' => $modelImport,
            ]
        );
    }

    /**
     * Lists all Perkebunantahunan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Perkebunantahunansearch();
        $tahun = date('Y');
        $wil = '1601';

        if (Yii::$app->request->post()) {
            $tahun = $_POST['Perkebunantahunansearch']['id_tahun'];
            $wil = $_POST['Perkebunantahunansearch']['id_wil'];
        }

        $searchModel->id_tahun = $tahun;
        $searchModel->id_wil = $wil;

        $dataProvider = Perkebunantahunan::find()
            ->where(['id_tahun' => $tahun,'id_wil' => $wil])
            ->one();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Perkebunantahunan model.
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
     * Creates a new Perkebunantahunan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Perkebunantahunan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Perkebunantahunan model.
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
     * Deletes an existing Perkebunantahunan model.
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
     * Finds the Perkebunantahunan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Perkebunantahunan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Perkebunantahunan::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
