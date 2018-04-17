<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ntp */

$this->title = 'Create Ntp';
$this->params['breadcrumbs'][] = ['label' => 'Ntps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ntp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
