<?php

$config = [
    'id' => 'console',
    'basePath' => dirname(dirname(__DIR__)),
    'bootstrap' => ['log'],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require __DIR__ . '/db.php',
    ],
    'params' => require __DIR__ . '/params.php',
];

if (YII_ENV_DEV) {
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
    $config['bootstrap'][] = 'add';
    $config['modules']['add'] = [
        'class' => 'strelov1\add\Module',
    ];
}

return $config;