<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ntph */

$this->title = 'Create Ntph';
$this->params['breadcrumbs'][] = ['label' => 'Ntphs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ntph-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
