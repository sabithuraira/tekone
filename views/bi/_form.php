<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Bi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kursjual')->textInput() ?>

    <?= $form->field($model, 'kursbeli')->textInput() ?>

    <?= $form->field($model, 'kurstengah')->textInput() ?>

    <?= $form->field($model, 'fenomena')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_satuan')->dropDownList(
            ArrayHelper::map(app\models\Satuan::find()->all(), 'id', 'nama'),           // Flat array ('id'=>'label')
            ['prompt'=>'Pilih Satuan . .']    // options
        ); ?>
    <?= $form->field($model, 'id_bulanan')->dropDownList(
            ArrayHelper::map(app\models\Satuan::find()->all(), 'id', 'nama'),           // Flat array ('id'=>'label')
            ['prompt'=>'Pilih Bulan . .']    // options
        ); ?>

        <?= $form->field($model, 'id_tahun')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
