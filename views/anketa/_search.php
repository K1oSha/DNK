<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AnketaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="anketa-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fio') ?>

    <?= $form->field($model, 'age') ?>

    <?= $form->field($model, 'class') ?>

    <?= $form->field($model, 'ucheb') ?>

    <?php // echo $form->field($model, 'interes') ?>

    <?php // echo $form->field($model, 'dnk_dir') ?>

    <?php // echo $form->field($model, 'dnk_prog') ?>

    <?php // echo $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'fio_parent') ?>

    <?php // echo $form->field($model, 'phone_parent') ?>

    <?php // echo $form->field($model, 'personal_data') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
