<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FenomenaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Fenomenas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fenomena-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Fenomena', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'pengeluaran_konsumsi_rumah_tangga_qtoq:ntext',
            'pengeluaran_konsumsi_rumah_tangga_ytoy:ntext',
            'pengeluaran_konsumsi_rumah_tangga_laju_implisit:ntext',
            'pengeluaran_konsumsi_lnprt_qtoq:ntext',
            // 'pengeluaran_konsumsi_lnprt_ytoy:ntext',
            // 'pengeluaran_konsumsi_lnprt_laju_implisit:ntext',
            // 'pengeluaran_konsumsi_pemerintah_qtoq:ntext',
            // 'pengeluaran_konsumsi_pemerintah_ytoy:ntext',
            // 'pengeluaran_konsumsi_pemerintah_laju_implisit:ntext',
            // 'pembentukan_modal_tetap_bruto_qtoq:ntext',
            // 'pembentukan_modal_tetap_bruto_ytoy:ntext',
            // 'pembentukan_modal_tetap_bruto_laju_implisit:ntext',
            // 'perubahan_inventori_qtoq:ntext',
            // 'perubahan_inventori_ytoy:ntext',
            // 'perubahan_inventori_laju_implisit:ntext',
            // 'ekspor_luar_negeri_qtoq:ntext',
            // 'ekspor_luar_negeri_ytoy:ntext',
            // 'ekspor_luar_negeri_laju_implisit:ntext',
            // 'impor_luar_negeri_qtoq:ntext',
            // 'impor_luar_negeri_ytoy:ntext',
            // 'impor_luar_negeri_implisit:ntext',
            // 'net_ekspor_antar_daerah_qtoq:ntext',
            // 'net_ekspor_antar_daerah_ytoy:ntext',
            // 'net_ekspor_antar_daerah_implisit:ntext',
            // 'id_kab',
            // 'triwulan',
            // 'tahun',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
