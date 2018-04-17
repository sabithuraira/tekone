<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Vlmebongkarkaltara */

$this->title = 'Update Vlmebongkarkaltara: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Vlmebongkarkaltaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="vlmebongkarkaltara-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
