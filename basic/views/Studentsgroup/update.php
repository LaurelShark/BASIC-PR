<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Studentsgroup */

$this->title = 'Update Studentsgroup: ' . $model->g_id;
$this->params['breadcrumbs'][] = ['label' => 'Studentsgroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->g_id, 'url' => ['view', 'g_id' => $model->g_id, 's_id' => $model->s_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="studentsgroup-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
