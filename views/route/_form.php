<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Route */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="route-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'end_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'normal_price')->textInput() ?>

    <?= $form->field($model, 'student_price')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
