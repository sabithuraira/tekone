<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Sayurbuahsemusimsearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Sayurbuahsemusims';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sayurbuahsemusim-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Sayurbuahsemusim', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'bawang_merah',
            'bawang_putih',
            'bawang_daun',
            'kentang_',
            // 'kubis',
            // 'kembang_kol',
            // 'petsaisawi',
            // 'wortel',
            // 'lobak',
            // 'kacang_merah',
            // 'kacang_panjang',
            // 'cabe_besar',
            // 'cabe_rawit',
            // 'paprika',
            // 'jamur',
            // 'tomat',
            // 'terung',
            // 'buncis',
            // 'ketimun',
            // 'labu_siam',
            // 'kangkung',
            // 'bayam',
            // 'melon',
            // 'semangka',
            // 'blewah',
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
