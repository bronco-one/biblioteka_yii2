<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NaprawySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Naprawies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="naprawy-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Naprawy', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_ksiazki',
            'data_naprawy',
            'id_firma',
            'cena',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
