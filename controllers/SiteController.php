<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use yii\data\Pagination;


class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

	public function actionForum()
    {
        return $this->render('forum');
    }
		    public function actionTabelpokok()
			{
	$input = new \app\models\Inputd();
	        if (Yii::$app->request->post()) {
			$th = $_POST['Inputd']['tahun'];
			$tw = $_POST['Inputd']['tw'];
	$tabel1 = \app\models\PdrbPengeluaranTd2010AdhBerlaku::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel2 = \app\models\PdrbPengeluaranTd2010AdhKonstan::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel3 = \app\models\DistribusiPdrbPengeluaranTd2010AdhBerlaku::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel4 = \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanQtoq::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel5 = \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanYtoy::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel6 = \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel7 = \app\models\IndeksImplisit::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel8 = \app\models\LajuPertumbuhanIndeksImplisit::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	
	        return $this->render('tabel-pokok', [
         'model1' => $tabel1,
         'model2' => $tabel2,
         'model3' => $tabel3,
         'model4' => $tabel4,
         'model5' => $tabel5,
         'model6' => $tabel6,
         'model7' => $tabel7,
         'model8' => $tabel8,
         'input' => $input,
		 'th' => $th,
		 'triwulan' => $tw,
    ]);
}
	$tabel1 = \app\models\PdrbPengeluaranTd2010AdhBerlaku::find()->orderBy('id DESC')->one();
	$tabel2 = \app\models\PdrbPengeluaranTd2010AdhKonstan::find()->where(['tahun' => $tabel1->tahun,'triwulan' => $tabel1->triwulan,])->one();
	$tabel3 = \app\models\DistribusiPdrbPengeluaranTd2010AdhBerlaku::find()->where(['tahun' => $tabel1->tahun,'triwulan' => $tabel1->triwulan,])->one();
	$tabel4 = \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanQtoq::find()->where(['tahun' => $tabel1->tahun,'triwulan' => $tabel1->triwulan,])->one();
	$tabel5 = \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanYtoy::find()->where(['tahun' => $tabel1->tahun,'triwulan' => $tabel1->triwulan,])->one();
	$tabel6 = \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc::find()->where(['tahun' => $tabel1->tahun,'triwulan' => $tabel1->triwulan,])->one();
	$tabel7 = \app\models\IndeksImplisit::find()->where(['tahun' => $tabel1->tahun,'triwulan' => $tabel1->triwulan,])->one();
	$tabel8 = \app\models\LajuPertumbuhanIndeksImplisit::find()->where(['tahun' => $tabel1->tahun,'triwulan' => $tabel1->triwulan,])->one();
	
	        return $this->render('tabel-pokok', [
         'model1' => $tabel1,
         'model2' => $tabel2,
         'model3' => $tabel3,
         'model4' => $tabel4,
         'model5' => $tabel5,
         'model6' => $tabel6,
         'model7' => $tabel7,
         'model8' => $tabel8,
         'input' => $input,
		 'th' => $tabel1->tahun,
		 'triwulan' => $tabel1->triwulan,
    ]);
	
    }

    function floatvalue($val){
        $val = str_replace(",",".",$val);
        $val = preg_replace('/\.(?=.*\.)/', '', $val);
        return floatval($val);
    }
		    
	public function actionInputdata()
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
			$tw = $_POST['Inputd']['tw'];
			$judul = $_POST['Inputd']['judul'];
			
	$tabel1 = \app\models\PdrbPengeluaranTd2010AdhBerlaku::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel2 = \app\models\PdrbPengeluaranTd2010AdhKonstan::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel3 = \app\models\DistribusiPdrbPengeluaranTd2010AdhBerlaku::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel4 = \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanQtoq::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel5 = \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanYtoy::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel6 = \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel7 = \app\models\IndeksImplisit::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	$tabel8 = \app\models\LajuPertumbuhanIndeksImplisit::find()->where(['tahun' => $th,'triwulan' => $tw,])->one();
	
            $modelImport->fileImport = \yii\web\UploadedFile::getInstance($modelImport, 'fileImport');
            if ($modelImport->fileImport ) {                                
                $inputFileType = \PHPExcel_IOFactory::identify($modelImport->fileImport->tempName );
                $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($modelImport->fileImport->tempName);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
				
                if(!empty($sheetData[4]['B'])){
					if($judul==1){ 
					if(empty($tabel1)) $model = new \app\models\PdrbPengeluaranTd2010AdhBerlaku();
					else $model=$tabel1;}
					else if($judul==2){ 
					if(empty($tabel1))  $model = new \app\models\PdrbPengeluaranTd2010AdhKonstan();
					else $model=$tabel2;}
					else if($judul==3){ 
					if(empty($tabel3))  $model = new \app\models\DistribusiPdrbPengeluaranTd2010AdhBerlaku();
					else $model=$tabel3;}
					else if($judul==4) { 
					if(empty($tabel4)) $model = new \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanQtoq();
					else $model=$tabel4;}
					else if($judul==5) { 
					if(empty($tabel5)) $model = new \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanYtoy();
					else $model=$tabel5;}
					else if($judul==6) { 
					if(empty($tabel6)) $model = new \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc();
					else $model=$tabel6;}
					else if($judul==7) { 
					if(empty($tabel7)) $model = new \app\models\IndeksImplisit();
					else $model=$tabel7;}
					else if($judul==8) { 
					if(empty($tabel8)) $model = new \app\models\LajuPertumbuhanIndeksImplisit();
					else $model=$tabel8;}
                    else ;
					
                    $model->a = $this->floatvalue($sheetData[4]['B']);
					$model->b = $this->floatvalue($sheetData[5]['B']);
                    $model->c = $this->floatvalue($sheetData[6]['B']);
                    $model->d = $this->floatvalue($sheetData[7]['B']);
                    $model->e = $this->floatvalue($sheetData[8]['B']);
                    $model->f = $this->floatvalue($sheetData[9]['B']);
                    $model->g = $this->floatvalue($sheetData[10]['B']);
                    $model->h = $this->floatvalue($sheetData[11]['B']); 
					$model->i = $this->floatvalue($sheetData[12]['B']);
                    $model->j = $this->floatvalue($sheetData[13]['B']);
                    $model->k = $this->floatvalue($sheetData[14]['B']);
                    $model->l = $this->floatvalue($sheetData[15]['B']);
                    $model->m = $this->floatvalue($sheetData[16]['B']);
                    $model->o = $this->floatvalue($sheetData[17]['B']);
                    $model->p = $this->floatvalue($sheetData[18]['B']);   
                    $model->q = $this->floatvalue($sheetData[19]['B']);
                    $model->r = $this->floatvalue($sheetData[20]['B']);
                    $model->pdrb = $this->floatvalue($sheetData[21]['B']);
                    $model->pdrb_tanpa_migas = $this->floatvalue($sheetData[22]['B']);
                    $model->triwulan = $tw;
                    $model->tahun = $th;

                    $model->save(); 
                    // die(print_r($model));
                    Yii::$app->getSession()->setFlash('success','Data berhasil diupload');
                }
				else Yii::$app->getSession()->setFlash('error', 'Error!!!, File yang diupload kosong atau Tidak Sesuai');

            }
            else{
                Yii::$app->getSession()->setFlash('error', 'Error');
            }
			return $this->render('input-data', [
                'model' => $input,
                'modelImport' => $modelImport,
            ]);
        }
			
        return $this->render('input-data', [
                'model' => $input,
                'modelImport' => $modelImport,
            ]);
    }
	
   	public function actionProfil()
    {
        return $this->render('profil');
    }
            
    public function actionTabelFenomena()
	{
        $input = new \app\models\Inputd();
        
        if (Yii::$app->request->post()) {
            $th = $_POST['Inputd']['tahun'];
            $tw = $_POST['Inputd']['tw'];
            $kab= $_POST['Inputd']['kab'];
            $tabel1 = \app\models\Fenomena::find()->where(['tahun' => $th,'triwulan' => $tw,'id_kab'=>$kab  ])->one();
        
            return $this->render('fenomena', [
                'model1' => $tabel1,
                'input' => $input,
                'th' => $th,
                'triwulan' => $tw,
                'kab' => $kab,
            ]);
        }

        $tabel1 = \app\models\Fenomena::find()->orderBy('id DESC')->one();

        return $this->render('fenomena', [
            'model1' => $tabel1,
            'input' => $input,
            'th' => $tabel1->tahun,
            'triwulan' => $tabel1->triwulan,
            'kabid' => $tabel1->id_kab,
        ]);
	
    }


	
