<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StanKsiazki */

$this->title = 'Create Stan Ksiazki';
$this->params['breadcrumbs'][] = ['label' => 'Stan Ksiazkis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stan-ksiazki-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
