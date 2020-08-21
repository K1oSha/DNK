<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cow */
/* @var $form yii\widgets\ActiveForm */
?>
<!-- // $this->createTable('{{%anketa}}', [
    //     'id' => $this->primaryKey(),
    //     'fio' => $this->string(),
    //     'age' => $this->integer(),
    //     'class' => $this->integer(),
    //     'ucheb' => $this->string(),
    //     'interes' => $this->string(),
    //     'dnk_dir' => $this->string(),
    //     'dnk_prog' => $this->string(),
    //     'phone' => $this->string(),
    //     'email' => $this->string(),
    //     'fio_parent' => $this->string(),
    //     'phone_parent' => $this->string(),
    //     'personal_data' => $this->integer(), -->
<div class="cow-form">
    <?php $form = ActiveForm::begin(); ?>
    <?= $form->field($model, 'fio')->textInput() ?>
    <?= $form->field($model, 'age')->textInput() ?>
    <?= $form->field($model, 'class')->textInput() ?>
    <?= $form->field($model, 'ucheb')->textInput() ?>
    <?= $form->field($model, 'interes')->textInput() ?>
    <?= $form->field($model, 'dnk_dir')->textInput() ?>
    <?= $form->field($model, 'dnk_prog')->textInput() ?>
    <?= $form->field($model, 'phone')->textInput() ?>
    <?= $form->field($model, 'email')->textInput() ?>
    <?= $form->field($model, 'fio_parent')->textInput() ?>
    <?= $form->field($model, 'phone_parent')->textInput() ?>
    <?= $form->field($model, 'personal_data')->checkbox() ?>
    <div class="form-group">
                <span class="btn pull-left"><?= Html::a('Назад', ('/cow/index'),
                        ['class'=>'btn btn-danger']) ?></span>
        <span class="btn pull-right"><?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </span>
    </div>

    <?php ActiveForm::end(); ?>

</div>
