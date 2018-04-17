<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PdrbPengeluaranTd2010AdhKonstan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pdrb-pengeluaran-td2010-adh-konstan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_rumah_tangga')->textInput() ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_lnprt')->textInput() ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_pemerintah')->textInput() ?>

    <?= $form->field($model, 'pembentukan_modal_tetap_bruto')->textInput() ?>

    <?= $form->field($model, 'perubahan_inventori')->textInput() ?>

    <?= $form->field($model, 'ekspor_luar_negeri')->textInput() ?>

    <?= $form->field($model, 'impor_luar_negeri')->textInput() ?>

    <?= $form->field($model, 'net_ekspor_antar_daerah')->textInput() ?>

    <?= $form->field($model, 'pdrb')->textInput() ?>

    <?= $form->field($model, 'total_sektoral')->textInput() ?>

    <?= $form->field($model, 'triwulan')->textInput() ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
