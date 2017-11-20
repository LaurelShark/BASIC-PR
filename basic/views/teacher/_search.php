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

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'FirstName') ?>

    <?= $form->field($model, 'FathName') ?>

    <?= $form->field($model, 'Surname') ?>

    <?= $form->field($model, 'E-mail') ?>

    <?php // echo $form->field($model, 'BirthDate') ?>

    <?php // echo $form->field($model, 'UserName') ?>

    <?php // echo $form->field($model, 'Password') ?>

    <?php // echo $form->field($model, 'Disciples') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
