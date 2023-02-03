<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\OurTeamMems */

$this->title = 'Create Our Team Mems';
$this->params['breadcrumbs'][] = ['label' => 'Our Team Mems', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="our-team-mems-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
