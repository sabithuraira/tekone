<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tanamanbiofarmakasearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanamanbiofarmaka-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'jahe') ?>

    <?= $form->field($model, 'laos_lengkuas') ?>

    <?= $form->field($model, 'kencur') ?>

    <?= $form->field($model, 'kunyit') ?>

    <?php // echo $form->field($model, 'lempuyang') ?>

    <?php // echo $form->field($model, 'temulawak') ?>

    <?php // echo $form->field($model, 'temuireng') ?>

    <?php // echo $form->field($model, 'temukunci') ?>

    <?php // echo $form->field($model, 'dlingo_dringo') ?>

    <?php // echo $form->field($model, 'kapulaga') ?>

    <?php // echo $form->field($model, 'mengkudu_pace') ?>

    <?php // echo $form->field($model, 'mahkota_dewa') ?>

    <?php // echo $form->field($model, 'kejibeling') ?>

    <?php // echo $form->field($model, 'sambiloto') ?>

    <?php // echo $form->field($model, 'lidah_buaya') ?>

    <?php // echo $form->field($model, 'biofarmaka_lainnya') ?>

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
