<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ntnp */

$this->title = 'Create Ntnp';
$this->params['breadcrumbs'][] = ['label' => 'Ntnps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ntnp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
