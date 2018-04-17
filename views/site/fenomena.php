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
$listData=ArrayHelper::map($tahun,'id','tahun');
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
	<div class="col-xs-3 col-md-3">
  <label class=" center pull-right">Tahun - Triwulan : </label>
  </div>
  <div class="col-xs-3 col-md-3"><?= $form->field($input, 'tahun')->dropDownList(
								$listData,['options' => [$th => ['Selected'=>'selected']]],
								['prompt'=>'Pilih Tahun...'])->label(false) ?></div>
  <div class="col-xs-3 col-md-3"><?= $form->field($input, 'tw')->dropDownList(
								['1' => 'Triwulan I', '2' => 'Triwulan II', '3' => 'Triwulan III', '4' => 'Triwulan IV'], 
								['options' => [$triwulan => ['Selected'=>'selected']]],
								['prompt'=>'Pilih Triwulan...'])->label(false)?></div>
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
  <td>1. Pengeluaran Konsumsi Rumah Tangga (1.a. s/d 1.l.)</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data - ";
	else echo Yii::$app->formatter->format($model1->pengeluaran_konsumsi_rumah_tangga, 'decimal');
?></td>
</tr>

  <tr>
  <td>2. Pengeluaran Konsumsi LNPRT</td>
  <td >	<?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->pengeluaran_konsumsi_lnprt, 'decimal');
?></td>
</tr>

  <tr>
  <td>3. Pengeluaran Konsumsi Pemerintah (3.a. + 3.b.)</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->pengeluaran_konsumsi_pemerintah, 'decimal');
?></td>
</tr>

  <tr>
  <td>4. Pembentukan Modal Tetap Bruto (4.a. + 4.b.)</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->pembentukan_modal_tetap_bruto, 'decimal');
?></td>
</tr>

  <tr>
  <td>5. Perubahan Inventori</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->perubahan_inventori, 'decimal');
?></td>
</tr>

  <tr>
  <td>6. Ekspor Luar Negeri (6.a. + 6.b.)</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->ekspor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>7. Impor Luar Negeri (7.a. + 7.b.)</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->impor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>8. Net Ekspor Antar Daerah (8.a. - 8.b.)</td>
  <td ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->net_ekspor_antar_daerah, 'decimal');
?></td>
</tr>
  <tr>
  <th>P D R B</td>
  <th >
  <?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->pdrb, 'decimal');
?></td>
</tr>
  <tr>
  <th>Total Sektoral</td>
  <th ><?php
	if(empty($model1)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model1->total_sektoral, 'decimal');
?></td>
</tr>
</tbody>
</table>
	</div>
	
	</div>
	


	
	
	<div class="box box-solid box-info">
	<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	TABEL PDRB  PENGELUARAN TD 2010 ADH KONSTAN <?php echo $th.' TRIWULAN '.$triwulan?> </h3>
	</div>
<div class="box-body">	
	<table class="table table-hover table-bordered">
<tbody>
  <tr style="text-align:center" >
  <th >Komponen</td>
  <th >Nilai</td>
</tr>

  <tr>
  <td>1. Pengeluaran Konsumsi Rumah Tangga (1.a. s/d 1.l.)</td>
  <td >	<?php
	if(empty($model2)) echo "- Tidak ada Data - ";
	else echo Yii::$app->formatter->format($model2->pengeluaran_konsumsi_rumah_tangga, 'decimal');
?></td>
</tr>

  <tr>
  <td>2. Pengeluaran Konsumsi LNPRT</td>
  <td >	<?php
	if(empty($model2)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model2->pengeluaran_konsumsi_lnprt, 'decimal');
?></td>
</tr>

  <tr>
  <td>3. Pengeluaran Konsumsi Pemerintah (3.a. + 3.b.)</td>
  <td ><?php
	if(empty($model2)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model2->pengeluaran_konsumsi_pemerintah, 'decimal');
?></td>
</tr>

  <tr>
  <td>4. Pembentukan Modal Tetap Bruto (4.a. + 4.b.)</td>
  <td ><?php
	if(empty($model2)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model2->pembentukan_modal_tetap_bruto, 'decimal');
?></td>
</tr>

  <tr>
  <td>5. Perubahan Inventori</td>
  <td ><?php
	if(empty($model2)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model2->perubahan_inventori, 'decimal');
