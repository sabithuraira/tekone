<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PdrbPengeluaranTd2010AdhBerlakusearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pdrb-pengeluaran-td2010-adh-berlaku-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_rumah_tangga') ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_lnprt') ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_pemerintah') ?>

    <?= $form->field($model, 'pembentukan_modal_tetap_bruto') ?>

    <?php // echo $form->field($model, 'perubahan_inventori') ?>

    <?php // echo $form->field($model, 'ekspor_luar_negeri') ?>

    <?php // echo $form->field($model, 'impor_luar_negeri') ?>

    <?php // echo $form->field($model, 'net_ekspor_antar_daerah') ?>

    <?php // echo $form->field($model, 'pdrb') ?>

    <?php // echo $form->field($model, 'total_sektoral') ?>

    <?php // echo $form->field($model, 'triwulan') ?>

    <?php // echo $form->field($model, 'tahun') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
