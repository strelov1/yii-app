<?php

namespace blog;

/**
 * blog module definition class
 */
class Blog extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'blog\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
        $config = require __DIR__ . '/config/config.php';
        \Yii::$app->reconfigure($config);
    }

}
