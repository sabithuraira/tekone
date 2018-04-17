<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanYtoy */

$this->title = 'Update Pertumbuhan Pdrb Pengeluaran Td2010 Adh Konstan Ytoy: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pertumbuhan Pdrb Pengeluaran Td2010 Adh Konstan Ytoys', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pertumbuhan-pdrb-pengeluaran-td2010-adh-konstan-ytoy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
