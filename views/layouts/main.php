<html>
<? use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>
<? $this->beginPage();?><!--  Тригер для бутстрапа -->

        <head>
            <title>Finance</title>
            <? $this->head();?><!--  Тригер для бутстрапа -->
        </head>

        <body>
        <? $this->beginBody();?><!--  Тригер для бутстрапа -->
        <?
           NavBar::begin([
                   'brandLabel'=>'Finance',
                    'brandUrl'=> Yii::$app->homeUrl,
                    'options'=>
                    [
                            'class' => 'navbar-default navbar-fixed-top'
                    ],
           ]);

           if (Yii::$app->user->isGuest)
           $menu =[
             ['label'=>'Join','url'=>['/user/join']],
               ['label'=>'Log in','url'=>['/user/login']],
           ];
           else
               $menu =[
                   ['label'=>Yii::$app->user->getIdentity()->name],
                   ['label'=>'Logout','url'=>['/user/logout']],
               ];
           echo Nav::widget([
                   'options'=>['class'=>'navbar-nav navbar-right'],
               'items'=>$menu
           ]);
            NavBar::end();
        ?>

        <div class="container" style="margin-top: 60px ">

        <?=$content?>

        </div>

        <? $this->endBody();?><!--  Тригер для бутстрапа -->
        </body>


</html>
<? $this->endPage();?><!--  Тригер для бутстрапа -->

