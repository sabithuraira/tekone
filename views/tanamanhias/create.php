<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Tanamanhias */

$this->title = 'Create Tanamanhias';
$this->params['breadcrumbs'][] = ['label' => 'Tanamanhias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tanamanhias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
