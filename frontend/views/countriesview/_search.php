<?php
/**
 * Team: NKU-HLPY
 * Coding By: 韩佳迅
 * 本文件用于各国观点界面
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CountriesviewSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="countriesview-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'country') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'view') ?>

    <?= $form->field($model, 'picture') ?>

    <?= $form->field($model, 'num_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
