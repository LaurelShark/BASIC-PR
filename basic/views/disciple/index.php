<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DiscipleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Disciples';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disciple-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Disciple', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'disciple_id',
            'd_name',
            't_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
