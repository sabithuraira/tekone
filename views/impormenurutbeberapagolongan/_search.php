<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Impormenurutbeberapagolongansearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="impormenurutbeberapagolongan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'bahanbakarmineral') ?>

    <?= $form->field($model, 'migas') ?>

    <?= $form->field($model, 'nonmigas') ?>

    <?= $form->field($model, 'mesindanperalatanmekanik') ?>

    <?php // echo $form->field($model, 'kendaraanbermotordanbagiannya') ?>

    <?php // echo $form->field($model, 'barangdaribesiataubaja') ?>

    <?php // echo $form->field($model, 'bahanpeledakprodukpiroteknikkorekapi') ?>

    <?php // echo $form->field($model, 'mesindanperalatanlistrik') ?>

    <?php // echo $form->field($model, 'karetdanbarangdaripadanya') ?>

    <?php // echo $form->field($model, 'mutiaraalammutiarabudidayabatumuliaatausemimulia') ?>

    <?php // echo $form->field($model, 'anekaprodukkimia') ?>

    <?php // echo $form->field($model, 'instrumendanaparatusoptisfotografisinematografi') ?>

    <?php // echo $form->field($model, 'total10golonganbarang') ?>

    <?php // echo $form->field($model, 'lainnya') ?>

    <?php // echo $form->field($model, 'totalimpor') ?>

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
