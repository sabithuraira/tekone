<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Nilaibongkarkaltara */

$this->title = 'Create Nilaibongkarkaltara';
$this->params['breadcrumbs'][] = ['label' => 'Nilaibongkarkaltaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nilaibongkarkaltara-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
