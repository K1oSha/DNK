<?php

   $config =[
    'id'=>'finance',
    'basePath'=> realpath(__DIR__.'/../'),
       'bootstrap'=>['debug','gii'],
      'components'=>[
        'urlManager'=>[
          'enablePrettyUrl'=>true,
            'showScriptName'=>false,
        ],
          'request'=>[
              'cookieValidationKey' => 'vsemprivetktoetochitaet',
          ],
          'db'=> require(__DIR__.'/db.php'),
          'user'=>[
              'identityClass' =>'app\models\UserIdentity',
              'enableAutoLogin' => true,
          ],
      ],
       'modules'=>[
           'debug'=>'yii\debug\Module',
           'gii' => 'yii\gii\Module',       ],
        'aliases' => [
            '@bower' => '@vendor/bower-asset',
            '@npm'   => '@vendor/npm-asset',
          ],
        ];
        

   return $config;