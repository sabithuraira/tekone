<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tanamanhiassearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tanamanhias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'anggrek') ?>

    <?= $form->field($model, 'anthurium_bunga') ?>

    <?= $form->field($model, 'anyelir') ?>

    <?= $form->field($model, 'gerbera_hebras') ?>

    <?php // echo $form->field($model, 'gladiol') ?>

    <?php // echo $form->field($model, 'heliconia_pisang_pisangan') ?>

    <?php // echo $form->field($model, 'krisan') ?>

    <?php // echo $form->field($model, 'mawar') ?>

    <?php // echo $form->field($model, 'sedap_malam') ?>

    <?php // echo $form->field($model, 'dracaena') ?>

    <?php // echo $form->field($model, 'melati') ?>

    <?php // echo $form->field($model, 'palem') ?>

    <?php // echo $form->field($model, 'aglaonema') ?>

    <?php // echo $form->field($model, 'adenium_kamboja_jepang') ?>

    <?php // echo $form->field($model, 'euphorbia') ?>

    <?php // echo $form->field($model, 'phylodendron') ?>

    <?php // echo $form->field($model, 'pakis') ?>

    <?php // echo $form->field($model, 'monstera') ?>

    <?php // echo $form->field($model, 'ixora_soka') ?>

    <?php // echo $form->field($model, 'cordyline') ?>

    <?php // echo $form->field($model, 'diffenbachia') ?>

    <?php // echo $form->field($model, 'sansevieria_pedang_pedangan') ?>

    <?php // echo $form->field($model, 'anthurium_daun') ?>

    <?php // echo $form->field($model, 'caladium') ?>

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
