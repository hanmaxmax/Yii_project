<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\InternationalrelationSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Internationalrelations';
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
    <h1 title="Camp Chippewa" style="font-family: 华文新魏;color:DarkSlateGray">俄乌冲突对国际关系的影响</h1>
    <p>The Impact of the Russian-Ukraine Conflict on International Relation</p>
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
                <img class="info-image relative z2" src="static3/img/ir0.jpg" alt="Cabin">
                <div class="pattern pattern--left-down absolute z1"></div>
            </div>
        </div>
        <div class="grid-column span-half pt3 pb3 mobile-m order-2">
            <p>俄乌战争对国际关系格局产生了巨大影响。尤其是，在俄罗斯与西方国家之间存在着巨大分歧的情况下，俄欧关系却一直保持相对稳定，并没有出现严重冲突或危机。这是因为两国拥有良好的政治互信基础和经济互补性。俄罗斯和欧洲之间的战争已经持续了几个世纪，直到冷战结束才有所缓和，近年来，随着能源合作的深化，双方的关系进一步缓和，但俄乌战争和乌克兰战争的爆发中断了这一过程，两国关系可能重新滑入冷战时期。</p>
        </div>
        <!-- Teepees -->



        <?php foreach ($Internationalrelation as $ir) : ?>
        <div class="grid-column span-half pt3 pb3 mobile-m order-4">
            <h3><?= $ir->name ?></h3>
            <p><?= $ir->influence ?></p>
        </div>
        <div class="grid-column span-half pt3 pb3 mobile-m order-3 reveal-on-scroll is-revealing" style="visibility: visible;">
            <div class="relative">
                <img class="info-image relative z2" src="static3/img/<?=$ir->picture?>" alt="Teepee">
                <div class="pattern pattern--right-middle absolute z1"></div>
            </div>

            <div class="relative">
                <img class="info-image relative z2" src="static3/img/<?=$ir->picture2?>" alt="Teepee">
                <div class="pattern pattern--right-middle absolute z1"></div>
            </div>

            <div class="relative">
                <img class="info-image relative z2" src="static3/img/<?=$ir->picture3?>" alt="Teepee">
                <div class="pattern pattern--right-middle absolute z1"></div>
            </div>

        </div>

        <?php endforeach; ?>





    </section>

</div>

<!-- Pricing -->
<section class="align--center pt2 pb3">
    <p class="h2">Russian-Ukraine</p>
    <p>International Relation</p>
    <p>来源：https://zhuanlan.zhihu.com/p/474506154</p>
</section>


<footer>
		<div class="instagram-posts">
			<h3 class="tittle cen foot">We yearn for world peace</h3>
			<div class="row footer-top">
				<!-- instagram posts -->
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="https://search.bilibili.com/all?keyword=%E4%BF%84%E4%B9%8C%E6%88%98%E4%BA%89&from_source=webtop_search&spm_id_from=333.1007&search_source=5">
						<img src="statics/images/f1.png" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="https://www.zhihu.com/search?type=content&q=%E4%BF%84%E4%B9%8C%E6%88%98%E4%BA%89">
					<img src="statics/images/f2.png" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="https://sou.chinanews.com.cn/search.do?q=%E4%BF%84%E4%B9%8C%E6%88%98%E4%BA%89">
					<img src="statics/images/f3.png" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="https://www.youtube.com/results?search_query=%E4%BF%84%E4%B9%8C%E6%88%98%E4%BA%89">
					<img src="statics/images/f4.png" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="https://www.bbc.co.uk/search?q=Russian-Uzbekistan+War&d=HOMEPAGE_GNL">
					<img src="statics/images/f5.png" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="http://search.people.cn/s?keyword=%E4%BF%84%E4%B9%8C%E6%88%98%E4%BA%89&st=0&_=1675843392757">
					<img src="statics/images/f6.png" class="img-fluid" alt="" />
					</a>
				</div>
			</div>

			<div class="col-md-3 agileinfo_footer_grid">
			<h3><p style="color:white">Introduction</p></h3>
				<p >本网站以呼吁和平为宗旨，通过介绍饿乌战争相关信息，提供战争最新情况，集中各网站消息，从广度和深度上为用户提供更好的使用体验。</span></p>
				<div class="w3ls-social-icons-2">
				<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
				<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
				<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
				</div>
			</div>


			<div class="col-md-3 agileinfo_footer_grid f3">
				<h3 ><p style="color:white">导航</p></h3>					
				<div class="nav-w3-l">
				<ul>
					<li><a href="index.php" >首页</a></li>
					<li><a href="../../backend/web" >登录后台</a></li>
					<li><a href="index.php?r=site/about" >关于团队</a></li>
					<li><a href="index.php?r=news" >战争新闻</a></li>
					<li><a href="index.php?r=timeline" >战争时间线</a></li>
					<li><a href="index.php?r=energy" >影响-能源</a></li>
					<li><a href="index.php?r=economics" >影响-经济</a></li>
					<li><a href="index.php?r=internationalrelation" >影响-国际关系</a></li>
					<li><a href="index.php?r=comment" >网友评论</a></li>

				</ul>
				</div>
			</div>



			<div class="col-md-3 agileinfo_footer_grid f3">
				<h3 ><p style="color:white">相关网站</p></h3>					
				<div class="nav-w3-l">
				<ul>
					<li><a href="http://www.people.com.cn/" >人民网</a></li>
					<li><a href="https://www.81.cn/index.htm" >中国军网</a></li>
					<li><a href="https://www.gmw.cn/" >光明网</a></li>
					<li><a href="https://www.youtube.com" >youtube</a></li>
					<li><a href="https://www.bbc.com/" >BBC</a></li>
					<li><a href="https://www.bilibili.com/" >bilibili</a></li>
					<li><a href="https://www.zhihu.com/" >知乎</a></li>
				</ul>
				</div>
			</div>

			<div class="col-md-3 agileinfo_footer_grid">
			<h3><p style="color:white">We are</p></h3>
				<p>互联网数据库课程NKU-HLPY队伍，一群热爱coding的南开大三er~</p>
				<div class="w3ls-social-icons-2">
				<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
				<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
				<a class="pinterest" href="#"><i class="fa fa-google-plus"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
				<a class="tumblr" href="#"><i class="fa fa-tumblr"></i></a>
				</div>
			</div>

			<div class="footer-bottom-w3layouts-agileinfo">
				<!-- //subscribe -->
				<!-- footer -->
				<div class="footer-cpy text-center">
					<div class="footer-social">
						<div class="copyrighttop">
							<ul>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-facebook-f"></i>
									</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-google-plus-g"></i>
									</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-pinterest-p"></i>
									</a>
								</li>
							</ul>

						</div>
					</div>
					<div class="copyrightbottom-w3ls-agile">
						<p>Copyright &copy; 2022. NKU-HLPY All rights reserved.<a target="_blank" href="https://github.com/hanmaxmax/Yii_project">源代码Github链接</a></p>

					</div>
				</div>
				<!-- //footer -->
			</div>
		</div>
</footer>


</main>

