<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DistribusiPdrbPengeluaranTd2010AdhBerlakusearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Distribusi Pdrb Pengeluaran Td2010 Adh Berlakus';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distribusi-pdrb-pengeluaran-td2010-adh-berlaku-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Distribusi Pdrb Pengeluaran Td2010 Adh Berlaku', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pengeluaran_konsumsi_rumah_tangga',
            'pengeluaran_konsumsi_lnprt',
            'pengeluaran_konsumsi_pemerintah',
            'pembentukan_modal_tetap_bruto',
            // 'perubahan_inventori',
            // 'ekspor_luar_negeri',
            // 'impor_luar_negeri',
            // 'net_ekspor_antar_daerah',
            // 'pdrb',
            // 'total_sektoral',
            // 'triwulan',
            // 'tahun',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
