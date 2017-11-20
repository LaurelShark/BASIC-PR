<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FirstName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'FathName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'E-mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'BirthDate')->textInput() ?>

    <?= $form->field($model, 'Course')->textInput() ?>

    <?= $form->field($model, 'UserName')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Password')->passwordInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
