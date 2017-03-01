<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="treatment-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fio') ?>

    <?= $form->field($model, 'address') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'phone') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'birthday') ?>

    <?php // echo $form->field($model, 'status_person') ?>

    <?php // echo $form->field($model, 'status_treatment') ?>

    <?php // echo $form->field($model, 'businessman') ?>

    <?php // echo $form->field($model, 'businessman_type') ?>

    <?php // echo $form->field($model, 'text') ?>

    <?php // echo $form->field($model, 'file') ?>

    <?php // echo $form->field($model, 'answer') ?>

    <?php // echo $form->field($model, 'code') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'ip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
