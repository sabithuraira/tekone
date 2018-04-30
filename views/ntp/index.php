<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\widgets\LinkPager;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;

$this->title = 'TABEL NTP';
$this->params['breadcrumbs'][] = $this->title;

$tahun = \app\models\Tahun::find()->all();
$listData=ArrayHelper::map($tahun,'id','tahun');

$form = ActiveForm::begin();
?>
<div class="box box-default">
    <div class="box-header with-border"><h3 class="box-title">
	    <span class="fa fa-tags"></span>TABEL NTP</h3>

        <div class="pull-right box-tools">

            <?= Html::a('<i class="fa fa-upload"></i> Import Data', ['ntp/import/'] ,['class'=>'btn btn-info btn-sm', 'style'=> 'vertical-align:middle',]) ?>
        </div>
	</div>
    
    <div class="box-body">	

	    <div class="body-content">
            <div class="row">
                <div class="col-xs-3 col-md-3">
                    <label class=" center pull-right">Tahun - Subsektor : </label>
                </div>

                <div class="col-xs-3 col-md-3">
                    <?= $form->field($searchModel, 'id_tahun')->dropDownList(
                            $listData,['options' => [$th => ['Selected'=>'selected']]],
                            ['prompt'=>'Pilih Tahun...'])->label(false) 
                    ?>
                </div>

                <div class="col-xs-3 col-md-3">
                    <?= $form->field($searchModel, 'id_subsektor')->dropDownList($searchModel->subsektorList, 
                            ['options' => [$triwulan => ['Selected'=>'selected']]],
                            ['prompt'=>'Pilih Subsektor...'])->label(false)
                    ?>
                </div>
                
                <div class="col-xs-3 col-md-3"><?= Html::submitButton('Tampil', ['class'=> 'btn btn-warning btn-block','style'=>'font-size:14px;padding:7px;']) ?></div>
                <?php ActiveForm::end(); ?>
            </div>

	        
            <div class="box box-solid box-info">
                <div class="box-header with-border"><h3 class="box-title">
                    <span class="fa fa-tags"></span>
                    TABEL NTP <?php echo $searchModel->id_tahun.' Subsektor '.$searchModel->subsektorList[$searchModel->id_subsektor] ?> </h3>
                </div>
	
	            <div class="box-body">	
	                <table class="table table-hover table-bordered">
                        <?php
                            $labelNtp = "";

                            if($searchModel->id_subsektor==1) $labelNtp = "Tanaman Pangan NTPP";
                            else if($searchModel->id_subsektor==2) $labelNtp = "Hortikultura NTH";
                            else if($searchModel->id_subsektor==3) $labelNtp = "Tanaman Perkebunan NTPR";
                            else if($searchModel->id_subsektor==4) $labelNtp = "Peternakan NTH";
                            else if($searchModel->id_subsektor==5) $labelNtp = "Periknanan NTNP";
                        ?>
                        <tbody>
                            <tr>
                                <th class="text-center">Bulan</td>
                                <th class="text-center">Indes Diterima (It)</td>
                                <th class="text-center">Indes Dibayar (Ib)</td>
                                <th class="text-center"><?php echo $labelNtp; ?></td>
                            </tr>

                            <?php 
                                $months = array('Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
                                
                                if(count($dataProvider)==0){
                                    echo '<tr><td>Tidak ada data</td>';
                                    echo '<td>Tidak ada data</td>';
                                    echo '<td>Tidak ada data</td>';
                                    echo '<td>Tidak ada data</td></tr>';
                                }
                                else{
                                    foreach($dataProvider as $key=>$value){
                                        echo '<tr><td>'.$months[$key].'</td>';
                                        echo '<td>'.$value['it'].'</td>';
                                        echo '<td>'.$value['ib'].'</td>';
                                        echo '<td>'.$value['ntp'].'</td></tr>';
                                    }
                                }
                            ?>
                        </tbody>
                    </table>
	            </div>
            </div>
        </div>
    </div>
</div>

