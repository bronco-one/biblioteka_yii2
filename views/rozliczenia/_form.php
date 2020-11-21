<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rozliczenia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rozliczenia-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_uzytkownika')->textInput() ?>

    <?= $form->field($model, 'id_ksiazki')->textInput() ?>

    <?= $form->field($model, 'id_powod')->textInput() ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
