<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rozliczenia */

$this->title = 'Update Rozliczenia: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Rozliczenias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="rozliczenia-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
