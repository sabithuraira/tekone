<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Triwulan */

$this->title = 'Create Triwulan';
$this->params['breadcrumbs'][] = ['label' => 'Triwulans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="triwulan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
