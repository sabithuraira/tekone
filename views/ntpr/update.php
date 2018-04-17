<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ntpr */

$this->title = 'Update Ntpr: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Ntprs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ntpr-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
