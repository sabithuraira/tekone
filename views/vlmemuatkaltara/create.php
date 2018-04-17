<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Vlmemuatkaltara */

$this->title = 'Create Vlmemuatkaltara';
$this->params['breadcrumbs'][] = ['label' => 'Vlmemuatkaltaras', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="vlmemuatkaltara-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
