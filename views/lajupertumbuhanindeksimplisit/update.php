<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\LajuPertumbuhanIndeksImplisit */

$this->title = 'Update Laju Pertumbuhan Indeks Implisit: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Laju Pertumbuhan Indeks Implisits', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="laju-pertumbuhan-indeks-implisit-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
