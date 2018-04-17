<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\IndeksImplisit */

$this->title = 'Create Indeks Implisit';
$this->params['breadcrumbs'][] = ['label' => 'Indeks Implisits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="indeks-implisit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
