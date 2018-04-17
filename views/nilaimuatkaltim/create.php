<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nilaimuatkaltim */

$this->title = 'Create Nilaimuatkaltim';
$this->params['breadcrumbs'][] = ['label' => 'Nilaimuatkaltims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilaimuatkaltim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
