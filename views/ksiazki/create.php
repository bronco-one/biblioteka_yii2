<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Ksiazki */

$this->title = 'Dodaj książkę';
$this->params['breadcrumbs'][] = ['label' => 'Książki', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ksiazki-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
