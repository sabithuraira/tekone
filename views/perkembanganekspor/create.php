<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Perkembanganekspor */

$this->title = 'Create Perkembanganekspor';
$this->params['breadcrumbs'][] = ['label' => 'Perkembanganekspors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perkembanganekspor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
