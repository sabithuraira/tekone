<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nilaimuatkaltara */

$this->title = 'Create Nilaimuatkaltara';
$this->params['breadcrumbs'][] = ['label' => 'Nilaimuatkaltaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilaimuatkaltara-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
