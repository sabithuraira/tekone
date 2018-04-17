<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sayurbuahsemusimsearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sayurbuahsemusim-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'bawang_merah') ?>

    <?= $form->field($model, 'bawang_putih') ?>

    <?= $form->field($model, 'bawang_daun') ?>

    <?= $form->field($model, 'kentang_') ?>

    <?php // echo $form->field($model, 'kubis') ?>

    <?php // echo $form->field($model, 'kembang_kol') ?>

    <?php // echo $form->field($model, 'petsaisawi') ?>

    <?php // echo $form->field($model, 'wortel') ?>

    <?php // echo $form->field($model, 'lobak') ?>

    <?php // echo $form->field($model, 'kacang_merah') ?>

    <?php // echo $form->field($model, 'kacang_panjang') ?>

    <?php // echo $form->field($model, 'cabe_besar') ?>

    <?php // echo $form->field($model, 'cabe_rawit') ?>

    <?php // echo $form->field($model, 'paprika') ?>

    <?php // echo $form->field($model, 'jamur') ?>

    <?php // echo $form->field($model, 'tomat') ?>

    <?php // echo $form->field($model, 'terung') ?>

    <?php // echo $form->field($model, 'buncis') ?>

    <?php // echo $form->field($model, 'ketimun') ?>

    <?php // echo $form->field($model, 'labu_siam') ?>

    <?php // echo $form->field($model, 'kangkung') ?>

    <?php // echo $form->field($model, 'bayam') ?>

    <?php // echo $form->field($model, 'melon') ?>

    <?php // echo $form->field($model, 'semangka') ?>

    <?php // echo $form->field($model, 'blewah') ?>

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
