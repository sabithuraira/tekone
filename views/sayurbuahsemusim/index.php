<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

$this->title = 'TABEL HORTIKULTURA SAYURAN';
$this->params['breadcrumbs'][] = $this->title;

$tahun = \app\models\Tahun::find()->all();
$kab = \app\models\Kab::find()->all();
$listData=ArrayHelper::map($tahun,'id','tahun');
$listDataKab=ArrayHelper::map($kab,'id','nama');

$form = ActiveForm::begin();
?>
<div class="box box-default">
    <div class="box-header with-border"><h3 class="box-title">
	    <span class="fa fa-tags"></span>TABEL HORTIKULTURA SAYURAN</h3>

        <div class="pull-right box-tools">

            <?= Html::a('<i class="fa fa-upload"></i> Import Data', ['sayurbuahsemusim/import/'] ,['class'=>'btn btn-info btn-sm', 'style'=> 'vertical-align:middle',]) ?>
        </div>
	</div>
    
    <div class="box-body">	

	    <div class="body-content">
            <div class="row">
                <div class="col-xs-3 col-md-3">
                    <label class=" center pull-right">Tahun - Kab/Kota : </label>
                </div>

                <div class="col-xs-3 col-md-3">
                    <?= $form->field($searchModel, 'id_tahun')->dropDownList(
                            $listData,['options' => [$th => ['Selected'=>'selected']]],
                            ['prompt'=>'Pilih Tahun...'])->label(false) 
                    ?>
                </div>

                <div class="col-xs-3 col-md-3">
                    <?= $form->field($searchModel, 'id_wil')->dropDownList($listDataKab, 
                            ['options' => [$triwulan => ['Selected'=>'selected']]],
                            ['prompt'=>'Pilih Kab/Kota...'])->label(false)
                    ?>
                </div>
                
                <div class="col-xs-3 col-md-3"><?= Html::submitButton('Tampil', ['class'=> 'btn btn-warning btn-block','style'=>'font-size:14px;padding:7px;']) ?></div>
                <?php ActiveForm::end(); ?>
            </div>

	        
            <div class="box box-solid box-info">
                <div class="box-header with-border"><h3 class="box-title">
                    <span class="fa fa-tags"></span>
                    TABEL TABEL HORTIKULTURA SAYURAN</h3>
                </div>
	
	            <div class="box-body">	
	                <table class="table table-hover table-bordered">
	
                        <tbody>
                            <tr>
                                <th class="text-center">Nama Sayuran</td>
                                <th class="text-center">Produksi (Kuintal)</td>
                            </tr>

                            <?php 
                                // print_r($dataProvider);die
                                if($dataProvider!=null){
                                    echo '<tr><td>Bawang Merah</td><td>';
                                    if($dataProvider->bawang_merah!=null) echo Yii::$app->formatter->format($dataProvider->bawang_merah, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';


                                    echo '<tr><td>Bawang Putih</td><td>';
                                    if($dataProvider->bawang_putih!=null) echo Yii::$app->formatter->format($dataProvider->bawang_putih, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Kentang</td><td>';
                                    if($dataProvider->kentang_!=null) echo Yii::$app->formatter->format($dataProvider->kentang_, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Kubis</td><td>';
                                    if($dataProvider->kubis!=null) echo Yii::$app->formatter->format($dataProvider->kubis, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Kembang Kol</td><td>';
                                    if($dataProvider->kembang_kol!=null) echo Yii::$app->formatter->format($dataProvider->kembang_kol, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Petai</td><td>';
                                    if($dataProvider->petsaisawi!=null) echo Yii::$app->formatter->format($dataProvider->petsaisawi, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Wortel</td><td>';
                                    if($dataProvider->wortel!=null) echo Yii::$app->formatter->format($dataProvider->wortel, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Lobak</td><td>';
                                    if($dataProvider->lobak!=null) echo Yii::$app->formatter->format($dataProvider->lobak, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Kacang Merah</td><td>';
                                    if($dataProvider->kacang_merah!=null) echo Yii::$app->formatter->format($dataProvider->kacang_merah, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Kacang Panjang</td><td>';
                                    if($dataProvider->kacang_panjang!=null) echo Yii::$app->formatter->format($dataProvider->kacang_panjang, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Cabai Besar</td><td>';
                                    if($dataProvider->cabe_besar!=null) echo Yii::$app->formatter->format($dataProvider->cabe_besar, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Cabai Rawit</td><td>';
                                    if($dataProvider->cabe_rawit!=null) echo Yii::$app->formatter->format($dataProvider->cabe_rawit, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Paprika</td><td>';
                                    if($dataProvider->paprika!=null) echo Yii::$app->formatter->format($dataProvider->paprika, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Jamur</td><td>';
                                    if($dataProvider->jamur!=null) echo Yii::$app->formatter->format($dataProvider->jamur, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Tomat</td><td>';
                                    if($dataProvider->tomat!=null) echo Yii::$app->formatter->format($dataProvider->tomat, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Terung</td><td>';
                                    if($dataProvider->terung!=null) echo Yii::$app->formatter->format($dataProvider->terung, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Buncis</td><td>';
                                    if($dataProvider->buncis!=null) echo Yii::$app->formatter->format($dataProvider->buncis, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Ketimun</td><td>';
                                    if($dataProvider->ketimun!=null) echo Yii::$app->formatter->format($dataProvider->ketimun, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Labu Siam</td><td>';
                                    if($dataProvider->labu_siam!=null) echo Yii::$app->formatter->format($dataProvider->labu_siam, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Kangkung</td><td>';
                                    if($dataProvider->kangkung!=null) echo Yii::$app->formatter->format($dataProvider->kangkung, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Bayam</td><td>';
                                    if($dataProvider->bayam!=null) echo Yii::$app->formatter->format($dataProvider->bayam, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Lainnya</td><td>';
                                    if($dataProvider->lainnya!=null) echo Yii::$app->formatter->format($dataProvider->lainnya, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';
                                }
                                else{
                                    echo '<tr><td>Data tidak tersedia</td><td>Data tidak tersedia</td></tr>';
                                }

                            ?>
                        </tbody>
                    </table>
	            </div>
            </div>
        </div>
    </div>
</div>

