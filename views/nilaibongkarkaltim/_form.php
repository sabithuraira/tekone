<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nilaibongkarkaltim */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nilaibongkarkaltim-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bontang')->textInput() ?>

    <?= $form->field($model, 'samarinda')->textInput() ?>

    <?= $form->field($model, 'balikpapan')->textInput() ?>

    <?= $form->field($model, 'tanjungsangata')->textInput() ?>

    <?= $form->field($model, 'adangbay')->textInput() ?>

    <?= $form->field($model, 'tanjungredeb')->textInput() ?>

    <?= $form->field($model, 'senipah')->textInput() ?>

    <?= $form->field($model, 'sangkulirang')->textInput() ?>

    <?= $form->field($model, 'pasirtanahgrogot')->textInput() ?>

    <?= $form->field($model, 'sepingganu')->textInput() ?>

    <?= $form->field($model, 'lainnya')->textInput() ?>

    <?= $form->field($model, 'jumlahtotal')->textInput() ?>

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
