<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Sayurbuahsemusim */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="sayurbuahsemusim-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bawang_merah')->textInput() ?>

    <?= $form->field($model, 'bawang_putih')->textInput() ?>

    <?= $form->field($model, 'bawang_daun')->textInput() ?>

    <?= $form->field($model, 'kentang_')->textInput() ?>

    <?= $form->field($model, 'kubis')->textInput() ?>

    <?= $form->field($model, 'kembang_kol')->textInput() ?>

    <?= $form->field($model, 'petsaisawi')->textInput() ?>

    <?= $form->field($model, 'wortel')->textInput() ?>

    <?= $form->field($model, 'lobak')->textInput() ?>

    <?= $form->field($model, 'kacang_merah')->textInput() ?>

    <?= $form->field($model, 'kacang_panjang')->textInput() ?>

    <?= $form->field($model, 'cabe_besar')->textInput() ?>

    <?= $form->field($model, 'cabe_rawit')->textInput() ?>

    <?= $form->field($model, 'paprika')->textInput() ?>

    <?= $form->field($model, 'jamur')->textInput() ?>

    <?= $form->field($model, 'tomat')->textInput() ?>

    <?= $form->field($model, 'terung')->textInput() ?>

    <?= $form->field($model, 'buncis')->textInput() ?>

    <?= $form->field($model, 'ketimun')->textInput() ?>

    <?= $form->field($model, 'labu_siam')->textInput() ?>

    <?= $form->field($model, 'kangkung')->textInput() ?>

    <?= $form->field($model, 'bayam')->textInput() ?>

    <?= $form->field($model, 'melon')->textInput() ?>

    <?= $form->field($model, 'semangka')->textInput() ?>

    <?= $form->field($model, 'blewah')->textInput() ?>

    <?= $form->field($model, 'lainnya')->textInput() ?>

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
