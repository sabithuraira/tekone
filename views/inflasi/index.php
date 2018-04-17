<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\Inflasisearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Inflasi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="inflasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Inflasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_tahun',
            'id_bulan',
            'bahanmakanan',
            'padipadianumbiumbianhasilnya',
            'daginghasilhasilnya',
            'ikansegar',
            // 'ikandiawetkan',
            // 'telursusuhasilnya',
            // 'sayursayuran',
            // 'kacangkacangan',
            // 'buahbuahan',
            // 'bumbubumbuan',
            // 'lemakdanminyak',
            // 'bahanmakananlainnya',
            // 'makananjadirokoktembakau',
            // 'makananjadi',
            // 'minumanyangtdkberalkohol',
            // 'tembakaudanminumanberalkohol',
            // 'perumahan',
            // 'biayatempattinggal',
            // 'bahanbakarpeneranganair',
            // 'perlengkapanrumahtangga',
            // 'penyelenggaraanrumahtangga',
            // 'sandang',
            // 'sandanglakilaki',
            // 'sandangwanita',
            // 'sandanganakanak',
            // 'barangpribadisandanglainnya',
            // 'kesehatan',
            // 'jasakesehatan',
            // 'obatobatan',
            // 'jasaperawatanjasmani',
            // 'perawatanjasmanidankosmetik',
            // 'pendidikanrekreasidanolahraga',
            // 'jasapendidikan',
            // 'kursuskursuspelatihan',
            // 'perlengkapanperalatanpendidikan',
            // 'rekreasi',
            // 'olahraga',
            // 'transpordankomunikasi',
            // 'transport',
            // 'komunikasidanpengiriman',
            // 'saranadanpenunjangtranspor',
            // 'jasakeuangan',
            // 'fenomena:ntext',
            // 'id_wil',
            // 'id_satuan',
            // 'id_tahun',
            // 'id_bulan',
            // 'created_at',
            // 'updated_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
