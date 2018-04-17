<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ntpt */

$this->title = 'Create Ntpt';
$this->params['breadcrumbs'][] = ['label' => 'Ntpts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ntpt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
