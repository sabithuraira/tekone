<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tanamanbiofarmaka */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tanamanbiofarmakas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanamanbiofarmaka-view">

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
            'jahe',
            'laos_lengkuas',
            'kencur',
            'kunyit',
            'lempuyang',
            'temulawak',
            'temuireng',
            'temukunci',
            'dlingo_dringo',
            'kapulaga',
            'mengkudu_pace',
            'mahkota_dewa',
            'kejibeling',
            'sambiloto',
            'lidah_buaya',
            'biofarmaka_lainnya',
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
