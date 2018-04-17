<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Sayurbuahsetahunsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sayurbuahsetahuns';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sayurbuahsetahun-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sayurbuahsetahun', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'alpukat',
            'belimbing',
            'duku_langsat',
            'durian',
            // 'jambu_biji',
            // 'jambu_air',
            // 'jeruk_siam_keprok',
            // 'jeruk_besar',
            // 'mangga',
            // 'manggis',
            // 'nangka_cempedak',
            // 'nenas',
            // 'pepaya',
            // 'pisang',
            // 'rambutan',
            // 'salak',
            // 'sawo',
            // 'markisa_konyal',
            // 'sirsak',
            // 'sukun',
            // 'melinjo',
            // 'petai',
            // 'jengkol',
            // 'lainnya',
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
