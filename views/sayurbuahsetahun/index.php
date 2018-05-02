<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

$this->title = 'TABEL HORTIKULTURA BUAHAN';
$this->params['breadcrumbs'][] = $this->title;

$tahun = \app\models\Tahun::find()->all();
$kab = \app\models\Kab::find()->all();
$listData=ArrayHelper::map($tahun,'id','tahun');
$listDataKab=ArrayHelper::map($kab,'id','nama');

$form = ActiveForm::begin();
?>
<div class="box box-default">
    <div class="box-header with-border"><h3 class="box-title">
	    <span class="fa fa-tags"></span>TABEL HORTIKULTURA BUAHAN</h3>

        <div class="pull-right box-tools">

            <?= Html::a('<i class="fa fa-upload"></i> Import Data', ['sayurbuahsetahun/import/'] ,['class'=>'btn btn-info btn-sm', 'style'=> 'vertical-align:middle',]) ?>
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
                    TABEL TABEL HORTIKULTURA BUAHAN</h3>
                </div>
	
	            <div class="box-body">	
	                <table class="table table-hover table-bordered">
	
                        <tbody>
                            <tr>
                                <th class="text-center">Nama Buah-buahan</td>
                                <th class="text-center">Produksi (Kuintal)</td>
                            </tr>

                            <?php 
                                // print_r($dataProvider);die
                                if($dataProvider!=null){
                                    echo '<tr><td>Alpukat</td><td>';
                                    if($dataProvider->alpukat!=null) echo Yii::$app->formatter->format($dataProvider->alpukat, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';


                                    echo '<tr><td>Belimbing</td><td>';
                                    if($dataProvider->belimbing!=null) echo Yii::$app->formatter->format($dataProvider->belimbing, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Duku Langsat</td><td>';
                                    if($dataProvider->duku_langsat!=null) echo Yii::$app->formatter->format($dataProvider->duku_langsat, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Durian</td><td>';
                                    if($dataProvider->durian!=null) echo Yii::$app->formatter->format($dataProvider->durian, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Jambu Biji</td><td>';
                                    if($dataProvider->jambu_biji!=null) echo Yii::$app->formatter->format($dataProvider->jambu_biji, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Jambu Air</td><td>';
                                    if($dataProvider->jambu_air!=null) echo Yii::$app->formatter->format($dataProvider->jambu_air, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Jeruk Siam Keprok</td><td>';
                                    if($dataProvider->jeruk_siam_keprok!=null) echo Yii::$app->formatter->format($dataProvider->jeruk_siam_keprok, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Jeruk Besar</td><td>';
                                    if($dataProvider->jeruk_besar!=null) echo Yii::$app->formatter->format($dataProvider->jeruk_besar, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Mangga</td><td>';
                                    if($dataProvider->mangga!=null) echo Yii::$app->formatter->format($dataProvider->mangga, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Manggis</td><td>';
                                    if($dataProvider->manggis!=null) echo Yii::$app->formatter->format($dataProvider->manggis, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Nangka Cempedak</td><td>';
                                    if($dataProvider->nangka_cempedak!=null) echo Yii::$app->formatter->format($dataProvider->nangka_cempedak, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Nanas</td><td>';
                                    if($dataProvider->nenas!=null) echo Yii::$app->formatter->format($dataProvider->nenas, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Pepaya</td><td>';
                                    if($dataProvider->pepaya!=null) echo Yii::$app->formatter->format($dataProvider->pepaya, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Pisang</td><td>';
                                    if($dataProvider->pisang!=null) echo Yii::$app->formatter->format($dataProvider->pisang, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Rambutan</td><td>';
                                    if($dataProvider->rambutan!=null) echo Yii::$app->formatter->format($dataProvider->rambutan, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Salak</td><td>';
                                    if($dataProvider->salak!=null) echo Yii::$app->formatter->format($dataProvider->salak, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Sawo</td><td>';
                                    if($dataProvider->sawo!=null) echo Yii::$app->formatter->format($dataProvider->sawo, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Markisa Konyal</td><td>';
                                    if($dataProvider->markisa_konyal!=null) echo Yii::$app->formatter->format($dataProvider->markisa_konyal, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Sirsak</td><td>';
                                    if($dataProvider->sirsak!=null) echo Yii::$app->formatter->format($dataProvider->sirsak, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Sukun</td><td>';
                                    if($dataProvider->sukun!=null) echo Yii::$app->formatter->format($dataProvider->sukun, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Melinjo</td><td>';
                                    if($dataProvider->melinjo!=null) echo Yii::$app->formatter->format($dataProvider->melinjo, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Petai</td><td>';
                                    if($dataProvider->petai!=null) echo Yii::$app->formatter->format($dataProvider->petai, 'decimal');
                                    else echo '-';
                                    echo '</td></tr>';

                                    echo '<tr><td>Jengkol</td><td>';
                                    if($dataProvider->jengkol!=null) echo Yii::$app->formatter->format($dataProvider->jengkol, 'decimal');
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

