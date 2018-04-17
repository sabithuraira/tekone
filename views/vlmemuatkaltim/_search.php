<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\VlmemuatkaltimSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="vlmemuatkaltim-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'bontang') ?>

    <?= $form->field($model, 'samarinda') ?>

    <?= $form->field($model, 'balikpapan') ?>

    <?= $form->field($model, 'tanjungsangata') ?>

    <?php // echo $form->field($model, 'adangbay') ?>

    <?php // echo $form->field($model, 'tanjungredeb') ?>

    <?php // echo $form->field($model, 'senipah') ?>

    <?php // echo $form->field($model, 'sangkulirang') ?>

    <?php // echo $form->field($model, 'pasirtanahgrogot') ?>

    <?php // echo $form->field($model, 'sepingganu') ?>

    <?php // echo $form->field($model, 'lainnya') ?>

    <?php // echo $form->field($model, 'jumlahtotal') ?>

    <?php // echo $form->field($model, 'fenomena') ?>

    <?php // echo $form->field($model, 'id_wil') ?>

    <?php // echo $form->field($model, 'id_satuan') ?>

    <?php // echo $form->field($model, 'id_tahun') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
