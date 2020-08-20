<html>
<? use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
?>
<? $this->beginPage();?><!--  Тригер для бутстрапа -->

        <head>
            <style>
                .my-navbar {
                    background-color: #FFC90D;
                    border-color: #E7E1E7;
                }
            </style>
            <title>Finance</title>
            <? $this->head();?><!--  Тригер для бутстрапа -->
        </head>

        <body>
        <? $this->beginBody();?><!--  Тригер для бутстрапа -->
        <?
           NavBar::begin([
               'headerContent' => '<a href="/"> <img src="/images/DNK.jpg." width="210" height="70" id="img1"  alt="ДОМ НАУЧНОЙ КОЛЛАБОРАЦИИ"/></a>',
                    'brandUrl'=> Yii::$app->homeUrl,
                    'options'=>
                    [

                            'class' => 'my-navbar  navbar-fixed-top'
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

