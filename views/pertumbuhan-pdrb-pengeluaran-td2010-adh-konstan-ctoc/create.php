<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanCtoc */

$this->title = 'Create Pertumbuhan Pdrb Pengeluaran Td2010 Adh Konstan Ctoc';
$this->params['breadcrumbs'][] = ['label' => 'Pertumbuhan Pdrb Pengeluaran Td2010 Adh Konstan Ctocs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pertumbuhan-pdrb-pengeluaran-td2010-adh-konstan-ctoc-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
