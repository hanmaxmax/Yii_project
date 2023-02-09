<?php
/**
 * Team: NKU-HLPY
 * Coding By: 林语盈
 * 本文件用于Internationalrelation界面
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Internationalrelation */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="internationalrelation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'influence')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'picture')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture3')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
