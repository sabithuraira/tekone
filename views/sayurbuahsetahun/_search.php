<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sayurbuahsetahunsearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sayurbuahsetahun-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'alpukat') ?>

    <?= $form->field($model, 'belimbing') ?>

    <?= $form->field($model, 'duku_langsat') ?>

    <?= $form->field($model, 'durian') ?>

    <?php // echo $form->field($model, 'jambu_biji') ?>

    <?php // echo $form->field($model, 'jambu_air') ?>

    <?php // echo $form->field($model, 'jeruk_siam_keprok') ?>

    <?php // echo $form->field($model, 'jeruk_besar') ?>

    <?php // echo $form->field($model, 'mangga') ?>

    <?php // echo $form->field($model, 'manggis') ?>

    <?php // echo $form->field($model, 'nangka_cempedak') ?>

    <?php // echo $form->field($model, 'nenas') ?>

    <?php // echo $form->field($model, 'pepaya') ?>

    <?php // echo $form->field($model, 'pisang') ?>

    <?php // echo $form->field($model, 'rambutan') ?>

    <?php // echo $form->field($model, 'salak') ?>

    <?php // echo $form->field($model, 'sawo') ?>

    <?php // echo $form->field($model, 'markisa_konyal') ?>

    <?php // echo $form->field($model, 'sirsak') ?>

    <?php // echo $form->field($model, 'sukun') ?>

    <?php // echo $form->field($model, 'melinjo') ?>

    <?php // echo $form->field($model, 'petai') ?>

    <?php // echo $form->field($model, 'jengkol') ?>

    <?php // echo $form->field($model, 'lainnya') ?>

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
