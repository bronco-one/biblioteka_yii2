<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Zakupy */

$this->title = 'Update Zakupy: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Zakupies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="zakupy-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
