<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vlmemuatkaltim */

$this->title = 'Create Vlmemuatkaltim';
$this->params['breadcrumbs'][] = ['label' => 'Vlmemuatkaltims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vlmemuatkaltim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
