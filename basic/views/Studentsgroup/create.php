<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Studentsgroup */

$this->title = 'Create Studentsgroup';
$this->params['breadcrumbs'][] = ['label' => 'Studentsgroups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="studentsgroup-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
