<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\BusOwner */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Agent', 'url' => ['#']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bus-owner-view">

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
        ],
    ]) ?>

</div>
