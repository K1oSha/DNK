<?php

use yii\bootstrap4;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\AnketaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Заявки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="anketa-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать заявку', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'formatter' => ['class' => 'yii\i18n\Formatter','nullDisplay' =>  '(Не задано)'],
        'summary' =>"Показаны записи {begin} - {end} из {totalCount} ",
        'emptyText' => 'Записи не найдены',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            'fio',
            'age',
            'class',
            'ucheb',
            ['attribute'=>'interes','value'=>'InteressName','filter'=> \app\models\Anketa::getInteressList()],
            ['attribute'=>'dnk_dir','value'=>'DNKName','filter'=> \app\models\Anketa::getDNKList()],
            //'dnk_prog',
            //'phone',
            //'email:email',
            //'fio_parent',
            //'phone_parent',
            //'personal_data',

            ['class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}'],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
