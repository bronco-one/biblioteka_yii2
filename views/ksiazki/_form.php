<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Dzial;
use app\models\StanKsiazki;

/* @var $this yii\web\View */
/* @var $model app\models\Ksiazki */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ksiazki-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'isbn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tytul')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'autor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_dzial')->dropDownList(
        ArrayHelper::map(Dzial::find()->all(), 'id', 'nazwa'),
            ['prompt'=>'Wybierz']) ?>

    <?= $form->field($model, 'id_stan')->dropDownList(
        ArrayHelper::map(StanKsiazki::find()->all(), 'id', 'stan'),
            ['prompt'=>'Wybierz']) ?>

    <div class="form-group">
        <?= Html::submitButton('Dodaj', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
