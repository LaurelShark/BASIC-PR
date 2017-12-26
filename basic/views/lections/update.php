<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Lections */

$this->title = 'Update Lections: ' . $model->lect_id;
$this->params['breadcrumbs'][] = ['label' => 'Lections', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->lect_id, 'url' => ['view', 'id' => $model->lect_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="lections-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
