<?php $cnt4loop = 1; ?>
<!DOCTYPE html> 
<html lang=""> 
    <head> 
        <meta charset=utf-8> 
        <title>山东辱母杀人案</title> 
        <meta http-equiv=X-UA-Compatible content="IE=edge"> 
        <meta name=viewport content="width=device-width,initial-scale=1"> 
        <meta name=description content="最新进展：于欢曾应聘外卖员被拒"> 
        <link rel="shortcut icon" href=//www.baidu.com/favicon.ico type=image/x-icon> 
        <link rel=dns-prefetch href=//psstatic.cdn.bcebos.com> 
        <script src=//code.bdstatic.com/npm/spy-client@2.1.8/dist/spy-head.min.js type=text/javascript>
        </script> <link href=https://fyb-pc-static.cdn.bcebos.com/timeline/static/css/pc.106abc09.css rel=stylesheet>
    </head> 
    
    <body> 
        <div id=app>
            <div class="page" id="1494">                    
                    <div class="container">
                        <h2 class="title">俄乌战争新闻时间线</h2>
                        <?php $cnt4loop=1; ?>
                        <?php $latestdate;?>
                        <?php foreach ($timelines as $timeline) : ?>
                            <?php if($cnt4loop++ > 1)  $latestdate = $timeline->date; ?>
                        <?php endforeach; ?>
                        <p class="create-time">更新至<?= $latestdate?></p>
                        <div class="realtime-content c-bg-color-white">
                            <div class="btn-order">
                                <div class="btn-order-wrap">
                                    <img class="order-icon" src="https://psstatic.cdn.bcebos.com/basics/rel/timeline/icon_order_1650424207000.svg">
                                    <span class="order-text">时间倒序</span>
                                </div>
                            </div>
                            <div class="infinite-list-container"> 
                                <div class="list">
                                    <?php $cnt4loop = 1; ?>
                                    <?php foreach ($timelines as $timeline) : ?>
                                        <?php if($cnt4loop++ > 1) break; ?>
                                        <div class="item"> 
                                            <div class="top-wrap c-color-gray"> 
                                                <span class="dot"></span> 
                                                <span class="time c-gap-left-small"><?= $timeline->date ?></span> 
                                                <span class="label pink c-gap-left-small f-l">新</span> 
                                            </div> 
                                            <div class="c-gap-left-large c-gap-inner-top-middle content "> 
                                                <div>  
                                                    <div class="c-text c-font-medium"> 
                                                        <a class="content-link  c-line-clamp1" target="_blank" href="https://baijiahao.baidu.com/s?id=1756898784707977934&amp;wfr=spider&amp;for=pc"> 
                                                            <!--s-slot--> <?= $timeline->name ?> <!--/s-slot--> 
                                                        </a> 
                                                    </div> 
                                                </div>  
                                            </div> 
                                        </div>
                                    <?php endforeach; ?>
                                    <?php $cnt4loop = 1; ?>
                                    <?php foreach ($timelines as $timeline) : ?>
                                        <?php if($cnt4loop++ < 2) continue; ?>
                                        <div class="item"> 
                                            <div class="top-wrap c-color-gray"> 
                                                <span class="dot"></span> 
                                                <span class="time c-gap-left-small"><?= $timeline->date ?></span>  
                                            </div> 
                                            <div class="c-gap-left-large c-gap-inner-top-middle content pic-content"> 
                                                <div class="img-content"> 
                                                    <a class="img c-gap-right pst-rlt" style="background-image:url(https://gips1.baidu.com/it/u=904094499,2603440950&amp;fm=3028&amp;app=3028&amp;size=w931&amp;q=89&amp;n=0&amp;f=PNG&amp;fmt=auto&amp;maxorilen2heic=2000000)" target="_blank" href="https://baijiahao.baidu.com/s?id=1735880504576420900&amp;wfr=spider&amp;for=pc">    </a> 
                                                    <div class="c-text c-font-medium"> 
                                                        <a class="content-link c-line-clamp3 " target="_blank" href="https://baijiahao.baidu.com/s?id=1735880504576420900&amp;wfr=spider&amp;for=pc"> 
                                                        <!--s-slot--> <?= $timeline->name ?> <!--/s-slot--> </a> 
                                                    </div> 
                                                </div>  
                                            </div> 
                                        </div>
                                    <?php endforeach; ?>
                                </div> 
                                <div class="placeholder"></div>  
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
            <script src=//code.bdstatic.com/npm/spy-client@2.1.8/dist/spy-client.min.js type=text/javascript></script> 
            <script type=text/javascript src=https://fyb-pc-static.cdn.bcebos.com/timeline/static/js/pc.7991a6a6.js></script>
    </body> 
</html> 