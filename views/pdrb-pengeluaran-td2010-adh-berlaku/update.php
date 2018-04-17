<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PdrbPengeluaranTd2010AdhBerlaku */

$this->title = 'Update Pdrb Pengeluaran Td2010 Adh Berlaku: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pdrb Pengeluaran Td2010 Adh Berlakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pdrb-pengeluaran-td2010-adh-berlaku-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
