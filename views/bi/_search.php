<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bisearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'kurs') ?>

    <?= $form->field($model, 'kursjual') ?>

    <?= $form->field($model, 'kursbeli') ?>

    <?= $form->field($model, 'kurstengah') ?>

    <?php // echo $form->field($model, 'fenomena') ?>

    <?php // echo $form->field($model, 'id_satuan') ?>

    <?php // echo $form->field($model, 'id_tahun') ?>

    <?php // echo $form->field($model, 'id_bulanan') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
