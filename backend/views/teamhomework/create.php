<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Teamhomework */

$this->title = 'Create Teamhomework';
$this->params['breadcrumbs'][] = ['label' => 'Teamhomeworks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="teamhomework-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
