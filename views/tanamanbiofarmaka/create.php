<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tanamanbiofarmaka */

$this->title = 'Create Tanamanbiofarmaka';
$this->params['breadcrumbs'][] = ['label' => 'Tanamanbiofarmakas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanamanbiofarmaka-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
