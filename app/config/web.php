<?php

$params = require __DIR__ . '/params.php';

$config = [
    'id' => 'app',
    'basePath' => dirname(dirname(__DIR__)),
    'bootstrap' => ['log'],
    'apps' => ['article', 'user'],
    'layout' => false,
    'components' => [
        'db' => require __DIR__ . '/db.php',
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => require __DIR__ . '/urls.php'
        ],
        'request' => [
            'cookieValidationKey' => 'sC2a3J_QIzlPlik2Y0fbrHstoBctC-j1',
        ],
        'user' => [
            'identityClass' => 'user\models\User',
            'enableAutoLogin' => true,
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'view' => [
            'class' => 'yii\web\View',
            'renderers' => [
                'twig' => [
                    'class' => 'yii\twig\ViewRenderer',
                    'cachePath' => '@runtime/Twig/cache',
                    'options' => [
                        'auto_reload' => true,
                    ],
                    'globals' => [
                        'html' => '\yii\helpers\Html',
                        'url' => '\yii\helpers\Url',
                    ],
                ],
            ],
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
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
