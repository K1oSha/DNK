<html>
<? use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;
?>
<? $this->beginPage();?><!-- Тригер для бутстрапа -->

        <head>
            <link rel="stylesheet" href="/css/main.css">
            <link rel="stylesheet" href="/css/all.css">
            <style>
                .my-navbar {
                    background-color: #FFC90D;
                    border-color: #E7E1E7;

                }
            </style>
            <link rel="shortcut icon" href="/images/DNK.jpg.">
            <title>Дом научной коллаборации</title>
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
                            'class' => 'my-navbar  navbar-expand-lg navbar-dark',
                    ],
           ]);

           if (Yii::$app->user->isGuest)
           $menu =[
               ['label'=>'Преподаватели','url'=>['/informations/teachers']],
               ['label'=>'Войти','url'=>['/user/login']],
               ['label'=>'Регистрация','url'=>['/user/join']],
           ];
           else
               $menu =[
                   ['label'=>Yii::$app->user->getIdentity()->name],
                   ['label'=>'Преподаватели','url'=>['/informations/teachers']],
                   ['label'=>'Анкеты','url'=>['/anketa/index']],
                   ['label'=>'Регистрация','url'=>['/user/join']],
                   ['label'=>'Выйти','url'=>['/user/logout']],
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

