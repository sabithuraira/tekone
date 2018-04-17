<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ekspormenurutbeberapagolongan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ekspormenurutbeberapagolongan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bahanbakarmineral')->textInput() ?>

    <?= $form->field($model, 'migas')->textInput() ?>

    <?= $form->field($model, 'nonmigas')->textInput() ?>

    <?= $form->field($model, 'pupuk')->textInput() ?>

    <?= $form->field($model, 'lemakdanminyakhewaninabatimalamnabati')->textInput() ?>

    <?= $form->field($model, 'bahankimiaanorganik')->textInput() ?>

    <?= $form->field($model, 'kayudanbarangdarikayuarangkayu')->textInput() ?>

    <?= $form->field($model, 'bahankimiaorganik')->textInput() ?>

    <?= $form->field($model, 'anekaprodukkimia')->textInput() ?>

    <?= $form->field($model, 'kapalperahudanstrukturterapung')->textInput() ?>

    <?= $form->field($model, 'reaktornuklirketelmesindanperalatanmekanis')->textInput() ?>

    <?= $form->field($model, 'ikandankrustaseamoluskasertainvertebrataairlainnya')->textInput() ?>

    <?= $form->field($model, 'total10golonganbarang')->textInput() ?>

    <?= $form->field($model, 'lainnya')->textInput() ?>

    <?= $form->field($model, 'totalekspor')->textInput() ?>

    <?= $form->field($model, 'fenomena')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_satuan')->textInput() ?>

    <?= $form->field($model, 'id_tahun')->textInput() ?>

    <?= $form->field($model, 'id_bulan')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
