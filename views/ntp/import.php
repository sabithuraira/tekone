<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

$this->title = 'Input Data';
$this->params['breadcrumbs'][] = $this->title;
$tahun = \app\models\Tahun::find()->all();
$listData=ArrayHelper::map($tahun,'id','tahun');

$form = ActiveForm::begin([
	'options' => [
		'enctype'=> 'multipart/form-data',
	],
]) ?>

<div class="box box-default">
	<div class="box-header with-border"><h3 class="box-title">
		<span class="fa fa-upload"></span> Import Data NTP</h3>
	</div>
	
	<div class="box-body">	
		<div class="body-content">
			<div class="row">
				<div class="col-xs-6 col-md-3">
					<label class=" center pull-right">Tahun - Subsektor : </label>
				</div>
			
				<div class="col-xs-3 col-md-3">
					<?= $form->field($model, 'tahun')->dropDownList($listData, 
							['prompt'=>'Pilih Tahun...'])->label(false) 
					?>
				</div>

				<div class="col-xs-3 col-md-3">
					<?= $form->field($model, 'kab')->dropDownList($ntp_model->subsektorList, 
							['prompt'=>'Pilih Subsektor..'])->label(false)
					?>
				</div>
				<div class="col-xs-3 col-md-3"></div>
			</div>

			<div class="row">
				<div class="col-xs-3 col-md-3"><label class="pull-right">File : </label></div>
				
				<div class="col-xs-3 col-md-3">
					<?= $form->field($modelImport,'fileImport')->fileInput()->label('Import Excel')->label(false) ?>
				</div>

				<div class="col-xs-3 col-md-3"></div>
				<div class="col-xs-3 col-md-3"></div>
			</div>	

			<div class="row">
				<div class="col-xs-3 col-md-3"></div>
				<div class="col-xs-3 col-md-3"><?= Html::submitButton('Upload', ['class'=> 'btn btn-success btn-block','style'=>'font-size:14px;padding:7px;']) ?></div>  
				<div class="col-xs-3 col-md-3"><?= Html::a('Download Tamplate', \yii\helpers\Url::to('@web/excel/ntp.xlsx') ,['style'=> 'vertical-align:middle',]) ?></div>
				<div class="col-xs-3 col-md-3"></div>
			</div>

			<div class="row">
				<div class="col-xs-3 col-md-3"><br></div>
				<div class="col-xs-3 col-md-3"></div>  
				<div class="col-xs-3 col-md-3"></div>
				<div class="col-xs-3 col-md-3"></div>
			</div>
		</div>
	</div>
</div>
<?php ActiveForm::end(); ?>