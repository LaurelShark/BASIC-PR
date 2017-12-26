<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AdminSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="admin-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'a_id') ?>

    <?= $form->field($model, 'a_surname') ?>

    <?= $form->field($model, 'a_name') ?>

    <?= $form->field($model, 'a_fathname') ?>

    <?= $form->field($model, 'a_datebirth') ?>

    <?php // echo $form->field($model, 'a_position') ?>

    <?php // echo $form->field($model, 'a_email') ?>

    <?php // echo $form->field($model, 'a_password') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
