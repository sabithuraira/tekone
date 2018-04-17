<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Vlmebongkarkaltimsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Vlmebongkarkaltims';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vlmebongkarkaltim-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Vlmebongkarkaltim', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
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
