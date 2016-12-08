<?php

return [
    'id' => 'blog',
    'name' => 'blog',
    'components' => [
        'request' => [
            'class' => 'yii\web\Request',
            'cookieValidationKey' => 'sC2a3J_QIzlPlik2Y0fbrHstoBctC-j1',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
//        'user' => [
//            'class' => 'app\models\User',
//            'identityClass' => 'app\models\User',
//            'enableAutoLogin' => true,
//        ],
//        'errorHandler' => [
//            'class' => '',
//            'errorAction' => 'site/error',
//        ],
//        'log' => [
//            'class' => '',
//            'traceLevel' => YII_DEBUG ? 3 : 0,
//            'targets' => [
//                [
//                    'class' => 'yii\log\FileTarget',
//                    'levels' => ['error', 'warning'],
//                ],
//            ],
//        ],
    ],
];