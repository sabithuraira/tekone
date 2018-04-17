<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Klasifikasibintangsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Klasifikasi Bintang';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klasifikasibintang-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Klasifikasibintang', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tahun',
            'id_bulan',
            'bintang1',
            'bintang2',
            'bintang3',
            'bintang4',
            // 'bintang5',
            // 'fenomena:ntext',
            // 'id_bulan',
            // 'id_satuan',
            // 'id_wil',
            // 'id_tahun',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
