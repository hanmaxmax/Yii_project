<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Economics */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="economics-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'influence')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'picture1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'picture2')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
