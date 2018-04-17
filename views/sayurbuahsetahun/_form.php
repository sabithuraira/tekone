<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sayurbuahsetahun */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sayurbuahsetahun-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'alpukat')->textInput() ?>

    <?= $form->field($model, 'belimbing')->textInput() ?>

    <?= $form->field($model, 'duku_langsat')->textInput() ?>

    <?= $form->field($model, 'durian')->textInput() ?>

    <?= $form->field($model, 'jambu_biji')->textInput() ?>

    <?= $form->field($model, 'jambu_air')->textInput() ?>

    <?= $form->field($model, 'jeruk_siam_keprok')->textInput() ?>

    <?= $form->field($model, 'jeruk_besar')->textInput() ?>

    <?= $form->field($model, 'mangga')->textInput() ?>

    <?= $form->field($model, 'manggis')->textInput() ?>

    <?= $form->field($model, 'nangka_cempedak')->textInput() ?>

    <?= $form->field($model, 'nenas')->textInput() ?>

    <?= $form->field($model, 'pepaya')->textInput() ?>

    <?= $form->field($model, 'pisang')->textInput() ?>

    <?= $form->field($model, 'rambutan')->textInput() ?>

    <?= $form->field($model, 'salak')->textInput() ?>

    <?= $form->field($model, 'sawo')->textInput() ?>

    <?= $form->field($model, 'markisa_konyal')->textInput() ?>

    <?= $form->field($model, 'sirsak')->textInput() ?>

    <?= $form->field($model, 'sukun')->textInput() ?>

    <?= $form->field($model, 'melinjo')->textInput() ?>

    <?= $form->field($model, 'petai')->textInput() ?>

    <?= $form->field($model, 'jengkol')->textInput() ?>

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
