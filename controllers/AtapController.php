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
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

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
	
	public function actionImport()
    {
        $input = new \app\models\inputd();
        $model = new \app\models\tahun();
        $field = [
            'fileImport' => 'File Import',
        ];
        
        $modelImport = new \yii\base\DynamicModel($field);
		$modelImport->addRule(['fileImport'], 'required');
		$modelImport->addRule(['fileImport'], 'file', ['extensions'=>'xls,xlsx'],['maxSize'=>1024*1024]);
        
        if (Yii::$app->request->post()) {
			$th = $_POST['Inputd']['tahun'];
			$kab = $_POST['Inputd']['tw'];

            $modelImport->fileImport = \yii\web\UploadedFile::getInstance($modelImport, 'fileImport');
            if ($modelImport->fileImport ) {                                
                $inputFileType = \PHPExcel_IOFactory::identify($modelImport->fileImport->tempName );
                $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($modelImport->fileImport->tempName);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                
                $cols = array('B', 'C', 'D');
                for($i=1;$i<=3;++$i){
                    $cur_col = $cols[$i - 1];
                    
                    if(!empty($sheetData[4]['B'])){
                    
                    }
                }
                
                $baseRow = 4;
                while(!empty($sheetData[$baseRow]['B'])){
                    
                    $model = new \app\models\Atap();
                    $model->id_tahun = $th;
					$model->id_wil = $kab;
                    $model->padisawah = $sheetData[$baseRow]['C'];
                    $model->padiladang = $sheetData[$baseRow]['D'];
                    $model->padi = $sheetData[$baseRow]['E'];
                    $model->jagung = $sheetData[$baseRow]['F'];
                    $model->kedelai = $sheetData[$baseRow]['G'];
                    $model->kacangtanah = $sheetData[$baseRow]['H'];
                    $model->kacanghijau = $sheetData[$baseRow]['I'];
                    $model->ubijalar = $sheetData[$baseRow]['J'];
                    $model->ubikayu = $sheetData[$baseRow]['K'];
                    $model->fenomena = $sheetData[$baseRow]['L'];
                    $model->id_satuan = 2;

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
