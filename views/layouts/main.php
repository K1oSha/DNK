<html>
<? use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
?>
<? $this->beginPage();?><!-- Тригер для бутстрапа -->

        <head>
            <link rel="stylesheet" href="/web/css/main.css">
            <link rel="stylesheet" href="/web/css/all.css">
            <style>
                .my-navbar {
                    background-color: #FFC90D;
                    border-color: #E7E1E7;

                }
            </style>
            <title>Finance</title>
            <? $this->head();?><!-- Тригер для бутстрапа -->
        </head>

        <body>
        <? $this->beginBody();?> <!-- Тригер для бутстрапа -->
        <?
           NavBar::begin([
               'brandLabel' => '<a href="/"> <img src="/images/DNK.jpg." width="210" height="70" id="img1"  alt="ДОМ НАУЧНОЙ КОЛЛАБОРАЦИИ"/></a>',
                    'brandUrl'=> Yii::$app->homeUrl,
               'brandOptions' => ['class' => 'd-flex align-items-start'],
                    'options'=>
                    [
                            'class' => '  my-navbar my-navbar  navbar-expand-lg',
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
                   'options'=>['class'=>'ml-auto'],
               'items'=>$menu
           ]);
            NavBar::end();
        ?>

        <div class="container" style="margin-top: 70px ">

        <?=$content?>

        </div>

        <? $this->endBody();?> <!-- Тригер для бутстрапа -->
        </body>


</html>
<? $this->endPage();?>  <!-- Тригер для бутстрапа -->

