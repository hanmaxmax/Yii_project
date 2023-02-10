<?php
/**
 * Team: NKU-HLPY
 * Coding By: 彭钰婷
 * 本文件用于新闻界面
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\News */

$this->title = 'Create News';
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
