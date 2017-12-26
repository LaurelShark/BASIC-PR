<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UniversitySearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="university-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'u_id') ?>

    <?= $form->field($model, 'u_name') ?>

    <?= $form->field($model, 'u_street') ?>

    <?= $form->field($model, 'u_buildnum') ?>

    <?= $form->field($model, 'u_city') ?>

    <?php // echo $form->field($model, 'u_postcode') ?>

    <?php // echo $form->field($model, 'u_telephone') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
