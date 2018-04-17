<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Aram */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="aram-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'padisawah')->textInput() ?>

    <?= $form->field($model, 'padiladang')->textInput() ?>

    <?= $form->field($model, 'padi')->textInput() ?>

    <?= $form->field($model, 'jagung')->textInput() ?>

    <?= $form->field($model, 'kedelai')->textInput() ?>

    <?= $form->field($model, 'kacangtanah')->textInput() ?>

    <?= $form->field($model, 'kacanghijau')->textInput() ?>

    <?= $form->field($model, 'ubikayu')->textInput() ?>

    <?= $form->field($model, 'ubijalar')->textInput() ?>

    <?= $form->field($model, 'fenomena')->textarea(['rows' => 6]) ?>

   <?= $form->field($model, 'id_satuan')->dropDownList(
            yii\helpers\ArrayHelper::map(app\models\Satuan::find()->all(), 'id', 'nama'),           // Flat array ('id'=>'label')
            ['prompt'=>'Pilih Satuan . .']    // options
        ); ?>
    <?= $form->field($model, 'id_wil')->dropDownList(
            yii\helpers\ArrayHelper::map(app\models\Wilayah::find()->all(), 'id', 'nama'),           // Flat array ('id'=>'label')
            ['prompt'=>'Pilih Wilayah . .']    // options
        ); ?>

    <?= $form->field($model, 'id_tahun')->textInput() ?>
	

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
