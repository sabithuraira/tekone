<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ntpp */

$this->title = 'Create Ntpp';
$this->params['breadcrumbs'][] = ['label' => 'Ntpps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ntpp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
