<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Sayurbuahsetahun */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Sayurbuahsetahuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sayurbuahsetahun-view">

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
            'alpukat',
            'belimbing',
            'duku_langsat',
            'durian',
            'jambu_biji',
            'jambu_air',
            'jeruk_siam_keprok',
            'jeruk_besar',
            'mangga',
            'manggis',
            'nangka_cempedak',
            'nenas',
            'pepaya',
            'pisang',
            'rambutan',
            'salak',
            'sawo',
            'markisa_konyal',
            'sirsak',
            'sukun',
            'melinjo',
            'petai',
            'jengkol',
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
