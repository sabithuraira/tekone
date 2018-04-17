<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Nilaibongkarkaltimsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nilai Bongkar Kaltim';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilaibongkarkaltim-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Nilaibongkarkaltim', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tahun',
            //'id_tw',
            'bontang',
            'samarinda',
            'balikpapan',
            'tanjungsangata',
            // 'adangbay',
            // 'tanjungredeb',
            // 'senipah',
            // 'sangkulirang',
            // 'pasirtanahgrogot',
            // 'sepingganu',
            // 'lainnya',
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
