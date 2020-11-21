<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Rezerwacje */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rezerwacje-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_uzytkownika')->textInput() ?>

    <?= $form->field($model, 'id_ksiazki')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
