<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\KontrachenciSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Kontrahencis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kontrahenci-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Kontrahenci', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nazwa',
            'adres',
            'email:email',
            'telefon',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
