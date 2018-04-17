<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Impormenurutbeberapagolongansearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Impor Menurut Beberapa Golongan';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="impormenurutbeberapagolongan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Impormenurutbeberapagolongan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tahun',
            'id_bulan',
            'bahanbakarmineral',
            'migas',
            'nonmigas',
            'mesindanperalatanmekanik',
            // 'kendaraanbermotordanbagiannya',
            // 'barangdaribesiataubaja',
            // 'bahanpeledakprodukpiroteknikkorekapi',
            // 'mesindanperalatanlistrik',
            // 'karetdanbarangdaripadanya',
            // 'mutiaraalammutiarabudidayabatumuliaatausemimulia',
            // 'anekaprodukkimia',
            // 'instrumendanaparatusoptisfotografisinematografi',
            // 'total10golonganbarang',
            // 'lainnya',
            // 'totalimpor',
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
