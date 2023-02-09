<?php
/**
 * Team: NKU-HLPY
 * Coding By: 林语盈
 * 本文件用于Internationalrelation界面
 */
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Internationalrelation */

$this->title = 'Create Internationalrelation';
$this->params['breadcrumbs'][] = ['label' => 'Internationalrelations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="internationalrelation-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
