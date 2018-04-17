<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PdrbPengeluaranTd2010AdhKonstan */

$this->title = 'Create Pdrb Pengeluaran Td2010 Adh Konstan';
$this->params['breadcrumbs'][] = ['label' => 'Pdrb Pengeluaran Td2010 Adh Konstans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pdrb-pengeluaran-td2010-adh-konstan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
