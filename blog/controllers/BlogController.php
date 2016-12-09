<?php

namespace blog\controllers;

use yii\web\Controller;

/**
 * Default controller for the `blog` module
 */
class BlogController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
//        $user = \Yii::$app->user;
//        var_dump($user);
        return $this->render('index.twig');
    }
}
