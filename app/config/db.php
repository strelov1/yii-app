<?php

return [
    'class' => 'yii\db\Connection',
    'dsn' => 'sqlite:' . dirname(dirname(__DIR__)) . '/sqlite.db',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
];