<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

$this->title = 'TABEL ATAP';
$this->params['breadcrumbs'][] = $this->title;

$tahun = \app\models\Tahun::find()->all();
$kab = \app\models\Kab::find()->all();
$listData=ArrayHelper::map($tahun,'id','tahun');
$listDataKab=ArrayHelper::map($kab,'id','nama');

$form = ActiveForm::begin();
?>
<div class="box box-default">
    <div class="box-header with-border"><h3 class="box-title">
	    <span class="fa fa-tags"></span>TABEL ATAP</h3>
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
                    TABEL ATAP <?php echo $th.' Kab/Kota '.$triwulan?> </h3>
                </div>
	
	            <div class="box-body">	
	                <table class="table table-hover table-bordered">
	
                        <tbody>
                            <tr>
                                <th class="text-center" rowspan="2">Komoditas</td>
                                <th class="text-center" colspan="3">Produksi (Ton)</td>
                            </tr>

                            <tr>
                                <th class="text-center">Subround 1</td>
                                <th class="text-center">Subround 2</td>
                                <th class="text-center">Subround 3</td>
                            </tr>

                            <?php 
                                $list_komoditas = array('padisawah', 'padiladang', 'padi', 'jagung', 'kedelai', 'kacangtanah', 'kacanghijau', 'ubikayu', 'ubijalar');
                                $label_komoditas = array('Padi Sawah', 'Padi Ladang', 'Padi', 'Jagung', 'Kedelai', 'Kacang Tanah', 'Kacang Hijau', 'Ubi Kayu', 'Ubi Jalar');
                            
                                foreach($list_komoditas as $key=>$value){
                                    echo '<tr><td>'.$label_komoditas[$key].'</td>';
                                    echo '<td>';
                                    
                                    if(count($dataProvider)>=1) echo Yii::$app->formatter->format($dataProvider[0][$value], 'decimal');
                                    else echo '-';

                                    echo '</td><td>';
                                    if(count($dataProvider)>=2) echo Yii::$app->formatter->format($dataProvider[1][$value], 'decimal');
                                    else echo '-';

                                    echo '</td><td>';
                                    if(count($dataProvider)>=3) echo Yii::$app->formatter->format($dataProvider[2][$value], 'decimal');
                                    else echo '-';

                                    echo '</td>';
                                        
                                }
                            ?>

                            

                        </tbody>
                    </table>
	            </div>
            </div>
        </div>
    </div>
</div>

