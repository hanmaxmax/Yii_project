<?php

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
							if($cnt4loop < 3){
								$cnt4loop++;
								continue;
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
									<a class="post-category cat-<?=$cnt4color++?>" href="<?= $new->url ?>">Web Design</a>
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
									<h2>Most Read</h2>
								</div>
							</div>
							<?php $cnt4loop = 1; ?>
							<?php $cnt4color = 1; ?>
							<?php $cnt4image = 1; ?>
							<?php foreach ($news as $new) : ?>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="<?= $new->url ?>"><img src="static/image/news/news0<?=$cnt4image++?>.jpg" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<?php
												if($cnt4color > 4) {$cnt4color=1;}
											?>
											<a class="post-category cat-<?=$cnt4color++?>" href="category.html">JavaScript</a>
											<span class="post-date"><?= $new->date ?></span>
										</div>
										<h3 class="post-title"><a href="<?= $new->url ?>"><?= $new->name ?></a></h3>
										<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
									</div>
								</div>
							</div>
							<!-- /post -->
							<?php endforeach; ?>
							<div class="col-md-12">
								<div class="section-row">
									<button class="primary-button center-block">Load More</button>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						
						<!-- catagories -->
						<div class="aside-widget">
							<div class="section-title">
								<h2>Catagories</h2>
							</div>
							<div class="category-widget">
								<ul>
									<li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
									<li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
									<li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
									<li><a href="#" class="cat-3">CSS<span>35</span></a></li>
								</ul>
							</div>
						</div>
						<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								<ul>
									<li><a href="#">Chrome</a></li>
									<li><a href="#">CSS</a></li>
									<li><a href="#">Tutorial</a></li>
									<li><a href="#">Backend</a></li>
									<li><a href="#">JQuery</a></li>
									<li><a href="#">Design</a></li>
									<li><a href="#">Development</a></li>
									<li><a href="#">JavaScript</a></li>
									<li><a href="#">Website</a></li>
								</ul>
							</div>
						</div>
						<!-- /tags -->
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
					<a href="single.html">
						<img src="statics/images/g6.jpg" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="single.html">
						<img src="statics/images/g2.jpg" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="single.html">
						<img src="statics/images/g4.jpg" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="single.html">
						<img src="statics/images/g6.jpg" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="single.html">
						<img src="statics/images/g8.jpg" class="img-fluid" alt="" />
					</a>
				</div>
				<div class="col-md-2 col-sm-2 footer-grid-img">
					<a href="single.html">
						<img src="statics/images/g1.jpg" class="img-fluid" alt="" />
					</a>
				</div>
			</div>

			<div class="col-md-3 agileinfo_footer_grid">
			<h3><p style="color:white">We are</p></h3>
				<p>Duis aute irure dolor in esse cillum dolore eu 
				fugiat nulla pariatur. <span>Excepteur sint proident 
				sunt in culpa qui officia anim id est laborum.</span></p>
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
					<li><a href="index.php?r=news" >战争时间线</a></li>
				</ul>
				</div>
			</div>




			<div class="col-md-3 agileinfo_footer_grid f3">
				<h3 ><p style="color:white">相关网站</p></h3>					
				<div class="nav-w3-l">
				<ul>
					<li><a href="index.php" >首页</a></li>
					<li><a href="../../backend/web" >登录后台</a></li>
					<li><a href="index.php?r=site/about" >关于团队</a></li>
					<li><a href="index.php?r=news" >战争新闻</a></li>
					<li><a href="index.php?r=news" >战争时间线</a></li>

				</ul>
				</div>
			</div>






			<div class="col-md-3 agileinfo_footer_grid">
			<h3><p style="color:white">We are</p></h3>
				<p>Duis aute irure dolor in esse cillum dolore eu 
				fugiat nulla pariatur. <span>Excepteur sint proident 
				sunt in culpa qui officia anim id est laborum.</span></p>
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
						<p>Copyright &copy; 2022. NKU hply All rights reserved.<a target="_blank" href="https://github.com/hanmaxmax/Yii_project">源代码Github链接</a></p>

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