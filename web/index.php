<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
require __DIR__ . '/../app/Application.php';
require __DIR__ . '/../app/function.php';

$config = require __DIR__ . '/../app/config/web.php';

$config = app\registerApps($config);

(new app\Application($config))->run();
