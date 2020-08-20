<?php

    define('YII_DEBUG',true);
    require __DIR__. '/../vendor/autoload.php'; //Когда появляется эта строчка появляется дебаг
   require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';
   require __DIR__ . '/../config/web.php';
    $config = require __DIR__ . '/../config/web.php';
    (new yii\web\Application($config))->run();