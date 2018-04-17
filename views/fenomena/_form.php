<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fenomena */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fenomena-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_rumah_tangga_qtoq')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_rumah_tangga_ytoy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_rumah_tangga_laju_implisit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_lnprt_qtoq')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_lnprt_ytoy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_lnprt_laju_implisit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_pemerintah_qtoq')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_pemerintah_ytoy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pengeluaran_konsumsi_pemerintah_laju_implisit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pembentukan_modal_tetap_bruto_qtoq')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pembentukan_modal_tetap_bruto_ytoy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pembentukan_modal_tetap_bruto_laju_implisit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'perubahan_inventori_qtoq')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'perubahan_inventori_ytoy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'perubahan_inventori_laju_implisit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ekspor_luar_negeri_qtoq')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ekspor_luar_negeri_ytoy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'ekspor_luar_negeri_laju_implisit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'impor_luar_negeri_qtoq')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'impor_luar_negeri_ytoy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'impor_luar_negeri_implisit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'net_ekspor_antar_daerah_qtoq')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'net_ekspor_antar_daerah_ytoy')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'net_ekspor_antar_daerah_implisit')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_kab')->textInput() ?>

    <?= $form->field($model, 'triwulan')->textInput() ?>

    <?= $form->field($model, 'tahun')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
