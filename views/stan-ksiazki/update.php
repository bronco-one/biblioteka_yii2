<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StanKsiazki */

$this->title = 'Update Stan Ksiazki: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stan Ksiazkis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="stan-ksiazki-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>