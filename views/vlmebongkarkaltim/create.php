<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vlmebongkarkaltim */

$this->title = 'Create Vlmebongkarkaltim';
$this->params['breadcrumbs'][] = ['label' => 'Vlmebongkarkaltims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vlmebongkarkaltim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
