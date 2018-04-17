<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use kartik\social\Disqus;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use miloschuman\highcharts\Highcharts;
use yii\web\JsExpression;

$this->title = 'Data Series';
$this->params['breadcrumbs'][] = $this->title;
$tahun = \app\models\Tahun::find()->all();
$listData=ArrayHelper::map($tahun,'id','tahun');
$judul = \app\models\Judul::find()->all();
$listDataJudul=ArrayHelper::map($judul,'id','judul');
$form = ActiveForm::begin();
?>
<div class="box box-default">
<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	Data Series PDRB Sektoral</h3>
	</div>
<div class="box-body">	

	<div class="body-content">
	<div class="row">
	<div class="col-xs-3 col-md-3">
  <label class=" center pull-right">Jumlah Tahun Series - Variabel : </label>
  </div>

 <div class="col-xs-2 col-md-2"><?= $form->field($model, 'tahuna')->dropDownList(
								['1' => '1', '2' => '2', '3' => '3', '4' => '4', '5' => '5', '6' => '6', '7' => '7', '8' => '8', '9' => '9', '10' => '10'])->label(false) ?></div>
  <div class="col-xs-5 col-md-5"><?= $form->field($model, 'judul')->dropDownList(
								$listDataJudul)->label(false)?></div>
  <div class="col-xs-1 col-md-1"><?= Html::submitButton('Tampil', ['class'=> 'btn btn-warning btn-block','style'=>'font-size:14px;padding:7px;']) ?></div>
  <?php ActiveForm::end(); ?>
</div>

	<div class="box box-solid box-info">
	<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	Total PDRB </h3>
	</div>
	
	<div class="box-body">	
<?php 
$categoriesListTh=array();
$categoriesListNilai=array();

    foreach ($tabel as $category){

        $categoriesListTh[] = $category->tahun.' - Triwulan '.$category->triwulan;
        $categoriesListNilaia[] = $category->a;
        $categoriesListNilaib[] = $category->b;
        $categoriesListNilaic[] = $category->c;
        $categoriesListNilaid[] = $category->d;
        $categoriesListNilaie[] = $category->e;
        $categoriesListNilaif[] = $category->f;
        $categoriesListNilaig[] = $category->g;
        $categoriesListNilaih[] = $category->h;
        $categoriesListNilaii[] = $category->i;
        $categoriesListNilaij[] = $category->j;
        $categoriesListNilaik[] = $category->k;
        $categoriesListNilail[] = $category->l;
        $categoriesListNilaim[] = $category->m;
        $categoriesListNilaio[] = $category->o;
        $categoriesListNilaip[] = $category->p;
        $categoriesListNilaiq[] = $category->q;
        $categoriesListNilair[] = $category->r;
        $categoriesListNilaiTotal[] = $category->pdrb;
        $categoriesListNilaiMigas[] = $category->pdrb_tanpa_migas;

    }
echo Highcharts::widget([
    'scripts' => [
        'modules/exporting',
        'themes/grid-light',
    ],
    'options' => [
        'title' => [
            'text' => \app\models\Judul::findOne($judul)->judul,
        ],
        'xAxis' => [
            'categories' => $categoriesListTh,
        ],

        'series' => [
            [
                'type' => 'column',
                'name' => \app\models\Judul::findOne($judul)->judul,
                'data' => $categoriesListNilaiTotal,
            ],


        ],
    ]
]); ?>
	</div>
	
	</div>

		<div class="box box-solid box-info">
	<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	Total PDRB Tanpa Migas </h3>
	</div>
	
	<div class="box-body">	
<?php 


echo Highcharts::widget([
    'scripts' => [
        'modules/exporting',
        'themes/grid-light',
    ],
    'options' => [
        'title' => [
            'text' => \app\models\Judul::findOne($judul)->judul,
        ],
        'xAxis' => [
            'categories' => $categoriesListTh,
        ],

        'series' => [
            [
                'type' => 'column',
                'name' => \app\models\Judul::findOne($judul)->judul,
                'data' => $categoriesListNilaiMigas,
            ],

        ],
    ]
]); ?>
	</div>
	
	</div>

	</div>
</div>
</div>
