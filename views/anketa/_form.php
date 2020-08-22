<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Anketa */
/* @var $form yii\widgets\ActiveForm */
?>

<style>

.has-error
{
    color: #a94442;

}
.help-block
{
    color: #a94442;
}

</style>

<div class="anketa-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'fio')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'age')->textInput() ?>

    <?= $form->field($model, 'class')->textInput() ?>

    <?= $form->field($model, 'ucheb')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'interes')->dropDownList(\app\models\Anketa::getInteressList()) ?>

    <?= $form->field($model, 'dnk_dir')->dropDownList(\app\models\Anketa::getDNKList()) ?>

    <?= $form->field($model, 'dnk_prog')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fio_parent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_parent')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'personal_data')->checkbox() ?>

    <div class="form-group">
               <span class="btn float-left"><?= Html::a( 'Назад', ('/'),
                       ['class'=>'btn btn-danger']) ?></span>
        <span class="btn float-right"><?= Html::submitButton('Подать заявку', ['class' => 'btn btn-success ']) ?>
            </span>
    </div>

    <?php ActiveForm::end(); ?>

</div>
