<?php

   $config =[
    'id'=>'finance',
    'basePath'=> realpath(__DIR__.'/../'),
       'bootstrap'=>['debug'],
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
       ],
        ];

   return $config;