<?php

namespace app\controllers;


use yii\web\Controller;

class InformationsController extends Controller
{
    public function actionTeachers()
    {
        return $this->render('teachers');
    }
}