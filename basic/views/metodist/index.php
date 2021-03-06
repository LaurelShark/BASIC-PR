<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MetodistSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Metodists';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="metodist-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Metodist', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'm_id',
            'm_surname',
            'm_name',
            'm_fathname',
            'm_email:email',
            // 'm_password',
            // 'd_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
