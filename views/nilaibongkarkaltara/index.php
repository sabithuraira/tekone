<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Nilaibongkarkaltarasearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nilai Bongkar Kaltara';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilaibongkarkaltara-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nilaibongkarkaltara', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tahun',
            //'id_tw',
            'lingkastarakan',
            'nunukan',
            'bunyu',
            'tanjungselor',
            // 'tarakanu',
            // 'juatatarakan',
            // 'jumlahtotal',
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
