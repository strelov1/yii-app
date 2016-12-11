<?php

namespace app;

class Application extends \yii\web\Application
{

    public function reconfigure($config)
    {
        \Yii::configure($this, $config);
    }
}