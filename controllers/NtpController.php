<?php

namespace app\controllers;

use Yii;
use app\models\Ntp;
use app\models\Ntpsearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * NtpController implements the CRUD actions for Ntp model.
 */
class NtpController extends Controller
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
        $ntp_model = new \app\models\Ntpsearch();
        $field = [
            'fileImport' => 'File Import',
        ];
        
        $modelImport = new \yii\base\DynamicModel($field);
		$modelImport->addRule(['fileImport'], 'required');
		$modelImport->addRule(['fileImport'], 'file', ['extensions'=>'xls,xlsx'],['maxSize'=>1024*1024]);
        
        if (Yii::$app->request->post()) {
			$th = $_POST['Inputd']['tahun'];
			$subsektor = $_POST['Inputd']['kab'];

            $modelImport->fileImport = \yii\web\UploadedFile::getInstance($modelImport, 'fileImport');
            if ($modelImport->fileImport ) {                                
                $inputFileType = \PHPExcel_IOFactory::identify($modelImport->fileImport->tempName );
                $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($modelImport->fileImport->tempName);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
                
                for($i=1;$i<=12;++$i){
                    $model = Ntp::findone([
                        'id_tahun'  =>  $th,
                        'id_subsektor'  =>  $subsektor,
                        'id_bulan'  =>  $i
                    ]);

                    if($model==null){
                        $model = new \app\models\Ntp();
                        $model->id_tahun = $th;
                        $model->id_subsektor = $subsektor;
                        $model->id_bulan = $i;
                    }

                    $model->it = $this->floatvalue($sheetData[$i+2]['B']);
                    $model->ib = $this->floatvalue($sheetData[$i+2]['C']);
                    $model->ntp = $this->floatvalue($sheetData[$i+2]['D']);

                    $model->save(); 

                }
                
                Yii::$app->getSession()->setFlash('success','Data berhasil diupload');
            }
            else{
                Yii::$app->getSession()->setFlash('error', 'Error');
            }
			return $this->redirect(['ntp/index']);
        }
        
        return $this->render('import',
            [
                'model' => $input,
                'modelImport' => $modelImport,
                'ntp_model' => $ntp_model,
            ]
        );
    }	

    /**
     * Lists all Ntp models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Ntpsearch();
        $tahun = date('Y');
        $subsektor = 1;

        if (Yii::$app->request->post()) {
            $tahun = $_POST['Ntpsearch']['id_tahun'];
            $subsektor = $_POST['Ntpsearch']['id_subsektor'];
        }

        $searchModel->id_tahun = $tahun;
        $searchModel->id_subsektor = $subsektor;

        // $dataProvider = Aram::findAll([
        //     'id_tahun'  => $tahun,
        //     'id_wil'    =>$wil
        // ]);


        $dataProvider = Ntp::find()
            ->where(['id_tahun' => $tahun,'id_subsektor' => $subsektor])
            ->orderBy(['id_bulan'=>SORT_ASC])
            ->all();

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Ntp model.
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
     * Creates a new Ntp model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Ntp();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Ntp model.
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
     * Deletes an existing Ntp model.
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
     * Finds the Ntp model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Ntp the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Ntp::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
