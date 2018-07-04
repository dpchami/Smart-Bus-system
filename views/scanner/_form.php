<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Scanner */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="scanner-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'scanner_code')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
