<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Atapsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Atap';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atap-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Atap', ['create'], ['class' => 'btn btn-success']) ?>
		   <?= Html::a('Import Excel', ['import'], ['class' => 'btn btn-primary']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tahun',
			'id_wil',
            'padisawah',
            'padiladang',
            'padi',
            'jagung',
            // 'kedelai',
            // 'kacangtanah',
            // 'kacanghijau',
            // 'ubikayu',
            // 'ubijalar',
            'fenomena:ntext',
            
            // 'id_satuan',
            // 'id_tahun',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
