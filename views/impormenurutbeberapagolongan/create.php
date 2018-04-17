<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Impormenurutbeberapagolongan */

$this->title = 'Create Impormenurutbeberapagolongan';
$this->params['breadcrumbs'][] = ['label' => 'Impormenurutbeberapagolongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="impormenurutbeberapagolongan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
