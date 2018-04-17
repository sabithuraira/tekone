<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Nilaimuatkaltara */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nilaimuatkaltaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilaimuatkaltara-view">

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
            'lingkastarakan',
            'nunukan',
            'bunyu',
            'tanjungselor',
            'tarakanu',
            'juatatarakan',
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
