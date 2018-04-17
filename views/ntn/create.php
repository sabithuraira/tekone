<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ntn */

$this->title = 'Create Ntn';
$this->params['breadcrumbs'][] = ['label' => 'Ntns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ntn-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
