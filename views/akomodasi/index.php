<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Akomodasisearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Akomodasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="akomodasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Akomodasi', ['create'], ['class' => 'btn btn-success']) ?>
		   <?= Html::a('Import Excel', ['import'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
			'id_bulan',
			'id_wil',
            'hotel',
            'penginapan',
            'kamar',
            'tempattidur',
            'fenomena:ntext',
            
            // 'id_satuan',
            // 'id_wil',
            // 'id_tahun',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
