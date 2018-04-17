<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Ihk */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ihks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ihk-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'bahanmakanan',
            'padipadianumbiumbianhasilnya',
            'daginghasil',
            'ikansegar',
            'ikandiawetkan',
            'telursusuhasilnya',
            'sayursayuran',
            'kacangkacangan',
            'buahbuahan',
            'bumbubumbuan',
            'lemakdanminyak',
            'bahanmakananlainnya',
            'makananjadirokoktembakau',
            'makananjadi',
            'minumanyangtdkberalkohol',
            'tembakaudanminumanberalkohol',
            'perumahan',
            'biayatempattinggal',
            'bahanbakarpeneranganair',
            'perlengkapanrumahtangga',
            'penyelenggaraanrumahtangga',
            'sandang',
            'sandanglakilaki',
            'sandangwanita',
            'sandanganakanak',
            'barangpribadisandanglainnya',
            'kesehatan',
            'jasakesehatan',
            'obatobatan',
            'jasaperawatanjasmani',
            'perawatanjasmanidankosmetik',
            'pendidikanrekreasidanolahraga',
            'jasapendidikan',
            'kursuskursuspelatihan',
            'perlengkapanperalatanpendidikan',
            'rekreasi',
            'olahraga',
            'transpordankomunikasi',
            'transport',
            'komunikasidanpengiriman',
            'saranadanpenunjangtranspor',
            'jasakeuangan',
            'fenomena:ntext',
            'id_wil',
            'id_satuan',
            'id_tahun',
            'id_bulan',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
