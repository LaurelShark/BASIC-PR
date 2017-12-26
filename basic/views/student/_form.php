<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Student */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="student-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 's_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_fathname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_datebirth')->textInput() ?>

    <?= $form->field($model, 's_course')->textInput() ?>

    <?= $form->field($model, 's_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 's_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'speciality_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
