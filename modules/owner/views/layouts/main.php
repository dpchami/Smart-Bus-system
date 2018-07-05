<?php
/* @var $this \yii\web\View */
/* @var $content string */
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body style="padding: 20px">
<?php $this->beginBody();

$id = \Yii::$app->user->identity->id; ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'my-navbar navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => [
            'class' => 'navbar-nav navbar-right',
        ],
        'items' => [
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>
    <div class="row">
        <div class="col-xs-3">
            <div class="sidebar-nav" style="padding-top: 30px">
                <div class="well" style="padding: 8px 8px;">
                    <ul class="nav nav-list"> 
                      <li class="btn btn-block btn-primary" style="padding-left: 10px; font-size: 16px;">BUS OWNER PANEL</li>        
                      <li><a href="#"><i class="glyphicon glyphicon-bed" style="color:black"></i>&nbsp;&nbsp;My Buses</a></li>
                      <li><a href="#"><i class="glyphicon glyphicon-list-alt" style="color:black"></i>&nbsp;&nbsp;Wallets</a></li>
                      <li><?= Html::a('<i class="glyphicon glyphicon-user" style="color:black"></i>&nbsp;&nbsp;Profile',['/agent/default/profile', 'id' => $id])?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xs-9">
            <div style="padding-top: 30px">
                <?= Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ]) ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </div>      

    
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>