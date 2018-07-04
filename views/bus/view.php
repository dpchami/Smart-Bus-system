<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Bus */

$this->title = $model->plate_nbr;
$this->params['breadcrumbs'][] = ['label' => 'Buses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bus-view">

    

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->plate_nbr], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->plate_nbr], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'plate_nbr',
            'driver_name',
            'scanner',
            'route_id',
            'model',
            'owner',
            'created_by',
            'created_at',
            'updated_by',
            'updated_at',
        ],
    ]) ?>

</div>
