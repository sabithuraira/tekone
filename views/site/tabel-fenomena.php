<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use kartik\social\Disqus;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

$this->title = 'TABEL PDRB Sektoral';
$this->params['breadcrumbs'][] = $this->title;
$tahun = \app\models\Tahun::find()->all();
$kab = \app\models\Kab::find()->all();
$listData=ArrayHelper::map($tahun,'id','tahun');
$listDataKab=ArrayHelper::map($kab,'id','nama');
$form = ActiveForm::begin();
?>
<div class="box box-default">
<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	TABEL PDRB Sektoral</h3>
	</div>
<div class="box-body">	

	<div class="body-content">
	<div class="row">
	<div class="col-xs-2 col-md-2">
  <label class=" center pull-right">Tahun - Triwulan : </label>
  </div>
  <div class="col-xs-2 col-md-2"><?= $form->field($input, 'tahun')->dropDownList(
								$listData,['options' => [$th => ['Selected'=>'selected']]],
								['prompt'=>'Pilih Tahun...'])->label(false) ?></div>
  <div class="col-xs-2 col-md-2"><?= $form->field($input, 'tw')->dropDownList(
								['1' => 'Triwulan I', '2' => 'Triwulan II', '3' => 'Triwulan III', '4' => 'Triwulan IV'], 
								['options' => [$triwulan => ['Selected'=>'selected']]],
								['prompt'=>'Pilih Triwulan...'])->label(false)?></div>
<div class="col-xs-3 col-md-3"><?= $form->field($input, 'kab')->dropDownList(
								$listDataKab, 
								['options' => [$triwulan => ['Selected'=>'selected']]],
								['prompt'=>'Pilih Kab/Kota...'])->label(false)?></div>
  <div class="col-xs-3 col-md-3"><?= Html::submitButton('Tampil', ['class'=> 'btn btn-warning btn-block','style'=>'font-size:14px;padding:7px;']) ?></div>
  <?php ActiveForm::end(); ?>
</div>

	<div class="box box-solid box-info">
	<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	TABEL PDRB  PENGELUARAN TD 2010 ADH BERLAKU TAHUN <?php echo $th.' TRIWULAN '.$triwulan?> </h3>
	</div>
	
	<div class="box-body">	
	<table class="table table-hover table-bordered">
	
<tbody>
  <tr style="text-align:center" >
  <th >Komponen</td>
  <th >Nilai</td>
</tr>

  <tr>
  <td>A. Pertanian, Kehutanan, dan Perikanan
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo Yii::$app->formatter->format($model1->a, 'decimal');
?></td>
</tr>

  <tr>
  <td>B. Pertambangan dan Penggalian 
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->b, 'decimal');
?></td>
</tr>

  <tr>
  <td>C. Industri Pengolahan
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->c, 'decimal');
?></td>
</tr>

  <tr>
  <td>D. Pengadaan Listrik dan Gas
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->d, 'decimal');
?></td>
</tr>

  <tr>
  <td>E. Pengadaan Air, Pengelolaan Sampah, Limbah dan Daur Ulang
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->e, 'decimal');
?></td>
</tr>

  <tr>
  <td>F. Konstruksi
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->f, 'decimal');
?></td>
</tr>

  <tr>
  <td>G. Perdagangan Besar dan Eceran; Reparasi Mobil dan Sepeda Motor</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->g, 'decimal');
?></td>
</tr>

  <tr>
  <td>H. Transportasi dan Pergudangan 
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->h, 'decimal');
?></td>
</tr>
  <tr>
  <td>I. Penyediaan Akomodasi dan Makan Minum
</td>
  <td >
  <?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->i, 'decimal');
?></td>
</tr>
  <tr>
  <td>J. Informasi dan Komunikasi
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->j, 'decimal');
?></td>
</tr>  

<tr>
  <td>K. Jasa Keuangan dan Asuransi
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->k, 'decimal');
?></td>
</tr>
<tr>
  <td>L. Real Estate
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->l, 'decimal');
?></td>
</tr>
<tr>
  <td>M,N. Jasa Perusahaan
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->m, 'decimal');
?></td>
</tr>
<tr>
  <td>O. Administrasi Pemerintahan, Pertahanan dan Jaminan Sosial Wajib
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->o, 'decimal');
?></td>
</tr>
<tr>
  <td>P. Jasa Pendidikan
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->p, 'decimal');
?></td>
</tr>
<tr>
  <td>Q. Jasa Kesehatan dan Kegiatan Sosial

</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->q, 'decimal');
?></td>
</tr>
<tr>
  <td>R,S,T,U. Jasa lainnya

</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->r, 'decimal');
?></td>
</tr>
<tr>
  <th>PDRB

</th>
  <th ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->pdrb, 'decimal');
?></th>
</tr>
<tr>
  <th>PDRB Tanpa Migas

</th>
  <th ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->pdrb_tanpa_migas, 'decimal');
?></th>
</tr>
</tbody>

</table>
	</div>
	</div>
	


</div>
</div>

</div>
