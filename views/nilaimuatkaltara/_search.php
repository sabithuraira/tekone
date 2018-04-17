<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Nilaimuatkaltarasearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nilaimuatkaltara-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'lingkastarakan') ?>

    <?= $form->field($model, 'nunukan') ?>

    <?= $form->field($model, 'bunyu') ?>

    <?= $form->field($model, 'tanjungselor') ?>

    <?php // echo $form->field($model, 'tarakanu') ?>

    <?php // echo $form->field($model, 'juatatarakan') ?>

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
