<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Teacher */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="teacher-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 't_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_fathname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_datebirth')->textInput() ?>

    <?= $form->field($model, 't_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 't_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'd_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
