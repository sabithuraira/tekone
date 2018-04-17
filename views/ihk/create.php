<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ihk */

$this->title = 'Create Ihk';
$this->params['breadcrumbs'][] = ['label' => 'Ihks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ihk-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
