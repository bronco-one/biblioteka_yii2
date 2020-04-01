<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KsiazkiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ksiazkis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ksiazki-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ksiazki', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'isbn',
            'tytul',
            'autor',
            'id_dzial',
            //'id_stan',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
