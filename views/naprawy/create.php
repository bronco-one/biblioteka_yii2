<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Naprawy */

$this->title = 'Create Naprawy';
$this->params['breadcrumbs'][] = ['label' => 'Naprawies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="naprawy-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
