<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Studentsgroup */

$this->title = $model->g_id;
$this->params['breadcrumbs'][] = ['label' => 'Studentsgroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentsgroup-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'g_id' => $model->g_id, 's_id' => $model->s_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'g_id' => $model->g_id, 's_id' => $model->s_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'g_id',
            's_id',
        ],
    ]) ?>

</div>
