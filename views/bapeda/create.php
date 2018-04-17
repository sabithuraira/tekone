<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Bapeda */

$this->title = 'Create Bapeda';
$this->params['breadcrumbs'][] = ['label' => 'Bapedas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bapeda-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
