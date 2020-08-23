<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<style>

    .has-error
    {
        color: #a94442;

    }
    .has-error .form-control {
        border-color: #a94442;
        -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    }
    .help-block
    {
        color: #a94442;
    }

</style>
<div class="panel panel-danger">
    <div class="panel-heading">
        <h1>Регистрация</h1>
    </div>
    <div class="panel-body">

        <?php $form = ActiveForm::begin(['id'=>'user-join-form']);?>
        <?= $form->field($userJoinForm,'name') ?>
        <?= $form->field($userJoinForm,'email') ?>
        <?= $form->field($userJoinForm,'password')->passwordInput() ?>
        <?= $form->field($userJoinForm,'password2')->passwordInput() ?>

        <?= Html::submitButton('Зарегистрироваться',['class'=>'btn btn-danger']) ?>
       <? ActiveForm::end(); ?>

    </div>
</div>

