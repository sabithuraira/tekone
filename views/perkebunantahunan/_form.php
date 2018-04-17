<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Perkebunantahunan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perkebunantahunan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'karet')->textInput() ?>

    <?= $form->field($model, 'kelapa_dalam')->textInput() ?>

    <?= $form->field($model, 'kelapa_sawit')->textInput() ?>

    <?= $form->field($model, 'kakao')->textInput() ?>

    <?= $form->field($model, 'lada')->textInput() ?>

    <?= $form->field($model, 'kopi')->textInput() ?>

    <?= $form->field($model, 'cengkeh')->textInput() ?>

    <?= $form->field($model, 'pala')->textInput() ?>

    <?= $form->field($model, 'kemiri')->textInput() ?>

    <?= $form->field($model, 'kayu_manis')->textInput() ?>

    <?= $form->field($model, 'aren')->textInput() ?>

    <?= $form->field($model, 'kapok')->textInput() ?>

    <?= $form->field($model, 'jambu_mete')->textInput() ?>

    <?= $form->field($model, 'panili')->textInput() ?>

    <?= $form->field($model, 'nipah')->textInput() ?>

    <?= $form->field($model, 'pinang')->textInput() ?>

    <?= $form->field($model, 'sagu_')->textInput() ?>

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
