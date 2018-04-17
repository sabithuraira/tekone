<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Perkebunantahunansearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perkebunantahunans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perkebunantahunan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Perkebunantahunan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'karet',
            'kelapa_dalam',
            'kelapa_sawit',
            'kakao',
            // 'lada',
            // 'kopi',
            // 'cengkeh',
            // 'pala',
            // 'kemiri',
            // 'kayu_manis',
            // 'aren',
            // 'kapok',
            // 'jambu_mete',
            // 'panili',
            // 'nipah',
            // 'pinang',
            // 'sagu_',
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
