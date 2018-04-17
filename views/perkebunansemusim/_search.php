<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Perkebunansemusimsearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perkebunansemusim-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tebu') ?>

    <?= $form->field($model, 'jarak_pagar') ?>

    <?= $form->field($model, 'kenaf') ?>

    <?= $form->field($model, 'kapas') ?>

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
