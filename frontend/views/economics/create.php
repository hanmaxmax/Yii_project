<?php
/**
 * Team: NKU-HLPY
 * Coding By: 韩佳迅
 * 本文件用于经济影响界面
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Economics */

$this->title = 'Create Economics';
$this->params['breadcrumbs'][] = ['label' => 'Economics', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="economics-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
