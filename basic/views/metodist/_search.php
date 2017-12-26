<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MetodistSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="metodist-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'm_id') ?>

    <?= $form->field($model, 'm_surname') ?>

    <?= $form->field($model, 'm_name') ?>

    <?= $form->field($model, 'm_fathname') ?>

    <?= $form->field($model, 'm_email') ?>

    <?php // echo $form->field($model, 'm_password') ?>

    <?php // echo $form->field($model, 'd_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
