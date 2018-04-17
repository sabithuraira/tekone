<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Neracaperdagangankaltara */

$this->title = 'Update Neracaperdagangankaltara: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Neracaperdagangankaltaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="neracaperdagangankaltara-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
