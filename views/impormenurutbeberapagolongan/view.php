<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Impormenurutbeberapagolongan */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Impormenurutbeberapagolongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="impormenurutbeberapagolongan-view">

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
            'bahanbakarmineral',
            'migas',
            'nonmigas',
            'mesindanperalatanmekanik',
            'kendaraanbermotordanbagiannya',
            'barangdaribesiataubaja',
            'bahanpeledakprodukpiroteknikkorekapi',
            'mesindanperalatanlistrik',
            'karetdanbarangdaripadanya',
            'mutiaraalammutiarabudidayabatumuliaatausemimulia',
            'anekaprodukkimia',
            'instrumendanaparatusoptisfotografisinematografi',
            'total10golonganbarang',
            'lainnya',
            'totalimpor',
            'fenomena:ntext',
            'id_satuan',
            'id_tahun',
            'id_bulan',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
