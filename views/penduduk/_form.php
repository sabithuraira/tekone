<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penduduk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penduduk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'laki')->textInput() ?>

    <?= $form->field($model, 'perempuan')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

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