?></td>
</tr>

  <tr>
  <td>6. Ekspor Luar Negeri (6.a. + 6.b.)</td>
  <td ><?php
	if(empty($model2)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model2->ekspor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>7. Impor Luar Negeri (7.a. + 7.b.)</td>
  <td ><?php
	if(empty($model2)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model2->impor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>8. Net Ekspor Antar Daerah (8.a. - 8.b.)</td>
  <td ><?php
	if(empty($model2)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model2->net_ekspor_antar_daerah, 'decimal');
?></td>
</tr>
  <tr>
  <th>P D R B</td>
  <th >
  <?php
	if(empty($model2)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model2->pdrb, 'decimal');
?></td>
</tr>
  <tr>
  <th>Total Sektoral</td>
  <th ><?php
	if(empty($model2)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model2->total_sektoral, 'decimal');
?></td>
</tr>
</tbody>
</table>
	</div>

	</div>


	<div class="box box-solid box-info">
	<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	TABEL DISTRIBUSI PDRB  PENGELUARAN TD 2010 ADH BERLAKU <?php echo $th.' TRIWULAN '.$triwulan?> </h3>
	</div>
<div class="box-body">	
	<table class="table table-hover table-bordered">
<tbody>
  <tr style="text-align:center" >
  <th >Komponen</td>
  <th >Nilai</td>
</tr>

  <tr>
  <td>1. Pengeluaran Konsumsi Rumah Tangga (1.a. s/d 1.l.)</td>
  <td >	<?php
	if(empty($model3)) echo "- Tidak ada Data - ";
	else echo Yii::$app->formatter->format($model3->pengeluaran_konsumsi_rumah_tangga, 'decimal');
?></td>
</tr>

  <tr>
  <td>2. Pengeluaran Konsumsi LNPRT</td>
  <td >	<?php
	if(empty($model3)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model3->pengeluaran_konsumsi_lnprt, 'decimal');
?></td>
</tr>

  <tr>
  <td>3. Pengeluaran Konsumsi Pemerintah (3.a. + 3.b.)</td>
  <td ><?php
	if(empty($model3)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model3->pengeluaran_konsumsi_pemerintah, 'decimal');
?></td>
</tr>

  <tr>
  <td>4. Pembentukan Modal Tetap Bruto (4.a. + 4.b.)</td>
  <td ><?php
	if(empty($model3)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model3->pembentukan_modal_tetap_bruto, 'decimal');
?></td>
</tr>

  <tr>
  <td>5. Perubahan Inventori</td>
  <td ><?php
	if(empty($model3)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model3->perubahan_inventori, 'decimal');
?></td>
</tr>

  <tr>
  <td>6. Ekspor Luar Negeri (6.a. + 6.b.)</td>
  <td ><?php
	if(empty($model3)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model3->ekspor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>7. Impor Luar Negeri (7.a. + 7.b.)</td>
  <td ><?php
	if(empty($model3)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model3->impor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>8. Net Ekspor Antar Daerah (8.a. - 8.b.)</td>
  <td ><?php
	if(empty($model3)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model3->net_ekspor_antar_daerah, 'decimal');
?></td>
</tr>
  <tr>
  <th>P D R B</td>
  <th >
  <?php
	if(empty($model3)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model3->pdrb, 'decimal');
?></td>
</tr>
  <tr>
  <th>Total Sektoral</td>
  <th ><?php
	if(empty($model3)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model3->total_sektoral, 'decimal');
?></td>
</tr>
</tbody>
</table>
	</div>

	</div>




	<div class="box box-solid box-info">
	<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	TABEL PDRB  PENGELUARAN TD 2010 ADH BERLAKU QUARTER TO QUARTER <?php echo $th.' TRIWULAN '.$triwulan?> </h3>
	</div>
<div class="box-body">	
	<table class="table table-hover table-bordered">
<tbody>
  <tr style="text-align:center" >
  <th >Komponen</td>
  <th >Nilai</td>
</tr>

  <tr>
  <td>1. Pengeluaran Konsumsi Rumah Tangga (1.a. s/d 1.l.)</td>
  <td >	<?php
	if(empty($model4)) echo "- Tidak ada Data - ";
	else echo Yii::$app->formatter->format($model4->pengeluaran_konsumsi_rumah_tangga, 'decimal');
?></td>
</tr>

  <tr>
  <td>2. Pengeluaran Konsumsi LNPRT</td>
  <td >	<?php
	if(empty($model4)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model4->pengeluaran_konsumsi_lnprt, 'decimal');
?></td>
</tr>

  <tr>
  <td>3. Pengeluaran Konsumsi Pemerintah (3.a. + 3.b.)</td>
  <td ><?php
	if(empty($model4)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model4->pengeluaran_konsumsi_pemerintah, 'decimal');
?></td>
</tr>

  <tr>
  <td>4. Pembentukan Modal Tetap Bruto (4.a. + 4.b.)</td>
  <td ><?php
	if(empty($model4)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model4->pembentukan_modal_tetap_bruto, 'decimal');
?></td>
</tr>

  <tr>
  <td>5. Perubahan Inventori</td>
  <td ><?php
	if(empty($model4)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model4->perubahan_inventori, 'decimal');
?></td>
</tr>

  <tr>
  <td>6. Ekspor Luar Negeri (6.a. + 6.b.)</td>
  <td ><?php
	if(empty($model4)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model4->ekspor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>7. Impor Luar Negeri (7.a. + 7.b.)</td>
  <td ><?php
	if(empty($model4)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model4->impor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>8. Net Ekspor Antar Daerah (8.a. - 8.b.)</td>
  <td ><?php
	if(empty($model4)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model4->net_ekspor_antar_daerah, 'decimal');
?></td>
</tr>
  <tr>
  <th>P D R B</td>
  <th >
  <?php
	if(empty($model4)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model4->pdrb, 'decimal');
?></td>
</tr>
  <tr>
  <th>Total Sektoral</td>
  <th ><?php
	if(empty($model4)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model4->total_sektoral, 'decimal');
?></td>
</tr>
</tbody>
</table>
	</div>
	</div>




	<div class="box box-solid box-info">
	<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	TABEL PERTUMBUHAN PDRB  PENGELUARAN TD 2010 ADH KONSTAN YEAR ON YEAR <?php echo $th.' TRIWULAN '.$triwulan?> </h3>
	</div>
<div class="box-body">	
	<table class="table table-hover table-bordered">
<tbody>
  <tr style="text-align:center" >
  <th >Komponen</td>
  <th >Nilai</td>
</tr>

  <tr>
  <td>1. Pengeluaran Konsumsi Rumah Tangga (1.a. s/d 1.l.)</td>
  <td >	<?php
	if(empty($model5)) echo "- Tidak ada Data - ";
	else echo Yii::$app->formatter->format($model5->pengeluaran_konsumsi_rumah_tangga, 'decimal');
?></td>
</tr>

  <tr>
  <td>2. Pengeluaran Konsumsi LNPRT</td>
  <td >	<?php
	if(empty($model5)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model5->pengeluaran_konsumsi_lnprt, 'decimal');
?></td>
</tr>

  <tr>
  <td>3. Pengeluaran Konsumsi Pemerintah (3.a. + 3.b.)</td>
  <td ><?php
	if(empty($model5)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model5->pengeluaran_konsumsi_pemerintah, 'decimal');
?></td>
</tr>

  <tr>
  <td>4. Pembentukan Modal Tetap Bruto (4.a. + 4.b.)</td>
  <td ><?php
	if(empty($model5)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model5->pembentukan_modal_tetap_bruto, 'decimal');
?></td>
</tr>

  <tr>
  <td>5. Perubahan Inventori</td>
  <td ><?php
	if(empty($model5)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model5->perubahan_inventori, 'decimal');
?></td>
</tr>

  <tr>
  <td>6. Ekspor Luar Negeri (6.a. + 6.b.)</td>
  <td ><?php
	if(empty($model5)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model5->ekspor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>7. Impor Luar Negeri (7.a. + 7.b.)</td>
  <td ><?php
	if(empty($model5)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model5->impor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>8. Net Ekspor Antar Daerah (8.a. - 8.b.)</td>
  <td ><?php
	if(empty($model5)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model5->net_ekspor_antar_daerah, 'decimal');
?></td>
</tr>
  <tr>
  <th>P D R B</td>
  <th >
  <?php
	if(empty($model5)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model5->pdrb, 'decimal');
?></td>
</tr>
  <tr>
  <th>Total Sektoral</td>
  <th ><?php
	if(empty($model5)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model5->total_sektoral, 'decimal');
?></td>
</tr>
</tbody>
</table>
	</div>
	</div>




	<div class="box box-solid box-info">
	<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	TABEL PERTUMBUHAN PDRB  PENGELUARAN TD 2010 ADH KONSTAN Comulatif to Comulatif <?php echo $th.' TRIWULAN '.$triwulan?> </h3>
	</div>
<div class="box-body">	
	<table class="table table-hover table-bordered">
<tbody>
  <tr style="text-align:center" >
  <th >Komponen</td>
  <th >Nilai</td>
</tr>

  <tr>
  <td>1. Pengeluaran Konsumsi Rumah Tangga (1.a. s/d 1.l.)</td>
  <td >	<?php
	if(empty($model6)) echo "- Tidak ada Data - ";
	else echo Yii::$app->formatter->format($model6->pengeluaran_konsumsi_rumah_tangga, 'decimal');
?></td>
</tr>

  <tr>
  <td>2. Pengeluaran Konsumsi LNPRT</td>
  <td >	<?php
	if(empty($model6)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model6->pengeluaran_konsumsi_lnprt, 'decimal');
?></td>
</tr>

  <tr>
  <td>3. Pengeluaran Konsumsi Pemerintah (3.a. + 3.b.)</td>
  <td ><?php
	if(empty($model6)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model6->pengeluaran_konsumsi_pemerintah, 'decimal');
?></td>
</tr>

  <tr>
  <td>4. Pembentukan Modal Tetap Bruto (4.a. + 4.b.)</td>
  <td ><?php
	if(empty($model6)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model6->pembentukan_modal_tetap_bruto, 'decimal');
?></td>
</tr>

  <tr>
  <td>5. Perubahan Inventori</td>
  <td ><?php
	if(empty($model6)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model6->perubahan_inventori, 'decimal');
?></td>
</tr>

  <tr>
  <td>6. Ekspor Luar Negeri (6.a. + 6.b.)</td>
  <td ><?php
	if(empty($model6)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model6->ekspor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>7. Impor Luar Negeri (7.a. + 7.b.)</td>
  <td ><?php
	if(empty($model6)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model6->impor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>8. Net Ekspor Antar Daerah (8.a. - 8.b.)</td>
  <td ><?php
	if(empty($model6)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model6->net_ekspor_antar_daerah, 'decimal');
?></td>
</tr>
  <tr>
  <th>P D R B</td>
  <th >
  <?php
	if(empty($model6)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model6->pdrb, 'decimal');
?></td>
</tr>
  <tr>
  <th>Total Sektoral</td>
  <th ><?php
	if(empty($model6)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model6->total_sektoral, 'decimal');
?></td>
</tr>
</tbody>
</table>
	</div>
</div>




	<div class="box box-solid box-info">
	<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	TABEL INDEKS IMPLISIT <?php echo $th.' TRIWULAN '.$triwulan?> </h3>
	</div>
<div class="box-body">	
	<table class="table table-hover table-bordered">
<tbody>
  <tr style="text-align:center" >
  <th >Komponen</td>
  <th >Nilai</td>
</tr>

  <tr>
  <td>1. Pengeluaran Konsumsi Rumah Tangga (1.a. s/d 1.l.)</td>
  <td >	<?php
	if(empty($model7)) echo "- Tidak ada Data - ";
	else echo Yii::$app->formatter->format($model7->pengeluaran_konsumsi_rumah_tangga, 'decimal');
?></td>
</tr>

  <tr>
  <td>2. Pengeluaran Konsumsi LNPRT</td>
  <td >	<?php
	if(empty($model7)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model7->pengeluaran_konsumsi_lnprt, 'decimal');
?></td>
</tr>

  <tr>
  <td>3. Pengeluaran Konsumsi Pemerintah (3.a. + 3.b.)</td>
  <td ><?php
	if(empty($model7)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model7->pengeluaran_konsumsi_pemerintah, 'decimal');
?></td>
</tr>

  <tr>
  <td>4. Pembentukan Modal Tetap Bruto (4.a. + 4.b.)</td>
  <td ><?php
	if(empty($model7)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model7->pembentukan_modal_tetap_bruto, 'decimal');
?></td>
</tr>

  <tr>
  <td>5. Perubahan Inventori</td>
  <td ><?php
	if(empty($model7)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model7->perubahan_inventori, 'decimal');
?></td>
</tr>

  <tr>
  <td>6. Ekspor Luar Negeri (6.a. + 6.b.)</td>
  <td ><?php
	if(empty($model7)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model7->ekspor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>7. Impor Luar Negeri (7.a. + 7.b.)</td>
  <td ><?php
	if(empty($model7)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model7->impor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>8. Net Ekspor Antar Daerah (8.a. - 8.b.)</td>
  <td ><?php
	if(empty($model7)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model7->net_ekspor_antar_daerah, 'decimal');
?></td>
</tr>
  <tr>
  <th>P D R B</td>
  <th >
  <?php
	if(empty($model7)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model7->pdrb, 'decimal');
?></td>
</tr>
  <tr>
  <th>Total Sektoral</td>
  <th ><?php
	if(empty($model7)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model7->total_sektoral, 'decimal');
?></td>
</tr>
</tbody>
</table>
	</div>
	</div>




	<div class="box box-solid box-info">
	<div class="box-header with-border"><h3 class="box-title">
	<span class="fa fa-tags"></span>
	TABEL LAJU PERTUMBUHAN INDEKS IMPLISIT <?php echo $th.' TRIWULAN '.$triwulan?> </h3>
	</div>
<div class="box-body">	
	<table class="table table-hover table-bordered">
<tbody>
  <tr style="text-align:center" >
  <th >Komponen</td>
  <th >Nilai</td>
</tr>

  <tr>
  <td>1. Pengeluaran Konsumsi Rumah Tangga (1.a. s/d 1.l.)</td>
  <td >	<?php
	if(empty($model8)) echo "- Tidak ada Data - ";
	else echo Yii::$app->formatter->format($model8->pengeluaran_konsumsi_rumah_tangga, 'decimal');
?></td>
</tr>

  <tr>
  <td>2. Pengeluaran Konsumsi LNPRT</td>
  <td >	<?php
	if(empty($model8)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model8->pengeluaran_konsumsi_lnprt, 'decimal');
?></td>
</tr>

  <tr>
  <td>3. Pengeluaran Konsumsi Pemerintah (3.a. + 3.b.)</td>
  <td ><?php
	if(empty($model8)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model8->pengeluaran_konsumsi_pemerintah, 'decimal');
?></td>
</tr>

  <tr>
  <td>4. Pembentukan Modal Tetap Bruto (4.a. + 4.b.)</td>
  <td ><?php
	if(empty($model8)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model8->pembentukan_modal_tetap_bruto, 'decimal');
?></td>
</tr>

  <tr>
  <td>5. Perubahan Inventori</td>
  <td ><?php
	if(empty($model8)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model8->perubahan_inventori, 'decimal');
?></td>
</tr>

  <tr>
  <td>6. Ekspor Luar Negeri (6.a. + 6.b.)</td>
  <td ><?php
	if(empty($model8)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model8->ekspor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>7. Impor Luar Negeri (7.a. + 7.b.)</td>
  <td ><?php
	if(empty($model8)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model8->impor_luar_negeri, 'decimal');
?></td>
</tr>

  <tr>
  <td>8. Net Ekspor Antar Daerah (8.a. - 8.b.)</td>
  <td ><?php
	if(empty($model8)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model8->net_ekspor_antar_daerah, 'decimal');
?></td>
</tr>
  <tr>
  <th>P D R B</td>
  <th >
  <?php
	if(empty($model8)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model8->pdrb, 'decimal');
?></td>
</tr>
  <tr>
  <th>Total Sektoral</td>
  <th ><?php
	if(empty($model8)) echo "- Tidak ada Data -";
	else echo Yii::$app->formatter->format($model8->total_sektoral, 'decimal');
?></td>
</tr>
</tbody>
</table>
	</div>
	</div>



</div>
</div>
</div>
