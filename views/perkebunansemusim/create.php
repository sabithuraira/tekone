<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Perkebunansemusim */

$this->title = 'Create Perkebunansemusim';
$this->params['breadcrumbs'][] = ['label' => 'Perkebunansemusims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perkebunansemusim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
