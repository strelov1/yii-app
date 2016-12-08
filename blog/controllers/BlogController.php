<?php

namespace blog\controllers;

use blog\models\User;
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
        $user = new User;
        var_dump($user); die();
        return $this->render('index.twig');
    }
}
