<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Aram */

$this->title = 'Create Aram';
$this->params['breadcrumbs'][] = ['label' => 'Arams', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aram-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
