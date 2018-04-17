<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ihp */

$this->title = 'Create Ihp';
$this->params['breadcrumbs'][] = ['label' => 'Ihps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ihp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
