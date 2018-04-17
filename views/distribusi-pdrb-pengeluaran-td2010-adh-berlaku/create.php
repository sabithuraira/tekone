<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DistribusiPdrbPengeluaranTd2010AdhBerlaku */

$this->title = 'Create Distribusi Pdrb Pengeluaran Td2010 Adh Berlaku';
$this->params['breadcrumbs'][] = ['label' => 'Distribusi Pdrb Pengeluaran Td2010 Adh Berlakus', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="distribusi-pdrb-pengeluaran-td2010-adh-berlaku-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
