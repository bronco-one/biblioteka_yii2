<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Zakupy */

$this->title = 'Create Zakupy';
$this->params['breadcrumbs'][] = ['label' => 'Zakupies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="zakupy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
