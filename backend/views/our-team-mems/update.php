<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OurTeamMems */

$this->title = 'Update Our Team Mems: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Our Team Mems', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->num_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="our-team-mems-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
