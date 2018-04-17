<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pendudukkerja */

$this->title = 'Update Pendudukkerja: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Pendudukkerjas', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pendudukkerja-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
