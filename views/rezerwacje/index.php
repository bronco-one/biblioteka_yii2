<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\RezerwacjeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Rezerwacjes';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rezerwacje-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Rezerwacje', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_uzytkownika',
            'id_ksiazki',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
