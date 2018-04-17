<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ekspormenurutbeberapagolongansearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ekspormenurutbeberapagolongan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'bahanbakarmineral') ?>

    <?= $form->field($model, 'migas') ?>

    <?= $form->field($model, 'nonmigas') ?>

    <?= $form->field($model, 'pupuk') ?>

    <?php // echo $form->field($model, 'lemakdanminyakhewaninabatimalamnabati') ?>

    <?php // echo $form->field($model, 'bahankimiaanorganik') ?>

    <?php // echo $form->field($model, 'kayudanbarangdarikayuarangkayu') ?>

    <?php // echo $form->field($model, 'bahankimiaorganik') ?>

    <?php // echo $form->field($model, 'anekaprodukkimia') ?>

    <?php // echo $form->field($model, 'kapalperahudanstrukturterapung') ?>

    <?php // echo $form->field($model, 'reaktornuklirketelmesindanperalatanmekanis') ?>

    <?php // echo $form->field($model, 'ikandankrustaseamoluskasertainvertebrataairlainnya') ?>

    <?php // echo $form->field($model, 'total10golonganbarang') ?>

    <?php // echo $form->field($model, 'lainnya') ?>

    <?php // echo $form->field($model, 'totalekspor') ?>

    <?php // echo $form->field($model, 'fenomena') ?>

    <?php // echo $form->field($model, 'id_satuan') ?>

    <?php // echo $form->field($model, 'id_tahun') ?>

    <?php // echo $form->field($model, 'id_bulan') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
