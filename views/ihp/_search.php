<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ihpsearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ihp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'bahanmakanan') ?>

    <?= $form->field($model, 'padipalawija') ?>

    <?= $form->field($model, 'padi') ?>

    <?= $form->field($model, 'palawija') ?>

    <?php // echo $form->field($model, 'jagungpocelan') ?>

    <?php // echo $form->field($model, 'ketelapohon') ?>

    <?php // echo $form->field($model, 'ketelarambat') ?>

    <?php // echo $form->field($model, 'kacangtanah') ?>

    <?php // echo $form->field($model, 'kacangkedelai') ?>

    <?php // echo $form->field($model, 'kacanghijau') ?>

    <?php // echo $form->field($model, 'bawangdaun') ?>

    <?php // echo $form->field($model, 'bawangmerah') ?>

    <?php // echo $form->field($model, 'bayam') ?>

    <?php // echo $form->field($model, 'buncismuda') ?>

    <?php // echo $form->field($model, 'cabemerah') ?>

    <?php // echo $form->field($model, 'caberawit') ?>

    <?php // echo $form->field($model, 'kacangpanjang') ?>

    <?php // echo $form->field($model, 'kangkung') ?>

    <?php // echo $form->field($model, 'ketimun') ?>

    <?php // echo $form->field($model, 'kolkubis') ?>

    <?php // echo $form->field($model, 'melinjo') ?>

    <?php // echo $form->field($model, 'sawihijau') ?>

    <?php // echo $form->field($model, 'terongpnjng') ?>

    <?php // echo $form->field($model, 'tomat') ?>

    <?php // echo $form->field($model, 'wortel') ?>

    <?php // echo $form->field($model, 'kentang') ?>

    <?php // echo $form->field($model, 'petai') ?>

    <?php // echo $form->field($model, 'kacangmerah') ?>

    <?php // echo $form->field($model, 'alpukat') ?>

    <?php // echo $form->field($model, 'durian') ?>

    <?php // echo $form->field($model, 'jambubiji') ?>

    <?php // echo $form->field($model, 'jeruk') ?>

    <?php // echo $form->field($model, 'mangga') ?>

    <?php // echo $form->field($model, 'nanas') ?>

    <?php // echo $form->field($model, 'pepaya') ?>

    <?php // echo $form->field($model, 'pisangambon') ?>

    <?php // echo $form->field($model, 'rambutan') ?>

    <?php // echo $form->field($model, 'salak') ?>

    <?php // echo $form->field($model, 'sawo') ?>

    <?php // echo $form->field($model, 'semangka') ?>

    <?php // echo $form->field($model, 'duku') ?>

    <?php // echo $form->field($model, 'nangka') ?>

    <?php // echo $form->field($model, 'karetgetahtebal') ?>

    <?php // echo $form->field($model, 'kelapasawit') ?>

    <?php // echo $form->field($model, 'kopirobusta') ?>

    <?php // echo $form->field($model, 'kelapablmdikupas') ?>

    <?php // echo $form->field($model, 'tebu') ?>

    <?php // echo $form->field($model, 'kakao') ?>

    <?php // echo $form->field($model, 'jambumete') ?>

    <?php // echo $form->field($model, 'cengkeh') ?>

    <?php // echo $form->field($model, 'tembakau') ?>

    <?php // echo $form->field($model, 'lada') ?>

    <?php // echo $form->field($model, 'ternak') ?>

    <?php // echo $form->field($model, 'sapi') ?>

    <?php // echo $form->field($model, 'kerbau') ?>

    <?php // echo $form->field($model, 'kambing') ?>

    <?php // echo $form->field($model, 'babi') ?>

    <?php // echo $form->field($model, 'sususapisegar') ?>

    <?php // echo $form->field($model, 'unggashasilnya') ?>

    <?php // echo $form->field($model, 'ayam') ?>

    <?php // echo $form->field($model, 'itik') ?>

    <?php // echo $form->field($model, 'telur') ?>

    <?php // echo $form->field($model, 'perikananbudidaya') ?>

    <?php // echo $form->field($model, 'bandeng') ?>

    <?php // echo $form->field($model, 'gurame') ?>

    <?php // echo $form->field($model, 'lele') ?>

    <?php // echo $form->field($model, 'mas') ?>

    <?php // echo $form->field($model, 'mujair') ?>

    <?php // echo $form->field($model, 'nila') ?>

    <?php // echo $form->field($model, 'patin') ?>

    <?php // echo $form->field($model, 'udangbudidaya') ?>

    <?php // echo $form->field($model, 'rumputlaut') ?>

    <?php // echo $form->field($model, 'perikanantngkap') ?>

    <?php // echo $form->field($model, 'bawal') ?>

    <?php // echo $form->field($model, 'cakalang') ?>

    <?php // echo $form->field($model, 'kakap') ?>

    <?php // echo $form->field($model, 'kembung') ?>

    <?php // echo $form->field($model, 'kerapu') ?>

    <?php // echo $form->field($model, 'layang') ?>

    <?php // echo $form->field($model, 'selar') ?>

    <?php // echo $form->field($model, 'tembang') ?>

    <?php // echo $form->field($model, 'tenggiri') ?>

    <?php // echo $form->field($model, 'teri') ?>

    <?php // echo $form->field($model, 'tongkol') ?>

    <?php // echo $form->field($model, 'udangtangkap') ?>

    <?php // echo $form->field($model, 'kepiting') ?>

    <?php // echo $form->field($model, 'cumicumi') ?>

    <?php // echo $form->field($model, 'kayu') ?>

    <?php // echo $form->field($model, 'kayujati') ?>

    <?php // echo $form->field($model, 'kayurimbalainnya') ?>

    <?php // echo $form->field($model, 'hasilhutan') ?>

    <?php // echo $form->field($model, 'rotan') ?>

    <?php // echo $form->field($model, 'bambu') ?>

    <?php // echo $form->field($model, 'batubara') ?>

    <?php // echo $form->field($model, 'minyakbumi') ?>

    <?php // echo $form->field($model, 'gasbumidanpanasbumi') ?>

    <?php // echo $form->field($model, 'bijihtembaga') ?>

    <?php // echo $form->field($model, 'bijihemas') ?>

    <?php // echo $form->field($model, 'batu') ?>

    <?php // echo $form->field($model, 'pasir') ?>

    <?php // echo $form->field($model, 'kerikil') ?>

    <?php // echo $form->field($model, 'kapur') ?>

    <?php // echo $form->field($model, 'dagingsapi') ?>

    <?php // echo $form->field($model, 'dagingayam') ?>

    <?php // echo $form->field($model, 'dagingbabi') ?>

    <?php // echo $form->field($model, 'dagingkambingdomba') ?>

    <?php // echo $form->field($model, 'dagingolahanawetan') ?>

    <?php // echo $form->field($model, 'ikanbekuawetan') ?>

    <?php // echo $form->field($model, 'udangbekuawetan') ?>

    <?php // echo $form->field($model, 'minyakkelapa') ?>

    <?php // echo $form->field($model, 'minyakgoreng') ?>

    <?php // echo $form->field($model, 'minyakkelapasawit') ?>

    <?php // echo $form->field($model, 'sususegar') ?>

    <?php // echo $form->field($model, 'susukentalmanis') ?>

    <?php // echo $form->field($model, 'susububuk') ?>

    <?php // echo $form->field($model, 'susucairkemasan') ?>

    <?php // echo $form->field($model, 'eskrim') ?>

    <?php // echo $form->field($model, 'makanandarisusu') ?>

    <?php // echo $form->field($model, 'beras') ?>

    <?php // echo $form->field($model, 'tepungterigu') ?>

    <?php // echo $form->field($model, 'tepungtapioka') ?>

    <?php // echo $form->field($model, 'tepungberas') ?>

    <?php // echo $form->field($model, 'tepunglainnya') ?>

    <?php // echo $form->field($model, 'pakanikan') ?>

    <?php // echo $form->field($model, 'pakanlain') ?>

    <?php // echo $form->field($model, 'roti') ?>

    <?php // echo $form->field($model, 'biskuit') ?>

    <?php // echo $form->field($model, 'mie') ?>

    <?php // echo $form->field($model, 'gulapasir') ?>

    <?php // echo $form->field($model, 'gulamerah') ?>

    <?php // echo $form->field($model, 'sirop') ?>

    <?php // echo $form->field($model, 'kembanggula') ?>

    <?php // echo $form->field($model, 'coklatbubuk') ?>

    <?php // echo $form->field($model, 'kopibubuk') ?>

    <?php // echo $form->field($model, 'teh') ?>

    <?php // echo $form->field($model, 'kecap') ?>

    <?php // echo $form->field($model, 'tahutempe') ?>

    <?php // echo $form->field($model, 'garammeja') ?>

    <?php // echo $form->field($model, 'kerupukkeripik') ?>

    <?php // echo $form->field($model, 'airminumkemasan') ?>

    <?php // echo $form->field($model, 'minumanringan') ?>

    <?php // echo $form->field($model, 'tehkemasan') ?>

    <?php // echo $form->field($model, 'rokokkretek') ?>

    <?php // echo $form->field($model, 'rokokfilter') ?>

    <?php // echo $form->field($model, 'benangpintal') ?>

    <?php // echo $form->field($model, 'benangrayon') ?>

    <?php // echo $form->field($model, 'benangpolyester') ?>

    <?php // echo $form->field($model, 'kaintenun') ?>

    <?php // echo $form->field($model, 'kaincetak') ?>

    <?php // echo $form->field($model, 'lainnya') ?>

    <?php // echo $form->field($model, 'pakaianbatik') ?>

    <?php // echo $form->field($model, 'pakaiandarikaos') ?>

    <?php // echo $form->field($model, 'pakaianpria') ?>

    <?php // echo $form->field($model, 'pakaianwanita') ?>

    <?php // echo $form->field($model, 'pakaiananakanak') ?>

    <?php // echo $form->field($model, 'perlengkapanpakaian') ?>

    <?php // echo $form->field($model, 'sepatudewasa') ?>

    <?php // echo $form->field($model, 'sandaldewasa') ?>

    <?php // echo $form->field($model, 'sepatusandalanakanak') ?>

    <?php // echo $form->field($model, 'sepatuolahraga') ?>

    <?php // echo $form->field($model, 'kayujatigergajian') ?>

    <?php // echo $form->field($model, 'kayulainnya') ?>

    <?php // echo $form->field($model, 'bahanbangunankayu') ?>

    <?php // echo $form->field($model, 'kertaskoran') ?>

    <?php // echo $form->field($model, 'kertastulis') ?>

    <?php // echo $form->field($model, 'tissue') ?>

    <?php // echo $form->field($model, 'kertaspembungkus') ?>

    <?php // echo $form->field($model, 'karton') ?>

    <?php // echo $form->field($model, 'kartonkemasan') ?>

    <?php // echo $form->field($model, 'pupukurea') ?>

    <?php // echo $form->field($model, 'pupuklainnya') ?>

    <?php // echo $form->field($model, 'pestisidainsektisida') ?>

    <?php // echo $form->field($model, 'bijiplastik') ?>

    <?php // echo $form->field($model, 'bahankimia') ?>

    <?php // echo $form->field($model, 'cattembok') ?>

    <?php // echo $form->field($model, 'catkayubesi') ?>

    <?php // echo $form->field($model, 'vernislak') ?>

    <?php // echo $form->field($model, 'deterjen') ?>

    <?php // echo $form->field($model, 'sabunmandi') ?>

    <?php // echo $form->field($model, 'pemutihpewangi') ?>

    <?php // echo $form->field($model, 'kosmetik') ?>

    <?php // echo $form->field($model, 'bahankimialain') ?>

    <?php // echo $form->field($model, 'premium') ?>

    <?php // echo $form->field($model, 'avtur') ?>

    <?php // echo $form->field($model, 'solar') ?>

    <?php // echo $form->field($model, 'aspal') ?>

    <?php // echo $form->field($model, 'minyakpelumas') ?>

    <?php // echo $form->field($model, 'rss') ?>

    <?php // echo $form->field($model, 'sir') ?>

    <?php // echo $form->field($model, 'banmobil') ?>

    <?php // echo $form->field($model, 'bansepedamotor') ?>

    <?php // echo $form->field($model, 'vulkanisirban') ?>

    <?php // echo $form->field($model, 'pvc') ?>

    <?php // echo $form->field($model, 'plastik') ?>

    <?php // echo $form->field($model, 'barangkaretdanplastiklain') ?>

    <?php // echo $form->field($model, 'kacalembaran') ?>

    <?php // echo $form->field($model, 'keramik') ?>

    <?php // echo $form->field($model, 'barangpecahbelah') ?>

    <?php // echo $form->field($model, 'batubata') ?>

    <?php // echo $form->field($model, 'genteng') ?>

    <?php // echo $form->field($model, 'semen') ?>

    <?php // echo $form->field($model, 'conblock') ?>

    <?php // echo $form->field($model, 'barangbukanlogamlainnya') ?>

    <?php // echo $form->field($model, 'bajalembaran') ?>

    <?php // echo $form->field($model, 'besibeton') ?>

    <?php // echo $form->field($model, 'besisiku') ?>

    <?php // echo $form->field($model, 'besiplat') ?>

    <?php // echo $form->field($model, 'pipabesi') ?>

    <?php // echo $form->field($model, 'alumunium') ?>

    <?php // echo $form->field($model, 'seng') ?>

    <?php // echo $form->field($model, 'murpakubaut') ?>

    <?php // echo $form->field($model, 'kawat') ?>

    <?php // echo $form->field($model, 'lainnyadarilogam') ?>

    <?php // echo $form->field($model, 'mesinpembangkit') ?>

    <?php // echo $form->field($model, 'mesinindustri') ?>

    <?php // echo $form->field($model, 'mesinpertanian') ?>

    <?php // echo $form->field($model, 'alatberat') ?>

    <?php // echo $form->field($model, 'kabellistrik') ?>

    <?php // echo $form->field($model, 'prlngkapanlistrik') ?>

    <?php // echo $form->field($model, 'komputer') ?>

    <?php // echo $form->field($model, 'televisi') ?>

    <?php // echo $form->field($model, 'elektroniklainnya') ?>

    <?php // echo $form->field($model, 'teleponhp') ?>

    <?php // echo $form->field($model, 'mobil') ?>

    <?php // echo $form->field($model, 'kapaldanperbaikan') ?>

    <?php // echo $form->field($model, 'sparepart1') ?>

    <?php // echo $form->field($model, 'sepedamotor') ?>

    <?php // echo $form->field($model, 'sparepart2') ?>

    <?php // echo $form->field($model, 'lainnyaanguktan') ?>

    <?php // echo $form->field($model, 'furniturekayu') ?>

    <?php // echo $form->field($model, 'furniturerotan') ?>

    <?php // echo $form->field($model, 'furniturelogam') ?>

    <?php // echo $form->field($model, 'barangindustrilainnya') ?>

    <?php // echo $form->field($model, 'fenomena') ?>

    <?php // echo $form->field($model, 'id_satuan') ?>

    <?php // echo $form->field($model, 'id_tahun') ?>

    <?php // echo $form->field($model, 'id_tw') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
