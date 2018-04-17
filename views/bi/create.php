<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bi */

$this->title = 'Create Bi';
$this->params['breadcrumbs'][] = ['label' => 'Bi', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
