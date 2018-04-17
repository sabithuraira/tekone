<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Tanamanbiofarmakasearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tanamanbiofarmakas';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanamanbiofarmaka-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Tanamanbiofarmaka', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'jahe',
            'laos_lengkuas',
            'kencur',
            'kunyit',
            // 'lempuyang',
            // 'temulawak',
            // 'temuireng',
            // 'temukunci',
            // 'dlingo_dringo',
            // 'kapulaga',
            // 'mengkudu_pace',
            // 'mahkota_dewa',
            // 'kejibeling',
            // 'sambiloto',
            // 'lidah_buaya',
            // 'biofarmaka_lainnya',
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
