<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sayurbuahsemusim */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sayurbuahsemusims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sayurbuahsemusim-view">

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
            'bawang_merah',
            'bawang_putih',
            'bawang_daun',
            'kentang_',
            'kubis',
            'kembang_kol',
            'petsaisawi',
            'wortel',
            'lobak',
            'kacang_merah',
            'kacang_panjang',
            'cabe_besar',
            'cabe_rawit',
            'paprika',
            'jamur',
            'tomat',
            'terung',
            'buncis',
            'ketimun',
            'labu_siam',
            'kangkung',
            'bayam',
            'melon',
            'semangka',
            'blewah',
            'lainnya',
            'fenomena:ntext',
            'id_wil',
            'id_satuan',
            'id_tahun',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
