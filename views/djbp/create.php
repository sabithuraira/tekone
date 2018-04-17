<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Djbp */

$this->title = 'Create Djpb';
$this->params['breadcrumbs'][] = ['label' => 'Djbps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="djbp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
