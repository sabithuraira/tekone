<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pertumbuhan Pdrb Pengeluaran Td2010 Adh Konstan Ctocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertumbuhan-pdrb-pengeluaran-td2010-adh-konstan-ctoc-view">

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
            'pengeluaran_konsumsi_rumah_tangga',
            'pengeluaran_konsumsi_lnprt',
            'pengeluaran_konsumsi_pemerintah',
            'pembentukan_modal_tetap_bruto',
            'perubahan_inventori',
            'ekspor_luar_negeri',
            'impor_luar_negeri',
            'net_ekspor_antar_daerah',
            'pdrb',
            'total_sektoral',
            'triwulan',
            'tahun',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
