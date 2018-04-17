<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Ekspormenurutbeberapagolongansearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ekspor Menurut Beberapa Golongan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ekspormenurutbeberapagolongan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Ekspormenurutbeberapagolongan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tahun',
            'id_bulan',
            'bahanbakarmineral',
            'migas',
            'nonmigas',
            'pupuk',
            // 'lemakdanminyakhewaninabatimalamnabati',
            // 'bahankimiaanorganik',
            // 'kayudanbarangdarikayuarangkayu',
            // 'bahankimiaorganik',
            // 'anekaprodukkimia',
            // 'kapalperahudanstrukturterapung',
            // 'reaktornuklirketelmesindanperalatanmekanis',
            // 'ikandankrustaseamoluskasertainvertebrataairlainnya',
            // 'total10golonganbarang',
            // 'lainnya',
            // 'totalekspor',
            // 'fenomena:ntext',
            // 'id_satuan',
            // 'id_tahun',
            // 'id_bulan',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
