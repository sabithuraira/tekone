<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Atap */

$this->title = 'Create Atap';
$this->params['breadcrumbs'][] = ['label' => 'Ataps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="atap-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
