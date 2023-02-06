<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EnergySearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Energies';
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
        <h1 title="Camp Chippewa" style="font-family: 华文隶书;color:DarkSlateGray">俄乌冲突对能源格局的影响</h1>
        <p>The Impact of the Russian-Ukraine Conflict on the Energy Pattern</p>
    </div>
</header>





<!-- Body -->
<main>
    
    <div class="container">

        <!-- Info -->
        <section class="grid-row grid-row--center">
            <!-- Cabin -->
            <div class="grid-column span-half pt3 pb3 mobile-m order-1 reveal-on-scroll is-revealing" style="visibility: visible;">
                <div class="relative">
                    <img class="info-image relative z2" src="static3/img/energy.jpg" alt="Cabin">
                    <div class="pattern pattern--left-down absolute z1"></div>
                </div>
            </div>
            <div class="grid-column span-half pt3 pb3 mobile-m order-2">
                <p>从石油、天然气和煤矿的储量、产量和出口量来看，俄罗斯作为世界上重要的能源生产和出口国家，在全球能源市场中起到不可替代的作用。考虑到俄罗斯拥有的能源储量以及其他国家每年都从俄罗斯进口大量石油和天然气的现实情况，俄乌冲突将会在世界范围内造成一系列影响，包括但不限于能源价格的波动、能源格局的改变、碳市场的波动等。</p>
            </div>
            <!-- Teepees -->



            <?php foreach ($Energy as $ener) : ?>
            <div class="grid-column span-half pt3 pb3 mobile-m order-4">
                <h3><?= $ener->name ?></h3>
                <p><?= $ener->influence ?></p>
            </div>
            <div class="grid-column span-half pt3 pb3 mobile-m order-3 reveal-on-scroll is-revealing" style="visibility: visible;">
                <div class="relative">
                    <img class="info-image relative z2" src="static3/img/<?=$ener->picture?>" alt="Teepee">
                    <div class="pattern pattern--right-middle absolute z1"></div>
                </div>

                <div class="relative">
                    <img class="info-image relative z2" src="static3/img/<?=$ener->picture2?>" alt="Teepee">
                    <div class="pattern pattern--right-middle absolute z1"></div>
                </div>

                <div class="relative">
                    <img class="info-image relative z2" src="static3/img/<?=$ener->picture3?>" alt="Teepee">
                    <div class="pattern pattern--right-middle absolute z1"></div>
                </div>

            </div>

            <?php endforeach; ?>





        </section>

    </div>

    <!-- Pricing -->
    <section class="align--center pt2 pb3">
        <p class="h2">Russian-Ukraine</p>
        <p>energy</p>
    </section>

    
</main>



