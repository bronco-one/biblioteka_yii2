<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\grid\ActionColumn;
use yii\data\ActiveDataProvider;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KsiazkiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Książki';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ksiazki-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Dodaj książkę', ['create'], ['class' => 'btn btn-success']) ?>
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
        "pager"=>[
            "prevPageLabel" =>"Poprzednia", 
            "nextPageLabel" =>"Następna",
            "firstPageLabel" =>"Pierwsza", 
            "lastPageLabel" =>"Ostatnia",
            "options" =>["style" =>"margin-left:200px;", "class" =>"pagination",],
        ]
    ]); ?>


</div>
