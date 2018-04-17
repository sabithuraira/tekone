<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Neracaperdagangankaltim */

$this->title = 'Create Neracaperdagangankaltim';
$this->params['breadcrumbs'][] = ['label' => 'Neracaperdagangankaltims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="neracaperdagangankaltim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
