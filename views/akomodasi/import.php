<?php
use yii\helpers\Html;

$this->title = 'Import Akomodasi';
 $form = \yii\widgets\ActiveForm::begin([
	'options' => [
		'enctype'=> 'multipart/form-data',
	],
	'action' => ['import'],
]) ?>

<?= $form->field($modelImport,'fileImport')->fileInput()->label('Import Excel') ?>
<p>
<?= Html::submitButton('Import',['class' => 'btn btn-success']) ?>

<?= Html::a('Download Tamplate', \yii\helpers\Url::to('@web/excel/akomodasi.xlsx') ) ?>
</p>
<?php \yii\widgets\ActiveForm::end() ?>