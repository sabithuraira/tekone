<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Perkembanganimpor */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="perkembanganimpor-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'migas')->textInput() ?>

    <?= $form->field($model, 'minyakmentah')->textInput() ?>

    <?= $form->field($model, 'hasilminyak')->textInput() ?>

    <?= $form->field($model, 'gas')->textInput() ?>

    <?= $form->field($model, 'nonmigas')->textInput() ?>

    <?= $form->field($model, 'hs27')->textInput() ?>

    <?= $form->field($model, 'lainnya')->textInput() ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'fenomena')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_satuan')->textInput() ?>

    <?= $form->field($model, 'id_tahun')->textInput() ?>

    <?= $form->field($model, 'id_bulan')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
