<?php

namespace app\controllers;

use Yii;
use app\models\Akomodasi;
use app\models\Akomodasisearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AkomodasiController implements the CRUD actions for Akomodasi model.
 */
class AkomodasiController extends Controller
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
     * Lists all Akomodasi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Akomodasisearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Akomodasi model.
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
     * Creates a new Akomodasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Akomodasi();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
	
					    public function actionImport()
    {
$field = [
            'fileImport' => 'File Import',
        ];
        
        $modelImport = new \yii\base\DynamicModel($field);
		$modelImport->addRule(['fileImport'], 'required');
		$modelImport->addRule(['fileImport'], 'file', ['extensions'=>'xls,xlsx'],['maxSize'=>1024*1024]);
        if (Yii::$app->request->post()) {
            $modelImport->fileImport = \yii\web\UploadedFile::getInstance($modelImport, 'fileImport');
            if ($modelImport->fileImport ) {                                
                $inputFileType = \PHPExcel_IOFactory::identify($modelImport->fileImport->tempName );
                $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($modelImport->fileImport->tempName);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                $baseRow = 3;
                while(!empty($sheetData[$baseRow]['A'])){
                    $model = new \app\models\Akomodasi();
                    $model->id_tahun = $sheetData[$baseRow]['A'];
					$model->id_bulan = $sheetData[$baseRow]['B'];
                    $model->id_wil = $sheetData[$baseRow]['C'];
                    $model->hotel = $sheetData[$baseRow]['D'];
                    $model->penginapan = $sheetData[$baseRow]['E'];
                    $model->kamar = $sheetData[$baseRow]['F'];
                    $model->tempattidur = $sheetData[$baseRow]['G'];
                    $model->fenomena = $sheetData[$baseRow]['H'];
                    $model->id_satuan = 5;

                    $model->save(); 
                    //die(print_r($model->errors));
                    $baseRow++;
                }
				$b = $baseRow-3;
                Yii::$app->getSession()->setFlash('success','Sebanyak '.$b.' baris data berhasil diupload');
            }
            else{
                Yii::$app->getSession()->setFlash('error', 'Error');
            }
			return $this->redirect(['akomodasi/index']);
        }
        
        return $this->render('import',[
		'modelImport' => $modelImport,]);
    }	



    /**
     * Updates an existing Akomodasi model.
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
     * Deletes an existing Akomodasi model.
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
     * Finds the Akomodasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Akomodasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Akomodasi::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
