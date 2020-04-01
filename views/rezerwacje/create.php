<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rezerwacje */

$this->title = 'Create Rezerwacje';
$this->params['breadcrumbs'][] = ['label' => 'Rezerwacjes', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rezerwacje-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
