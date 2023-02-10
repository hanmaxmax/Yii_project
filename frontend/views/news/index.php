<?php
/**
 * Team: NKU-HLPY
 * Coding By: 彭钰婷
 * 本文件用于新闻界面
 */
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
$cnt4image = 1;
$cnt4color = 1;
$cnt4loop = 1;
$cnt4label = 1;
?>
<!-- BEGIN: .cover -->
<!-- <?php
  header('content-type:image/jpg;');
  echo "<img alt='aaa' src='static/image/news1.jpg' width='px' height='400px'/>";
?> -->

<!-- <body background="static/image/news1.jpg" style=" background-repeat:no-repeat ;background-size:100% 10%; background-attachment: fixed;">
	。。。。。。
</body> -->

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>WebMag HTML Template</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet"> 

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- section -->
		<div class="section">
		
		
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">	
				<?php $cnt4loop = 1;?>
				<?php foreach ($news as $new) : ?>
					<?php
						if($cnt4loop++ > 2){
							break;
						}
						if($cnt4image > 14) $cnt4image = 1;
					?>
					<!-- post -->
					<div class="col-md-6">
						<div class="post post-thumb">
							<a class="post-img" href="<?= $new->url ?>"><img src="static/image/news/news0<?=$cnt4image++?>.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<span class="post-date"><?= $new->date ?></span>
								</div>
								<h3 class="post-title"><a href="<?= $new->url ?>"><?= $new->name ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php endforeach; ?>
				</div>
				<!-- /row -->
				
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="section-title">
							<h2>Recent Posts</h2>
						</div>
					</div>
					<?php $cnt4loop = 1; ?>
					<?php foreach ($news as $new) : ?>
						<?php
							$cnt4loop++;
							if($cnt4loop < 3){
								continue;
							}
							if($cnt4loop > 8){
								break;
							}
						?>
					<!-- post -->
					<div class="col-md-4">
						<div class="post">
							<a class="post-img" href="<?= $new->url ?>"><img src="static/image/news/news0<?=$cnt4image++?>.jpg" alt=""></a>
							<div class="post-body">
								<div class="post-meta">
									<?php
										if($cnt4color > 4) {$cnt4color=1;}
									?>
									<a class="post-category cat-<?=$cnt4color++?>" href="<?= $new->url ?>">news<?= $cnt4label++ ?></a>
									<span class="post-date"><?= $new->date ?></span>
								</div>
								<h3 class="post-title"><a href="<?= $new->url ?>"><?= $new->name ?></a></h3>
							</div>
						</div>
					</div>
					<!-- /post -->
					<?php endforeach; ?>
				</div>
			</div>
			<!-- /container -->
		</div>
		
		<!-- /section -->

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title">
									<h2>More Recent News</h2>
								</div>
							</div>
							<?php $cnt4loop = 1; ?>
							<?php foreach ($news as $new) : ?>
								<?php if($cnt4loop++<9) continue; 
									if($cnt4image > 13) $cnt4image = 1;
								?>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="<?= $new->url ?>"><img src="static/image/news/news0<?=$cnt4image++?>.jpg" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<?php
												if($cnt4color > 4) {$cnt4color=1;}
											?>
											<a class="post-category cat-<?=$cnt4color++?>" href="category.html">news<?= $cnt4label++ ?></a>
											<span class="post-date"><?= $new->date ?></span>
										</div>
										<h3 class="post-title"><a href="<?= $new->url ?>"><?= $new->name ?></a></h3></div>
								</div>
							</div>
							<!-- /post -->
							<?php endforeach; ?>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

		<!--footer-->








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


	<!---->
		<!-- jQuery Plugins -->
		<script src="statics/js/newsjs/jquery.min.js"></script>
		<script src="statics/js/newsjs/bootstrap.min.js"></script>
		<script src="statics/js/newsjs/main.js"></script>

	</body>
</html>