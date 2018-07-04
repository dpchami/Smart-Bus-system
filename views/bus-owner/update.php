<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BusOwner */

$this->title = 'Update Bus Owner: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bus Owners', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bus-owner-update">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
