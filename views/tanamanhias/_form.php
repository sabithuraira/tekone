<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tanamanhias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanamanhias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'anggrek')->textInput() ?>

    <?= $form->field($model, 'anthurium_bunga')->textInput() ?>

    <?= $form->field($model, 'anyelir')->textInput() ?>

    <?= $form->field($model, 'gerbera_hebras')->textInput() ?>

    <?= $form->field($model, 'gladiol')->textInput() ?>

    <?= $form->field($model, 'heliconia_pisang_pisangan')->textInput() ?>

    <?= $form->field($model, 'krisan')->textInput() ?>

    <?= $form->field($model, 'mawar')->textInput() ?>

    <?= $form->field($model, 'sedap_malam')->textInput() ?>

    <?= $form->field($model, 'dracaena')->textInput() ?>

    <?= $form->field($model, 'melati')->textInput() ?>

    <?= $form->field($model, 'palem')->textInput() ?>

    <?= $form->field($model, 'aglaonema')->textInput() ?>

    <?= $form->field($model, 'adenium_kamboja_jepang')->textInput() ?>

    <?= $form->field($model, 'euphorbia')->textInput() ?>

    <?= $form->field($model, 'phylodendron')->textInput() ?>

    <?= $form->field($model, 'pakis')->textInput() ?>

    <?= $form->field($model, 'monstera')->textInput() ?>

    <?= $form->field($model, 'ixora_soka')->textInput() ?>

    <?= $form->field($model, 'cordyline')->textInput() ?>

    <?= $form->field($model, 'diffenbachia')->textInput() ?>

    <?= $form->field($model, 'sansevieria_pedang_pedangan')->textInput() ?>

    <?= $form->field($model, 'anthurium_daun')->textInput() ?>

    <?= $form->field($model, 'caladium')->textInput() ?>

    <?= $form->field($model, 'fenomena')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_wil')->textInput() ?>

    <?= $form->field($model, 'id_satuan')->textInput() ?>

    <?= $form->field($model, 'id_tahun')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
