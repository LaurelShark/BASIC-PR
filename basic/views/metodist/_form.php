<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Metodist */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="metodist-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'm_surname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'm_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'm_fathname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'm_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'm_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'd_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
