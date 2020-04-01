<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StanKsiazki */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stan-ksiazki-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'stan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
