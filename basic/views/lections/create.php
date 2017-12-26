<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Lections */

$this->title = 'Create Lections';
$this->params['breadcrumbs'][] = ['label' => 'Lections', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="lections-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
