<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Perkebunansemusim */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perkebunansemusim-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tebu')->textInput() ?>

    <?= $form->field($model, 'jarak_pagar')->textInput() ?>

    <?= $form->field($model, 'kenaf')->textInput() ?>

    <?= $form->field($model, 'kapas')->textInput() ?>

    <?= $form->field($model, 'lainnya')->textInput() ?>

    <?= $form->field($model, 'fenomena')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_wil')->textInput() ?>

    <?= $form->field($model, 'id_satuan')->textInput() ?>

    <?= $form->field($model, 'id_tahun')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
