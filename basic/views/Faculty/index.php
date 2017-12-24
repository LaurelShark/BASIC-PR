<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\FacultySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Faculties';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="faculty-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if(\app\models\User::isAdmin()): ?>
        <p>
            <?= Html::a('Create Faculty', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif ?>
    <?php
        if(!\app\models\User::isStudent()) {
            $columns = [
                ['class' => 'yii\grid\SerialColumn'],

                'f_id',
                'f_name',
                'u_id',

                ['class' => 'yii\grid\ActionColumn'],
            ];
        } else {
            $columns = [
                ['class' => 'yii\grid\SerialColumn'],

                'f_id',
                'f_name',
                'u_id',

            ];
        }


    ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $columns
    ]); ?>
</div>
