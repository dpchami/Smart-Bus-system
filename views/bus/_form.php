<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Bus */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="bus-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'plate_nbr')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'driver_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'scanner')->textInput() ?>

    <?= $form->field($model, 'route_id')->textInput() ?>

    <?= $form->field($model, 'model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'owner')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
