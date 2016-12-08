<?php

$config = [
    'id' => 'console',
    'basePath' => dirname(__DIR__),
    'aliases' => require __DIR__ . '/aliases.php',
    'bootstrap' => [
        'log',
    ],
    //modules' => require __DIR__ . '/modules.php',
    'components' => [
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
}

return $config;
