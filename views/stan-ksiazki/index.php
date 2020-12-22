<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StanKsiazkiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Stan książek';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stan-ksiazki-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Dodaj Stan książki', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'stan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
