<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Sayurbuahsetahun */

$this->title = 'Create Sayurbuahsetahun';
$this->params['breadcrumbs'][] = ['label' => 'Sayurbuahsetahuns', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sayurbuahsetahun-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
