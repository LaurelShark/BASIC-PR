<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Disciple */

$this->title = 'Create Disciple';
$this->params['breadcrumbs'][] = ['label' => 'Disciples', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disciple-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
