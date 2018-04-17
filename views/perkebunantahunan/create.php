<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Perkebunantahunan */

$this->title = 'Create Perkebunantahunan';
$this->params['breadcrumbs'][] = ['label' => 'Perkebunantahunans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perkebunantahunan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
