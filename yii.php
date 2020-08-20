<?php

//Приложение для работы с консолью
require __DIR__. '/vendor/autoload.php';
require __DIR__ . '/vendor/yiisoft/yii2/Yii.php';
$config = require __DIR__ . '/config/console.php';
(new yii\console\Application($config))->run();