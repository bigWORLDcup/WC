<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WcGambleRecord */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="wc-gamble-record-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gcountry')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gmatch_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
