<?php 

use app\widgets\Alert;
use app\assets\AppAsset;
AppAsset::register($this);

 ?>

<div class="container">
    <div class="row">
    <div class="error-template" style="padding: 40px 15px; text-align: center;">
        <h1 style="color: red">Oops!</h1>
        <div class="error-details" style="margin-top:15px;margin-bottom:15px;">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
        <div class="error-actions">
        <a href="<?php echo \Yii::$app->request->baseUrl; ?>" style=" background-color: purple; color: white; text-decoration: none; padding: 10px;">
            <i class="icon-home icon-white"></i> Take Me Home </a>
        </div>
    </div>
    </div>
</div>