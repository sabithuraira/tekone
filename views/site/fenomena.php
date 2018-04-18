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
$listDataKab=ArrayHelper::map($kab,'id','nama');
$listData=ArrayHelper::map($tahun,'id','tahun');
$form = ActiveForm::begin();
?>
<div class="box box-default">
<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	TABEL Fenomena PDRB Sektoral</h3>
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
								['options' => [$kabid => ['Selected'=>'selected']]],
								['prompt'=>'Pilih Kab / Kota ...'])->label(false) ?></div>
								
  <div class="col-xs-3 col-md-3"><?= Html::submitButton('Tampil', ['class'=> 'btn btn-warning btn-block','style'=>'font-size:14px;padding:7px;']) ?></div>
  <?php ActiveForm::end(); ?>
</div>

	<div class="box box-solid box-info">
	<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	Fenomena PDRB Tahun <?php echo $th.' TRIWULAN '.$triwulan." di ".\app\models\Kab::findOne($kabid)->nama?> </h3>
	</div>
	
	<div class="box-body">	
	<table class="table table-hover table-bordered">
	
<tbody>
  <tr style="text-align:center" >
  <th >Komponen</td> <th >Pertumbuhan</td>
  <th >Fenomena</td>
</tr>

  <tr>
  <td rowspan="3">A. Pertanian, Kehutanan, dan Perikanan
</td>
  <td>
  Q to Q
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->a_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->a_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->a_laju_implisit;
?></td>
</tr>


  <tr>
  <td rowspan="3">B. Pertambangan dan Penggalian 
</td>  <td>
  Q to Q
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->b_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->b_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->b_laju_implisit;
?></td>
</tr>


  <tr>
  <td rowspan="3">C. Industri Pengolahan
</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->c_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->c_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->c_laju_implisit;
?></td>
</tr>

  <tr>
  <td rowspan="3">D. Pengadaan Listrik dan Gas
</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->d_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->d_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->d_laju_implisit;
?></td>
</tr>

  <tr>
  <td rowspan="3">E. Pengadaan Air, Pengelolaan Sampah, Limbah dan Daur Ulang
</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->e_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->e_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->e_laju_implisit;
?></td>
</tr>

  <tr>
  <td rowspan="3">F. Konstruksi
</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->f_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->f_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->f_laju_implisit;
?></td>
</tr>

  <tr>
  <td rowspan="3">G. Perdagangan Besar dan Eceran; Reparasi Mobil dan Sepeda Motor</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->g_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->g_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->g_laju_implisit;
?></td>
</tr>

  <tr>
  <td rowspan="3">H. Transportasi dan Pergudangan 
</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->h_qtoq;
?></td>
</tr>
  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->h_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->h_laju_implisit;
?></td>
</tr>

  <tr>
  <td rowspan="3">I. Penyediaan Akomodasi dan Makan Minum
</td>  <td>
  Q to Q
</td>
  <td >
  <?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->i_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->i_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->i_laju_implisit;
?></td>
</tr>

  <tr>
  <td rowspan="3">J. Informasi dan Komunikasi
</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->j_qtoq;
?></td>
</tr>  

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->j_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->j_laju_implisit;
?></td>
</tr>

<tr>
  <td rowspan="3">K. Jasa Keuangan dan Asuransi
</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->k_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->k_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->k_laju_implisit;
?></td>
</tr>

<tr>
  <td rowspan="3">L. Real Estate
</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->l_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->l_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->l_laju_implisit;
?></td>
</tr>

<tr>
  <td rowspan="3">M,N. Jasa Perusahaan
</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->m_qtoq;
?></td rowspan="3">
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->m_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->m_laju_implisit;
?></td>
</tr>

<tr>
  <td rowspan="3">O. Administrasi Pemerintahan, Pertahanan dan Jaminan Sosial Wajib
</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->o_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->o_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->o_laju_implisit;
?></td>
</tr>

<tr>
  <td rowspan="3">P. Jasa Pendidikan
</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->p_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->p_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->p_laju_implisit;
?></td>
</tr>

<tr>
  <td rowspan="3">Q. Jasa Kesehatan dan Kegiatan Sosial

</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->q_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->q_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->q_laju_implisit;
?></td>
</tr>

<tr>
  <td rowspan="3">R,S,T,U. Jasa lainnya

</td>  <td>
  Q to Q
</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo $model1->r_qtoq;
?></td>
</tr>

  <tr>
  <td>
   Y on Y
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->r_ytoy;
?></td>
</tr>

  <tr>
  <td>
  Laju Implisit
</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo $model1->r_laju_implisit;
?></td>
</tr>

</tbody>

</table>
	</div>
	</div>
	




</div>
</div>
</div>
