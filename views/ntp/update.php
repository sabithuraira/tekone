<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ntp */

$this->title = 'Update Ntp: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ntps', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ntp-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
