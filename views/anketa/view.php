<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Anketa */

$this->params['breadcrumbs'][] = ['label' => 'Anketas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="anketa-view">

    <h1><?= Html::encode($this->title) ?></h1>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'fio',
            'age',
            'class',
            'ucheb',
            ['attribute'=>'interes','value'=>function($model){
                $output = '';
                $interesconsts = \app\models\Anketa::getInteressList();
                foreach (str_split($model->interes) as $interes)
                {
                    $output .= $interesconsts[$interes] . ',';
                }
                return $output;
            }],
            ['attribute'=>'dnk_dir','value'=>function($model){return $model->getDNKName();}],
            'dnk_prog',
            'phone',
            'email:email',
            'fio_parent',
            'phone_parent',
            'personal_data',
        ],
    ]) ?>

    <div class="form-group">
               <span class="btn float-left"><?= Html::a( 'Назад', ('/anketa/index'),
                       ['class'=>'btn btn-danger']) ?></span>

    </div>
</div>
