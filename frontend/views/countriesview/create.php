<?php
/**
 * Team: NKU-HLPY
 * Coding By: 韩佳迅
 * 本文件用于各国观点界面
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Countriesview */

$this->title = 'Create Countriesview';
$this->params['breadcrumbs'][] = ['label' => 'Countriesviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="countriesview-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
