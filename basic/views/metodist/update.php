<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Metodist */

$this->title = 'Update Metodist: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Metodists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="metodist-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
