<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Neracaperdagangankaltim */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="neracaperdagangankaltim-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ekspor')->textInput() ?>

    <?= $form->field($model, 'impor')->textInput() ?>

    <?= $form->field($model, 'neracaperdagangan')->textInput() ?>

    <?= $form->field($model, 'fenomena')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_satuan')->textInput() ?>

    <?= $form->field($model, 'id_tahun')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
