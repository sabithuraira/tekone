<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Djbpsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Djpb';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="djbp-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Djbp', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Import Excel', ['import'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tahun',
            'id_tw',
            'belanjapegawai',
            'belanjabarang',
            'belanjamodal',
            'belanjabansos',
            // 'fenomena:ntext',
            // 'id_satuan',
            // 'id_tahun',
            // 'id_tw',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
