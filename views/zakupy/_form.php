<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Zakupy */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="zakupy-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ksiazki')->textInput() ?>

    <?= $form->field($model, 'data_zakupu')->textInput() ?>

    <?= $form->field($model, 'id_firma')->textInput() ?>

    <?= $form->field($model, 'cena')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
