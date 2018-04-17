<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Nilaimuatkaltara */

$this->title = 'Update Nilaimuatkaltara: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Nilaimuatkaltaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="nilaimuatkaltara-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
