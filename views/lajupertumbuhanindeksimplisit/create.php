<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\LajuPertumbuhanIndeksImplisit */

$this->title = 'Create Laju Pertumbuhan Indeks Implisit';
$this->params['breadcrumbs'][] = ['label' => 'Laju Pertumbuhan Indeks Implisits', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="laju-pertumbuhan-indeks-implisit-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
