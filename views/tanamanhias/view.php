<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Tanamanhias */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tanamanhias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanamanhias-view">

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
            'anggrek',
            'anthurium_bunga',
            'anyelir',
            'gerbera_hebras',
            'gladiol',
            'heliconia_pisang_pisangan',
            'krisan',
            'mawar',
            'sedap_malam',
            'dracaena',
            'melati',
            'palem',
            'aglaonema',
            'adenium_kamboja_jepang',
            'euphorbia',
            'phylodendron',
            'pakis',
            'monstera',
            'ixora_soka',
            'cordyline',
            'diffenbachia',
            'sansevieria_pedang_pedangan',
            'anthurium_daun',
            'caladium',
            'fenomena:ntext',
            'id_wil',
            'id_satuan',
            'id_tahun',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
