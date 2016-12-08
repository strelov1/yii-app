<?php

namespace blog\controllers;

use yii\web\Controller;

/**
 * Default controller for the `blog` module
 */
class DefaultController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        var_dump(\Yii::$app->name);
        die();
//        return $this->render('index');
    }
}
