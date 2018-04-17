<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Perkebunantahunansearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perkebunantahunan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'karet') ?>

    <?= $form->field($model, 'kelapa_dalam') ?>

    <?= $form->field($model, 'kelapa_sawit') ?>

    <?= $form->field($model, 'kakao') ?>

    <?php // echo $form->field($model, 'lada') ?>

    <?php // echo $form->field($model, 'kopi') ?>

    <?php // echo $form->field($model, 'cengkeh') ?>

    <?php // echo $form->field($model, 'pala') ?>

    <?php // echo $form->field($model, 'kemiri') ?>

    <?php // echo $form->field($model, 'kayu_manis') ?>

    <?php // echo $form->field($model, 'aren') ?>

    <?php // echo $form->field($model, 'kapok') ?>

    <?php // echo $form->field($model, 'jambu_mete') ?>

    <?php // echo $form->field($model, 'panili') ?>

    <?php // echo $form->field($model, 'nipah') ?>

    <?php // echo $form->field($model, 'pinang') ?>

    <?php // echo $form->field($model, 'sagu_') ?>

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
