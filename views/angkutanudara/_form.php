<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Angkutanudara */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="angkutanudara-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'penumpangberangkat')->textInput() ?>

    <?= $form->field($model, 'barangmuat')->textInput() ?>

    <?= $form->field($model, 'bagasimuat')->textInput() ?>

    <?= $form->field($model, 'paketpos')->textInput() ?>

    <?= $form->field($model, 'fenomena')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_bulan')->textInput() ?>

    <?= $form->field($model, 'id_satuan')->textInput() ?>

    <?= $form->field($model, 'id_tahun')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
