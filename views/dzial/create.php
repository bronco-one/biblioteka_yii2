<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Dzial */

$this->title = 'Create Dzial';
$this->params['breadcrumbs'][] = ['label' => 'Dzials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="dzial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
