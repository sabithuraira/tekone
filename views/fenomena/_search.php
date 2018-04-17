<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FenomenaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fenomena-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_rumah_tangga_qtoq') ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_rumah_tangga_ytoy') ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_rumah_tangga_laju_implisit') ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_lnprt_qtoq') ?>

    <?php // echo $form->field($model, 'pengeluaran_konsumsi_lnprt_ytoy') ?>

    <?php // echo $form->field($model, 'pengeluaran_konsumsi_lnprt_laju_implisit') ?>

    <?php // echo $form->field($model, 'pengeluaran_konsumsi_pemerintah_qtoq') ?>

    <?php // echo $form->field($model, 'pengeluaran_konsumsi_pemerintah_ytoy') ?>

    <?php // echo $form->field($model, 'pengeluaran_konsumsi_pemerintah_laju_implisit') ?>

    <?php // echo $form->field($model, 'pembentukan_modal_tetap_bruto_qtoq') ?>

    <?php // echo $form->field($model, 'pembentukan_modal_tetap_bruto_ytoy') ?>

    <?php // echo $form->field($model, 'pembentukan_modal_tetap_bruto_laju_implisit') ?>

    <?php // echo $form->field($model, 'perubahan_inventori_qtoq') ?>

    <?php // echo $form->field($model, 'perubahan_inventori_ytoy') ?>

    <?php // echo $form->field($model, 'perubahan_inventori_laju_implisit') ?>

    <?php // echo $form->field($model, 'ekspor_luar_negeri_qtoq') ?>

    <?php // echo $form->field($model, 'ekspor_luar_negeri_ytoy') ?>

    <?php // echo $form->field($model, 'ekspor_luar_negeri_laju_implisit') ?>

    <?php // echo $form->field($model, 'impor_luar_negeri_qtoq') ?>

    <?php // echo $form->field($model, 'impor_luar_negeri_ytoy') ?>

    <?php // echo $form->field($model, 'impor_luar_negeri_implisit') ?>

    <?php // echo $form->field($model, 'net_ekspor_antar_daerah_qtoq') ?>

    <?php // echo $form->field($model, 'net_ekspor_antar_daerah_ytoy') ?>

    <?php // echo $form->field($model, 'net_ekspor_antar_daerah_implisit') ?>

    <?php // echo $form->field($model, 'id_kab') ?>

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
