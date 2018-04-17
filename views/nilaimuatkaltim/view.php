<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nilaimuatkaltim */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nilaimuatkaltims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilaimuatkaltim-view">

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
            'bontang',
            'samarinda',
            'balikpapan',
            'tanjungsangata',
            'adangbay',
            'tanjungredeb',
            'senipah',
            'sangkulirang',
            'pasirtanahgrogot',
            'sepingganu',
            'lainnya',
            'jumlahtotal',
            'fenomena:ntext',
            'id_wil',
            'id_satuan',
            'id_tahun',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
