<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BusOwner */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Bus Owners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bus-owner-view">

    

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->user_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->user_id], [
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
            'user_id',
            'name',
            'address',
            'tin',
            'created_by',
            'created_at',
            'updated_by',
            'updated_at',
        ],
    ]) ?>

</div>
