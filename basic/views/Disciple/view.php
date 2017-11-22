<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Disciple */

$this->title = $model->disciple_id;
$this->params['breadcrumbs'][] = ['label' => 'Disciples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disciple-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->disciple_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->disciple_id], [
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
            'disciple_id',
            'd_name',
            't_id',
        ],
    ]) ?>

</div>
