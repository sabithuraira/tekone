<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ihpb */

$this->title = 'Create Ihpb';
$this->params['breadcrumbs'][] = ['label' => 'Ihpbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ihpb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
