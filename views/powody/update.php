<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Powody */

$this->title = 'Update Powody: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Powodies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="powody-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
