<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Bus */

$this->title = 'Update Bus: ' . $model->plate_nbr;
$this->params['breadcrumbs'][] = ['label' => 'Buses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->plate_nbr, 'url' => ['view', 'id' => $model->plate_nbr]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="bus-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
