<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ihk */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ihk-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bahanmakanan')->textInput() ?>

    <?= $form->field($model, 'padipadianumbiumbianhasilnya')->textInput() ?>

    <?= $form->field($model, 'daginghasil')->textInput() ?>

    <?= $form->field($model, 'ikansegar')->textInput() ?>

    <?= $form->field($model, 'ikandiawetkan')->textInput() ?>

    <?= $form->field($model, 'telursusuhasilnya')->textInput() ?>

    <?= $form->field($model, 'sayursayuran')->textInput() ?>

    <?= $form->field($model, 'kacangkacangan')->textInput() ?>

    <?= $form->field($model, 'buahbuahan')->textInput() ?>

    <?= $form->field($model, 'bumbubumbuan')->textInput() ?>

    <?= $form->field($model, 'lemakdanminyak')->textInput() ?>

    <?= $form->field($model, 'bahanmakananlainnya')->textInput() ?>

    <?= $form->field($model, 'makananjadirokoktembakau')->textInput() ?>

    <?= $form->field($model, 'makananjadi')->textInput() ?>

    <?= $form->field($model, 'minumanyangtdkberalkohol')->textInput() ?>

    <?= $form->field($model, 'tembakaudanminumanberalkohol')->textInput() ?>

    <?= $form->field($model, 'perumahan')->textInput() ?>

    <?= $form->field($model, 'biayatempattinggal')->textInput() ?>

    <?= $form->field($model, 'bahanbakarpeneranganair')->textInput() ?>

    <?= $form->field($model, 'perlengkapanrumahtangga')->textInput() ?>

    <?= $form->field($model, 'penyelenggaraanrumahtangga')->textInput() ?>

    <?= $form->field($model, 'sandang')->textInput() ?>

    <?= $form->field($model, 'sandanglakilaki')->textInput() ?>

    <?= $form->field($model, 'sandangwanita')->textInput() ?>

    <?= $form->field($model, 'sandanganakanak')->textInput() ?>

    <?= $form->field($model, 'barangpribadisandanglainnya')->textInput() ?>

    <?= $form->field($model, 'kesehatan')->textInput() ?>

    <?= $form->field($model, 'jasakesehatan')->textInput() ?>

    <?= $form->field($model, 'obatobatan')->textInput() ?>

    <?= $form->field($model, 'jasaperawatanjasmani')->textInput() ?>

    <?= $form->field($model, 'perawatanjasmanidankosmetik')->textInput() ?>

    <?= $form->field($model, 'pendidikanrekreasidanolahraga')->textInput() ?>

    <?= $form->field($model, 'jasapendidikan')->textInput() ?>

    <?= $form->field($model, 'kursuskursuspelatihan')->textInput() ?>

    <?= $form->field($model, 'perlengkapanperalatanpendidikan')->textInput() ?>

    <?= $form->field($model, 'rekreasi')->textInput() ?>

    <?= $form->field($model, 'olahraga')->textInput() ?>

    <?= $form->field($model, 'transpordankomunikasi')->textInput() ?>

    <?= $form->field($model, 'transport')->textInput() ?>

    <?= $form->field($model, 'komunikasidanpengiriman')->textInput() ?>

    <?= $form->field($model, 'saranadanpenunjangtranspor')->textInput() ?>

    <?= $form->field($model, 'jasakeuangan')->textInput() ?>

    <?= $form->field($model, 'fenomena')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'id_wil')->textInput() ?>

    <?= $form->field($model, 'id_satuan')->textInput() ?>

    <?= $form->field($model, 'id_tahun')->textInput() ?>

    <?= $form->field($model, 'id_bulan')->textInput() ?>


    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
