<?php

$params = require __DIR__ . '/params.php';
$db = require __DIR__ . '/db.php';

$config = [
    'id' => 'basic',
    'name' => 'Smart Bus System',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'modules' => [
        'agent' => [
            'class' => 'app\modules\agent\Module',
        ],
        'owner' => [
            'class' => 'app\modules\owner\Module',
        ],
        'user' => [
                'class' => Da\User\Module::class,
                'allowUnconfirmedEmailLogin' => true,
                'allowPasswordRecovery' => false,
                'enableRegistration' => false,
                'administrators' => [
                    'walter',
                ],
            ]
    ],
    'components' => [
        'authManager'  => [
            'class'        => 'yii\rbac\DbManager',
       ],
       'assetManager' => [
            'bundles' => [
                'dmstr\web\AdminLteAsset' => [
                    'skin' => 'skin-purple',
                ],
            ],
        ],
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'k2aaiquNPDBXVEwl7Q5dahwE8APbd3Jv',
        ],
        'user' => [
            'identityClass' => 'Da\User\Model\User',
            'loginUrl' => ['/user/security/login'],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
    ],
    'params' => $params,

     //force login
    'as beforeRequest' => [
        'class' => 'yii\filters\AccessControl',
        'except'=>[
           // 'v1/*',
          //  'mobile/*'
        ],
        'rules' => [
            [
                'actions' => ['login', 'error'],
                'allow' => true,
            ],
            [

                'allow' => true,
                'roles' => ['@'],
            ],
        ],
    ],
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
