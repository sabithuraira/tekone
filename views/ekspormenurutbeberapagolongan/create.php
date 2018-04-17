<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ekspormenurutbeberapagolongan */

$this->title = 'Create Ekspormenurutbeberapagolongan';
$this->params['breadcrumbs'][] = ['label' => 'Ekspormenurutbeberapagolongans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ekspormenurutbeberapagolongan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
