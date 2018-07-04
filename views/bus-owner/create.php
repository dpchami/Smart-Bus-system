<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\BusOwner */

$this->title = 'Create Bus Owner';
$this->params['breadcrumbs'][] = ['label' => 'Bus Owners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bus-owner-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
