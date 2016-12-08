<?php

namespace blog\controllers;

use app\models\User;
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
        //$appPath = \Yii::getAlias('@app');
        $user = new User();
        var_dump($user);
        //return $this->render('index.twig');
    }
}
