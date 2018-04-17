<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Asem */

$this->title = 'Update Asem: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Asems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="asem-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
