<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Neracaperdagangankaltara */

$this->title = 'Create Neracaperdagangankaltara';
$this->params['breadcrumbs'][] = ['label' => 'Neracaperdagangankaltaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="neracaperdagangankaltara-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
