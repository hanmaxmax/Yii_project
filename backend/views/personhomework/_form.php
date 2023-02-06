<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Personhomework */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="personhomework-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'num_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
