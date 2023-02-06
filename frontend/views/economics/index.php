<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EconomicsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Economics';
$this->params['breadcrumbs'][] = $this->title;
?>




<head>

    <!-- Meta -->
    <meta charset="utf-8">


    <!-- The compiled CSS file -->
    <link rel="stylesheet" href="static3/css/production.css">

</head>



<body class="has-animations" style="height: 100%;">


<!-- Header -->
<header class="pt2 pb1 align--center">
    <div class="container">
        <h1 title="Camp Chippewa" style="font-family: 华文行楷;color:MidnightBlue">俄乌冲突对经济的影响</h1>
        <p>the Impact of the Russian-Ukraine Conflict on the Economy</p>
    </div>
</header>





<!-- Body -->
<main>

    <div class="container">

        <!-- Info -->
        <section class="grid-row grid-row--center">
            <!-- Cabin -->
            <div class="grid-column span-half pt3 pb3 mobile-m order-8">
                <p>这场冲突不仅是俄乌间的军事冲突，而且是俄罗斯与美国及其盟友之间的经济战。在战事和经济制裁等连锁反应下，世界股市、汇市、原油、粮食和有色金属期货市场等随之反复震荡。</p>
            </div>
            <div class="grid-column span-half pt3 pb3 mobile-m order-7 reveal-on-scroll is-revealing" style="visibility: visible;">
                <div class="relative">
                    <img class="info-image relative z2" src="static3/img/economy.png" alt="Archery">
                    <div class="pattern pattern--right-down absolute z1"></div>
                </div>
            </div>



            <?php foreach ($Economics as $econ) : ?>
            <div class="grid-column span-half pt3 pb3 mobile-m order-5 reveal-on-scroll is-revealing" style="visibility: visible;">
                <div class="relative">
                    <img class="info-image relative z2" src="static3/img/<?=$econ->picture1?>" alt="Fishing">
                    <div class="pattern pattern--left-up absolute z1"></div>
                </div>
                <div class="relative">
                    <img class="info-image relative z2" src="static3/img/<?=$econ->picture2?>" alt="Fishing">
                    <div class="pattern pattern--left-up absolute z1"></div>
                </div>
            </div>
            <div class="grid-column span-half pt3 pb3 mobile-m order-6">
                <h3><?= $econ->name ?></h3>
                <p><?= $econ->influence ?></p>
            </div>
            <?php endforeach; ?>






  
        </section>

    </div>

    <!-- Pricing -->
    <section class="align--center pt2 pb3">
        <p class="h2">Russian-Ukraine</p>
        <p>economics</p>
    </section>

    
</main>



