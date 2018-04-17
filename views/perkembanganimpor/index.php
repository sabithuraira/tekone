<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Perkembanganimporsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Perkembangan Impor';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perkembanganimpor-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Perkembanganimpor', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tahun',
            'id_bulan',
            'migas',
            'minyakmentah',
            'hasilminyak',
            'gas',
            // 'nonmigas',
            // 'hs27',
            // 'lainnya',
            // 'total',
            // 'fenomena:ntext',
            // 'id_satuan',
            // 'id_tahun',
            // 'id_bulan',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
