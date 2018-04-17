<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Angkutanudarasearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Angkutan Udara';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="angkutanudara-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Angkutanudara', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tahun',
            'id_bulan',
            'penumpangberangkat',
            'barangmuat',
            'bagasimuat',
            'paketpos',
            'fenomena:ntext',
            // 'id_bulan',
            // 'id_satuan',
            // 'id_tahun',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
