<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TasksSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tasks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tasks-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?php if(!\app\models\User::isStudent()): ?>
        <p>
            <?= Html::a('Create Tasks', ['create'], ['class' => 'btn btn-success']) ?>
        </p>
    <?php endif ?>

    <?
        if(!\app\models\User::isStudent()) {
            $columns = [
                ['class' => 'yii\grid\SerialColumn'],

                'task_id',
                'Name',

                ['class' => 'yii\grid\ActionColumn'],
            ];
        } else {
            $results =
                \app\models\Plan::find()->
                    leftJoin('Results', 'Plan.p_id = Results.p_id')->
                    innerJoin('Tasks', 'Tasks.task_id = Plan.task_id')->
                    //    innerJoin('Disciple', 'Disciple.disciple_id = Plan.disciple_id')->
                    innerJoin('Groups', 'Groups.disciple_id = Plan.disciple_id')->
                    innerJoin('Group_Student', 'Groups.g_id = Group_Student.g_id')->
                    innerJoin('Student', 'Group_Student.s_id = Student.s_id')->
                    where(['Student.s_id' => $_SESSION['user']['s_id'] ])->
                    select('Tasks.*, Results.NumberOfTries, Results.Mark, Results.Bitmask')->
                    asArray()->all();

            #print_r($results); die;

            $results = \yii\helpers\ArrayHelper::index($results, 'task_id');


            $columns = [
                ['class' => 'yii\grid\SerialColumn'],

                'task_id',
                'Name',

                ['header' => 'Number Of Tries',
                 'content' => function($model) use($results) {
                    $id = $model['task_id'];
                    if(isset($results[$id]['NumberOfTries'])) {
                        return $results[$id]['NumberOfTries'];
                    } else {
                        return 0;
                    }
                }],

                ['header' => 'Mark',
                'content' => function($model) use($results) {
                    $id = $model['task_id'];
                    if(isset($results[$id]['Bitmask'])) {
                        return $results[$id]['Bitmask'];
                    } else {
                        return '-';
                    }
                }],

                ['header' => 'Bitmask',
                 'content' => function($model) {
                     $id = $model['task_id'];

                }],

                ['content' => function($model) {
                    $id = $model['task_id'];
                    $url = \yii\helpers\Url::to(['questioneer/index', 'task_id' => $id]);
                    return Html::a('test', $url);
                }]
            ];
        }

    ?>
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $searchModel,
            'columns' => $columns,
        ]); ?>

</div>
