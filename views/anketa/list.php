
             <?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ActiveForm;
use yii\widgets\Pjax;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CowSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Надои';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cow-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php  if(yii::$app->session->hasFlash('message')): ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo yii::$app->session->getFlash('message');?>
        </div>
    <?php endif;?>
    <div >
    <p>
    </div>

    </p>

<!-- $this->createTable('{{%anketa}}', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(),
            'age' => $this->integer(),
            'class' => $this->integer(),
            'ucheb' => $this->string(),
            'interes' => $this->string(),
            'dnk_dir' => $this->string(),
            'dnk_prog' => $this->string(),
            'phone' => $this->string(),
            'email' => $this->string(),
            'fio_parent' => $this->string(),
            'phone_parent' => $this->string(),
            'personal_data' => $this->integer(),
             -->

    <?php Pjax::begin(['id'=>'pjax-container']); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
       'rowOptions' => ['style' => 'text-align:center;'],
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'id',
            'fio',
            'age',
            'class',
            'ucheb' ,
            'interes',
            'dnk_dir' ,
            'dnk_prog',
            'phone',
            'email',
            'fio_parent',
            'phone_parent',
            'personal_data',

            ['class' => 'yii\grid\ActionColumn',

                'template' => ' {update} &nbsp&nbsp {delete} ',
                'buttons' => [
                    'delete' => function ($url, $model, $key) {
                    $iconName = "glyphicon glyphicon-trash";
                    //Текст в title ссылки, что виден при наведении
                    $title = \Yii::t('yii', 'Delete');
                    $id = 'info-'.$key;
                    $options = [
                        'title' => $title,
                        'aria-label' => $title,
                        'data-pjax' => '1',
                        'id' => $id,
                    ];                    
                    //Для стилизации используем библиотеку иконок
                    $icon = Html::tag('span', '', ['class' => "glyphicon glyphicon-$iconName"]);
                    $urlforjs = Url::to(['cow/delete', 'id' => $model->id], true);
                    //Обработка клика на кнопку
                    $js = <<<JS
                    $("#{$id}").on("click",function(event){ 
                       var r=confirm("Вы уверены что хотите удалить?!");
                       if(r==true ){ var Url="$urlforjs";
                            $.ajax({
                                url: Url,
                                type:"POST"
                            })
                            $.pjax.reload({container: '#pjax-container'})}
                        }
                    );
JS;


                    //Регистрируем скрипты
                    $this->registerJs($js, \yii\web\View::POS_READY, $id);

                    return Html::button($icon,$options);
                    },
                    ],
                ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>
 

</div>