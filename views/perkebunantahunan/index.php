<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

$this->title = 'TABEL PERKEBUNAN';
$this->params['breadcrumbs'][] = $this->title;

$tahun = \app\models\Tahun::find()->all();
$kab = \app\models\Kab::find()->all();
$listData=ArrayHelper::map($tahun,'id','tahun');
$listDataKab=ArrayHelper::map($kab,'id','nama');

$form = ActiveForm::begin();
?>
<div class="box box-default">
    <div class="box-header with-border"><h3 class="box-title">
	    <span class="fa fa-tags"></span>TABEL PERKEBUNAN</h3>

        <div class="pull-right box-tools">

            <?= Html::a('<i class="fa fa-upload"></i> Import Data', ['perkebunantahunan/import/'] ,['class'=>'btn btn-info btn-sm', 'style'=> 'vertical-align:middle',]) ?>
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
                    TABEL TABEL PERKEBUNAN</h3>
                </div>
	
	            <div class="box-body">	
	                <table class="table table-hover table-bordered">
	
                        <tbody>
                            <tr>
                                <th class="text-center">Nama Tanaman</td>
                                <th class="text-center">Produksi (Ton)</td>
                            </tr>

                            <?php 
                                // print_r($dataProvider);die
                                if($dataProvider!=null){

                                    echo '<tr><td>Karet</td><td>';
                                    if($dataProvider->karet!=null) echo Yii::$app->formatter->format($dataProvider->karet, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Kelapa Dalam</td><td>';
                                    if($dataProvider->kelapa_dalam!=null) echo Yii::$app->formatter->format($dataProvider->kelapa_dalam, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Kelapa Sawit</td><td>';
                                    if($dataProvider->kelapa_sawit!=null) echo Yii::$app->formatter->format($dataProvider->kelapa_sawit, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Kakao</td><td>';
                                    if($dataProvider->kakao!=null) echo Yii::$app->formatter->format($dataProvider->kakao, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Lada</td><td>';
                                    if($dataProvider->lada!=null) echo Yii::$app->formatter->format($dataProvider->lada, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Kopi</td><td>';
                                    if($dataProvider->kopi!=null) echo Yii::$app->formatter->format($dataProvider->kopi, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Cengkeh</td><td>';
                                    if($dataProvider->cengkeh!=null) echo Yii::$app->formatter->format($dataProvider->cengkeh, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Pala</td><td>';
                                    if($dataProvider->pala!=null) echo Yii::$app->formatter->format($dataProvider->pala, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Kemiri</td><td>';
                                    if($dataProvider->kemiri!=null) echo Yii::$app->formatter->format($dataProvider->kemiri, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Kayu Manis</td><td>';
                                    if($dataProvider->kayu_manis!=null) echo Yii::$app->formatter->format($dataProvider->kayu_manis, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Aren</td><td>';
                                    if($dataProvider->aren!=null) echo Yii::$app->formatter->format($dataProvider->aren, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Kapok</td><td>';
                                    if($dataProvider->kapok!=null) echo Yii::$app->formatter->format($dataProvider->kapok, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Jambu Mete</td><td>';
                                    if($dataProvider->jambu_mete!=null) echo Yii::$app->formatter->format($dataProvider->jambu_mete, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Panili</td><td>';
                                    if($dataProvider->panili!=null) echo Yii::$app->formatter->format($dataProvider->panili, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Nipah</td><td>';
                                    if($dataProvider->nipah!=null) echo Yii::$app->formatter->format($dataProvider->nipah, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Pinang</td><td>';
                                    if($dataProvider->pinang!=null) echo Yii::$app->formatter->format($dataProvider->pinang, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Sagu</td><td>';
                                    if($dataProvider->sagu_!=null) echo Yii::$app->formatter->format($dataProvider->sagu_, 'decimal');
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

