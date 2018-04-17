<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tanamanbiofarmaka */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanamanbiofarmaka-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'jahe')->textInput() ?>

    <?= $form->field($model, 'laos_lengkuas')->textInput() ?>

    <?= $form->field($model, 'kencur')->textInput() ?>

    <?= $form->field($model, 'kunyit')->textInput() ?>

    <?= $form->field($model, 'lempuyang')->textInput() ?>

    <?= $form->field($model, 'temulawak')->textInput() ?>

    <?= $form->field($model, 'temuireng')->textInput() ?>

    <?= $form->field($model, 'temukunci')->textInput() ?>

    <?= $form->field($model, 'dlingo_dringo')->textInput() ?>

    <?= $form->field($model, 'kapulaga')->textInput() ?>

    <?= $form->field($model, 'mengkudu_pace')->textInput() ?>

    <?= $form->field($model, 'mahkota_dewa')->textInput() ?>

    <?= $form->field($model, 'kejibeling')->textInput() ?>

    <?= $form->field($model, 'sambiloto')->textInput() ?>

    <?= $form->field($model, 'lidah_buaya')->textInput() ?>

    <?= $form->field($model, 'biofarmaka_lainnya')->textInput() ?>

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
