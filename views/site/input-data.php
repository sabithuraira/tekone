<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use hscstudio\chart\ChartNew;
use kartik\social\Disqus;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
$this->title = 'Input Data';
$this->params['breadcrumbs'][] = $this->title;
$tahun = \app\models\Tahun::find()->all();
$judul = \app\models\Judul::find()->all();
$listData=ArrayHelper::map($tahun,'id','tahun');
$listDataJudul=ArrayHelper::map($judul,'id','judul');
$form = ActiveForm::begin([
	'options' => [
		'enctype'=> 'multipart/form-data',
	],
]) ?>

<div class="box box-default">
<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-upload"></span>
	Input Data PDRB</h3>
	</div>
<div class="box-body">	
<p>Input data dilakukan oleh admin, pilih sesuai judul variabel yang akan diupload</p>
    
	<div class="body-content">
	<div class="row">
  <div class="col-xs-6 col-md-3">
  <label class=" center pull-right">Tahun - Triwulan : </label>
  </div>
  <div class="col-xs-3 col-md-3"><?= $form->field($model, 'tahun')->dropDownList(
								$listData, 
								['prompt'=>'Pilih Tahun...'])->label(false) ?></div>
  <div class="col-xs-3 col-md-3"><?= $form->field($model, 'tw')->dropDownList(
								['1' => 'Triwulan I', '2' => 'Triwulan II', '3' => 'Triwulan III', '4' => 'Triwulan IV'], 
								['prompt'=>'Pilih Triwulan...'])->label(false)?></div>
  <div class="col-xs-3 col-md-3"></div>
</div>
	<div class="row">
  <div class="col-xs-6 col-md-3">
  <label class="pull-right">Judul Variabel : </label>
  </div>
  <div class="col-xs-6 col-md-6"><?= $form->field($model, 'judul')->dropDownList(
								$listDataJudul, 
								['prompt'=>'Pilih Variabel...'])->label(false) ?></div>
<div class="col-xs-3 col-md-3"></div>
</div>

	<div class="row">
  <div class="col-xs-3 col-md-3"><label class="pull-right">File : </label>
  </div>
<div class="col-xs-3 col-md-3"><?= $form->field($modelImport,'fileImport')->fileInput()->label('Import Excel')->label(false) ?></div>  
<div class="col-xs-3 col-md-3"></div>
<div class="col-xs-3 col-md-3"></div>
</div>	

<div class="row">
  <div class="col-xs-3 col-md-3">
  </div>
<div class="col-xs-3 col-md-3"><?= Html::submitButton('Upload', ['class'=> 'btn btn-success btn-block','style'=>'font-size:14px;padding:7px;']) ?></div>  
<div class="col-xs-3 col-md-3"><?= Html::a('Download Tamplate', \yii\helpers\Url::to('@web/excel/pdrb.xlsx') ,['style'=> 'vertical-align:middle',]) ?></div>
<div class="col-xs-3 col-md-3"></div>
</div>

<div class="row">
  <div class="col-xs-3 col-md-3"><br>
  </div>
<div class="col-xs-3 col-md-3"></div>  
<div class="col-xs-3 col-md-3"></div>
<div class="col-xs-3 col-md-3"></div>
</div>
</div>
</div>
</div>
<?php ActiveForm::end(); ?>