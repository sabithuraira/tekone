<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Tanamanhiassearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tanamanhias';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanamanhias-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tanamanhias', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'anggrek',
            'anthurium_bunga',
            'anyelir',
            'gerbera_hebras',
            // 'gladiol',
            // 'heliconia_pisang_pisangan',
            // 'krisan',
            // 'mawar',
            // 'sedap_malam',
            // 'dracaena',
            // 'melati',
            // 'palem',
            // 'aglaonema',
            // 'adenium_kamboja_jepang',
            // 'euphorbia',
            // 'phylodendron',
            // 'pakis',
            // 'monstera',
            // 'ixora_soka',
            // 'cordyline',
            // 'diffenbachia',
            // 'sansevieria_pedang_pedangan',
            // 'anthurium_daun',
            // 'caladium',
            // 'fenomena:ntext',
            // 'id_wil',
            // 'id_satuan',
            // 'id_tahun',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
