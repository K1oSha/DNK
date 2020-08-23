<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm; ?>
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
<div class="panel panel-info">
    <div class="panel-heading">
        <h1>Войти</h1>
    </div>
    <div class="panel-body">
        <?php $form = ActiveForm::begin(['id'=>'user-login-form']);?>


        <?= $form->field($userLoginForm,'email') ?>
        <?= $form->field($userLoginForm,'password')->passwordInput() ?>
        <?= $form->field($userLoginForm,'remember')->checkbox() ?>
        <?= Html::submitButton('Войти',['class'=>'btn btn-primary']) ?>
        <? ActiveForm::end(); ?>
    </div>
</div>
