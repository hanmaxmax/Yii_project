<?php

use yii\helpers\Html;

/**
 * Team: NKU-HLPY
 * Coding By: 姚鑫
 * 本文件用于网友评论界面
 */

$this->title = 'Create Comment';
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
