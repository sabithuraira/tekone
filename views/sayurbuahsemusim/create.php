<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sayurbuahsemusim */

$this->title = 'Create Sayurbuahsemusim';
$this->params['breadcrumbs'][] = ['label' => 'Sayurbuahsemusims', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sayurbuahsemusim-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
