<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Impormenurutbeberapagolongan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="impormenurutbeberapagolongan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bahanbakarmineral')->textInput() ?>

    <?= $form->field($model, 'migas')->textInput() ?>

    <?= $form->field($model, 'nonmigas')->textInput() ?>

    <?= $form->field($model, 'mesindanperalatanmekanik')->textInput() ?>

    <?= $form->field($model, 'kendaraanbermotordanbagiannya')->textInput() ?>

    <?= $form->field($model, 'barangdaribesiataubaja')->textInput() ?>

    <?= $form->field($model, 'bahanpeledakprodukpiroteknikkorekapi')->textInput() ?>

    <?= $form->field($model, 'mesindanperalatanlistrik')->textInput() ?>

    <?= $form->field($model, 'karetdanbarangdaripadanya')->textInput() ?>

    <?= $form->field($model, 'mutiaraalammutiarabudidayabatumuliaatausemimulia')->textInput() ?>

    <?= $form->field($model, 'anekaprodukkimia')->textInput() ?>

    <?= $form->field($model, 'instrumendanaparatusoptisfotografisinematografi')->textInput() ?>

    <?= $form->field($model, 'total10golonganbarang')->textInput() ?>

    <?= $form->field($model, 'lainnya')->textInput() ?>

    <?= $form->field($model, 'totalimpor')->textInput() ?>

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
