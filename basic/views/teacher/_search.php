<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TeacherSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 't_id') ?>

    <?= $form->field($model, 't_surname') ?>

    <?= $form->field($model, 't_name') ?>

    <?= $form->field($model, 't_fathname') ?>

    <?= $form->field($model, 't_datebirth') ?>

    <?php // echo $form->field($model, 't_email') ?>

    <?php // echo $form->field($model, 't_password') ?>

    <?php // echo $form->field($model, 'd_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
