<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Asem */

$this->title = 'Create Asem';
$this->params['breadcrumbs'][] = ['label' => 'Asems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="asem-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
