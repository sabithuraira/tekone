<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nilaibongkarkaltim */

$this->title = 'Create Nilaibongkarkaltim';
$this->params['breadcrumbs'][] = ['label' => 'Nilaibongkarkaltims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilaibongkarkaltim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
