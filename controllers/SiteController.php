<?php

namespace app\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
                'view' => '@app/views/site/myerror.php'
            ],
        ];
    }
    public function actionError()
    {

//        if (($exception->statusCode) == 404){
//            $message="Такой страницы не существует.";
//        }
//        else{
//            $message="У вас не хватает прав доступа.";
//        }
        return $this->render('myerror');
    }
}