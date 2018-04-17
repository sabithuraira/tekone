<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Akomodasi */

$this->title = 'Update Akomodasi: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Akomodasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="akomodasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
