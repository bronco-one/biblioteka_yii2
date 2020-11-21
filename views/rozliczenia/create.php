<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rozliczenia */

$this->title = 'Create Rozliczenia';
$this->params['breadcrumbs'][] = ['label' => 'Rozliczenias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rozliczenia-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
