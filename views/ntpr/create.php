<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ntpr */

$this->title = 'Create Ntpr';
$this->params['breadcrumbs'][] = ['label' => 'Ntprs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ntpr-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
