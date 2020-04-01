<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kontrahenci */

$this->title = 'Create Kontrahenci';
$this->params['breadcrumbs'][] = ['label' => 'Kontrahencis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kontrahenci-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
