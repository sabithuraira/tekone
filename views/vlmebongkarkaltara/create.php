<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vlmebongkarkaltara */

$this->title = 'Create Vlmebongkarkaltara';
$this->params['breadcrumbs'][] = ['label' => 'Vlmebongkarkaltaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vlmebongkarkaltara-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
