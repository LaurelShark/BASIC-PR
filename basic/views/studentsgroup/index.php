<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StudentsgroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Studentsgroups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentsgroup-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Studentsgroup', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'g_id',
            's_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
