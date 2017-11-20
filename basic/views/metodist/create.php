<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Metodist */

$this->title = 'Create Metodist';
$this->params['breadcrumbs'][] = ['label' => 'Metodists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="metodist-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
