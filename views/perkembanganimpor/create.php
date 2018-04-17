<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Perkembanganimpor */

$this->title = 'Create Perkembanganimpor';
$this->params['breadcrumbs'][] = ['label' => 'Perkembanganimpors', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="perkembanganimpor-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
