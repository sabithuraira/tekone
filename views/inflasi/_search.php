<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Inflasisearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="inflasi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'bahanmakanan') ?>

    <?= $form->field($model, 'padipadianumbiumbianhasilnya') ?>

    <?= $form->field($model, 'daginghasilhasilnya') ?>

    <?= $form->field($model, 'ikansegar') ?>

    <?php // echo $form->field($model, 'ikandiawetkan') ?>

    <?php // echo $form->field($model, 'telursusuhasilnya') ?>

    <?php // echo $form->field($model, 'sayursayuran') ?>

    <?php // echo $form->field($model, 'kacangkacangan') ?>

    <?php // echo $form->field($model, 'buahbuahan') ?>

    <?php // echo $form->field($model, 'bumbubumbuan') ?>

    <?php // echo $form->field($model, 'lemakdanminyak') ?>

    <?php // echo $form->field($model, 'bahanmakananlainnya') ?>

    <?php // echo $form->field($model, 'makananjadirokoktembakau') ?>

    <?php // echo $form->field($model, 'makananjadi') ?>

    <?php // echo $form->field($model, 'minumanyangtdkberalkohol') ?>

    <?php // echo $form->field($model, 'tembakaudanminumanberalkohol') ?>

    <?php // echo $form->field($model, 'perumahan') ?>

    <?php // echo $form->field($model, 'biayatempattinggal') ?>

    <?php // echo $form->field($model, 'bahanbakarpeneranganair') ?>

    <?php // echo $form->field($model, 'perlengkapanrumahtangga') ?>

    <?php // echo $form->field($model, 'penyelenggaraanrumahtangga') ?>

    <?php // echo $form->field($model, 'sandang') ?>

    <?php // echo $form->field($model, 'sandanglakilaki') ?>

    <?php // echo $form->field($model, 'sandangwanita') ?>

    <?php // echo $form->field($model, 'sandanganakanak') ?>

    <?php // echo $form->field($model, 'barangpribadisandanglainnya') ?>

    <?php // echo $form->field($model, 'kesehatan') ?>

    <?php // echo $form->field($model, 'jasakesehatan') ?>

    <?php // echo $form->field($model, 'obatobatan') ?>

    <?php // echo $form->field($model, 'jasaperawatanjasmani') ?>

    <?php // echo $form->field($model, 'perawatanjasmanidankosmetik') ?>

    <?php // echo $form->field($model, 'pendidikanrekreasidanolahraga') ?>

    <?php // echo $form->field($model, 'jasapendidikan') ?>

    <?php // echo $form->field($model, 'kursuskursuspelatihan') ?>

    <?php // echo $form->field($model, 'perlengkapanperalatanpendidikan') ?>

    <?php // echo $form->field($model, 'rekreasi') ?>

    <?php // echo $form->field($model, 'olahraga') ?>

    <?php // echo $form->field($model, 'transpordankomunikasi') ?>

    <?php // echo $form->field($model, 'transport') ?>

    <?php // echo $form->field($model, 'komunikasidanpengiriman') ?>

    <?php // echo $form->field($model, 'saranadanpenunjangtranspor') ?>

    <?php // echo $form->field($model, 'jasakeuangan') ?>

    <?php // echo $form->field($model, 'fenomena') ?>

    <?php // echo $form->field($model, 'id_wil') ?>

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
