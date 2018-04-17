<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Klasifikasibintangsearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="klasifikasibintang-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'bintang1') ?>

    <?= $form->field($model, 'bintang2') ?>

    <?= $form->field($model, 'bintang3') ?>

    <?= $form->field($model, 'bintang4') ?>

    <?php // echo $form->field($model, 'bintang5') ?>

    <?php // echo $form->field($model, 'fenomena') ?>

    <?php // echo $form->field($model, 'id_bulan') ?>

    <?php // echo $form->field($model, 'id_satuan') ?>

    <?php // echo $form->field($model, 'id_wil') ?>

    <?php // echo $form->field($model, 'id_tahun') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
