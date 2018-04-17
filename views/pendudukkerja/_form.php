<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pendudukkerja */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pendudukkerja-form">

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
            ['prompt'=>'Pilih Triwulan . .']    // options
        ); ?>

    <?= $form->field($model, 'id_tahun')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
