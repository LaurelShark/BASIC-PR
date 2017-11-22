<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Admin */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'a_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_fathname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_datebirth')->textInput() ?>

    <?= $form->field($model, 'a_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'a_password')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
