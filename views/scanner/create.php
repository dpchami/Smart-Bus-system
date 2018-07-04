<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Scanner */

$this->title = 'Create Scanner';
$this->params['breadcrumbs'][] = ['label' => 'Scanners', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="scanner-create">

    

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
