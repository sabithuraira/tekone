<?php

namespace app\controllers;

use Yii;
use app\models\Penduduk;
use app\models\Penduduksearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PendudukController implements the CRUD actions for Penduduk model.
 */
class PendudukController extends Controller
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
     * Lists all Penduduk models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Penduduksearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Penduduk model.
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
     * Creates a new Penduduk model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Penduduk();

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
                    $model = new \app\models\Penduduk();
                    $model->id_tahun = $sheetData[$baseRow]['A'];
					$model->id_wil = $sheetData[$baseRow]['B'];
                    $model->laki = $sheetData[$baseRow]['C'];
                    $model->perempuan = $sheetData[$baseRow]['D'];
                    $model->total = $sheetData[$baseRow]['E'];
                    $model->fenomena = $sheetData[$baseRow]['F'];
                    $model->id_satuan = 4;

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
			return $this->redirect(['penduduk/index']);
        }
        
        return $this->render('import',[
		'modelImport' => $modelImport,]);
    }	


    /**
     * Updates an existing Penduduk model.
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
     * Deletes an existing Penduduk model.
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
     * Finds the Penduduk model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Penduduk the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Penduduk::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