public function actionDataSeries()
    {
		 $input = new \app\models\Inputd();
		$model = new \app\models\Tahun();
		$jumlaht = 1;
		$tabelcount = \app\models\PdrbPengeluaranTd2010AdhBerlaku::find()->count();
		$tabel1 = \app\models\PdrbPengeluaranTd2010AdhBerlaku::find()->limit($jumlaht)->offset($tabelcount-$jumlaht)->orderBy([
  'tahun' => SORT_ASC,
  'triwulan'=>SORT_ASC
])->all();
			        if (Yii::$app->request->post()) {
						
			$th1 = $_POST['Inputd']['tahun'];
			$th2 = $_POST['Inputd']['tahuna'];
			$judul = $_POST['Inputd']['judul'];
		$jumlaht = $th2;
		if ($judul==1) $tabel1 = \app\models\PdrbPengeluaranTd2010AdhBerlaku::find()->limit($jumlaht)->offset($tabelcount-$jumlaht)->orderBy([
  'tahun' => SORT_ASC,
  'triwulan'=>SORT_ASC
])->all();
		if ($judul==2) $tabel1 = \app\models\PdrbPengeluaranTd2010AdhKonstan::find()->limit($jumlaht)->offset($tabelcount-$jumlaht)->orderBy([
  'tahun' => SORT_ASC,
  'triwulan'=>SORT_ASC
])->all();
		if ($judul==2) $tabel1 = \app\models\DistribusiPdrbPengeluaranTd2010AdhBerlaku::find()->limit($jumlaht)->offset($tabelcount-$jumlaht)->orderBy([
  'tahun' => SORT_ASC,
  'triwulan'=>SORT_ASC
])->all();
		if ($judul==2) $tabel1 = \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanQtoq::find()->limit($jumlaht)->offset($tabelcount-$jumlaht)->orderBy([
  'tahun' => SORT_ASC,
  'triwulan'=>SORT_ASC
])->all();
		if ($judul==2) $tabel1 = \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanYtoy::find()->limit($jumlaht)->offset($tabelcount-$jumlaht)->orderBy([
  'tahun' => SORT_ASC,
  'triwulan'=>SORT_ASC
])->all();
		if ($judul==2) $tabel1 = \app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc::find()->limit($jumlaht)->offset($tabelcount-$jumlaht)->orderBy([
  'tahun' => SORT_ASC,
  'triwulan'=>SORT_ASC
])->all();
		if ($judul==2) $tabel1 = \app\models\IndeksImplisit::find()->limit($jumlaht)->offset($tabelcount-$jumlaht)->orderBy([
  'tahun' => SORT_ASC,
  'triwulan'=>SORT_ASC
])->all();
		if ($judul==2) $tabel1 = \app\models\LajuPertumbuhanIndeksImplisit::find()->limit($jumlaht)->offset($tabelcount-$jumlaht)->orderBy([
  'tahun' => SORT_ASC,
  'triwulan'=>SORT_ASC
])->all();

return $this->render('data-series', [
                'model' => $input,
                'tabel' => $tabel1,
				'judul' => $judul,
            ]);		
					}
					
        return $this->render('data-series', [
                'model' => $input,
                'tabel' => $tabel1,
            ]);
    }
	
      		public function actionFenomena()
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
			$tw = $_POST['Inputd']['tw'];
			$kab = $_POST['Inputd']['kab'];
            $modelImport->fileImport = \yii\web\UploadedFile::getInstance($modelImport, 'fileImport');
            if ($modelImport->fileImport ) {                                
                $inputFileType = \PHPExcel_IOFactory::identify($modelImport->fileImport->tempName );
                $objReader = \PHPExcel_IOFactory::createReader($inputFileType);
                $objPHPExcel = $objReader->load($modelImport->fileImport->tempName);
                $sheetData = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
				
                if(!empty($sheetData[4]['C'])){ 
					$fenom = \app\models\Fenomena::find()->where(['tahun' => $th,'triwulan' => $tw, 'id_kab' => $kab,])->one();
					if(empty($fenom)) $model = new \app\models\Fenomena();
					else $model=$fenom;
					
$model->a_qtoq =  $sheetData[4]['D'];
$model->a_ytoy =  $sheetData[5]['D'];
$model->a_laju_implisit =  $sheetData[6]['D'];
$model->b_qtoq =  $sheetData[7]['D'];
$model->b_ytoy =  $sheetData[8]['D'];
$model->b_laju_implisit =  $sheetData[9]['D'];
$model->c_qtoq =  $sheetData[10]['D'];
$model->c_ytoy =  $sheetData[11]['D'];
$model->c_laju_implisit =  $sheetData[12]['D'];
$model->d_qtoq =  $sheetData[13]['D'];
$model->d_ytoy =  $sheetData[14]['D'];
$model->d_laju_implisit =  $sheetData[15]['D'];
$model->e_qtoq =  $sheetData[16]['D'];
$model->e_ytoy =  $sheetData[17]['D'];
$model->e_laju_implisit =  $sheetData[18]['D'];
$model->f_qtoq =  $sheetData[19]['D'];
$model->f_ytoy =  $sheetData[20]['D'];
$model->f_laju_implisit =  $sheetData[21]['D'];
$model->g_qtoq =  $sheetData[22]['D'];
$model->g_ytoy =  $sheetData[23]['D'];
$model->g_laju_implisit =  $sheetData[24]['D'];
$model->h_qtoq =  $sheetData[25]['D'];
$model->h_ytoy =  $sheetData[26]['D'];
$model->h_laju_implisit =  $sheetData[27]['D'];
$model->i_qtoq =  $sheetData[28]['D'];
$model->i_ytoy =  $sheetData[29]['D'];
$model->i_laju_implisit =  $sheetData[30]['D'];
$model->j_qtoq =  $sheetData[31]['D'];
$model->j_ytoy =  $sheetData[32]['D'];
$model->j_laju_implisit =  $sheetData[33]['D'];
$model->k_qtoq =  $sheetData[34]['D'];
$model->k_ytoy =  $sheetData[35]['D'];
$model->k_laju_implisit =  $sheetData[36]['D'];
$model->l_qtoq =  $sheetData[37]['D'];
$model->l_ytoy =  $sheetData[38]['D'];
$model->l_laju_implisit =  $sheetData[39]['D'];
$model->m_qtoq =  $sheetData[40]['D'];
$model->m_ytoy =  $sheetData[41]['D'];
$model->m_laju_implisit =  $sheetData[42]['D'];
$model->o_qtoq =  $sheetData[43]['D'];
$model->o_ytoy =  $sheetData[44]['D'];
$model->o_laju_implisit =  $sheetData[45]['D'];
$model->p_qtoq =  $sheetData[46]['D'];
$model->p_ytoy =  $sheetData[47]['D'];
$model->p_laju_implisit =  $sheetData[48]['D'];
$model->q_qtoq =  $sheetData[49]['D'];
$model->q_ytoy =  $sheetData[50]['D'];
$model->q_laju_implisit =  $sheetData[51]['D'];
$model->r_qtoq =  $sheetData[52]['D'];
$model->r_ytoy =  $sheetData[53]['D'];
$model->r_laju_implisit =  $sheetData[54]['D'];

                    $model->triwulan = $tw;
                    $model->tahun = $th;
                    $model->id_kab = $kab;

                    $model->save(); 
                    //die(print_r($model->errors));
                    Yii::$app->getSession()->setFlash('success','Data berhasil diupload');
                }
				else Yii::$app->getSession()->setFlash('error', 'Error!!!, File yang diupload kosong');

            }
            else{
                Yii::$app->getSession()->setFlash('error', 'Error');
            }
			return $this->render('input-fenomena', [
                'model' => $input,
                'modelImport' => $modelImport,
            ]);
        }
			
        return $this->render('input-fenomena', [
                'model' => $input,
                'modelImport' => $modelImport,
            ]);
    }
	
   
   /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}