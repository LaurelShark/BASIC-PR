<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StudentSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 's_id') ?>

    <?= $form->field($model, 's_surname') ?>

    <?= $form->field($model, 's_name') ?>

    <?= $form->field($model, 's_fathname') ?>

    <?= $form->field($model, 's_datebirth') ?>

    <?php // echo $form->field($model, 's_course') ?>

    <?php // echo $form->field($model, 's_email') ?>

    <?php // echo $form->field($model, 's_password') ?>

    <?php // echo $form->field($model, 'speciality_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
