
<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="" />

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
	<link href="http://fonts.googleapis.com/css?family=Prata" rel="stylesheet">
	<?php $this->head() ?>
</head>

<body>
<?php $this->beginBody() ?>
	<div class="banner-inner">
	</div>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">Home</a>
		</li>
		<li class="breadcrumb-item active">About</li>
	</ol>

	<!--//banner-->
	<!--/banner-bottom-w3ls-agileinfo-->
	<section class="banner-bottom-w3ls-agileinfo">
		<div class="container">
			<h3 class="tittle text-center">团队介绍</h3>
			<div class="row inner-sec-wthree-agileits">
				<div class="col-lg-13 bt-bottom-info">
					<p class="about-p">  本网站是南开大学互联网数据库开发课程大作业，由四名计算机学院和网络空间安全学院的大三学生创建，我们团队成员具有较强的个人能力和不错的团队协作能力，成员分工明确，各司其职，互帮互助，团队内有良好的学习氛围，遇到问题能及时沟通解决。
                    </p>
				</div>
			</div>
			<!-- Three columns of text below the carousel -->
			<div class="row inner-sec-wthree-agileits jewel-grids-main-in ab">
                <div class="col-lg-3 bt-bottom-info ab">
					<img src="statics/images/hjx.jpg" class="img-fluid" alt=" ">
			    </div>
				<div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle">韩佳迅</h4>
					<p class="about-p">
                        后台模板导入和页面设计，登入登出功能实现
                    </p>

				</div>
				<!-- /.col-lg-4 -->
                <div class="col-lg-3 bt-bottom-info ab">
					<img src="statics/images/g1.jpg" class="img-fluid" alt=" ">
			    </div>
				<div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle">林语盈</h4>
					<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

				</div>
				<!-- /.col-lg-4 -->
                <div class="col-lg-3 bt-bottom-info ab">
					<img src="statics/images/pyt.jpg" class="img-fluid" alt=" ">
			    </div>
				<div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle">彭钰婷</h4>
                    <p class="about-p">
                        新闻页面和时间线页面设计和实现
                    </p>

				</div>
				<!-- /.col-lg-4 -->
                <div class="col-lg-3 bt-bottom-info ab">
					<img src="statics/images/yx.jpg" class="img-fluid" alt=" ">
			    </div>
                <div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle">姚鑫</h4>
                    <p class="about-p">
                        前台模板导入和页面设计，团队介绍页面设计和实现
                    </p>
				</div>
			</div>
			<!-- /.row -->
			<div class="row inner_stat">
				<div class="col-md-3 stats_left counter_grid text-center">
					<i class="far fa-building"></i>
					<p class="counter">145</p>
					<h4>Branches</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid1 text-center">
					<i class="fas fa-users"></i>
					<p class="counter">165</p>
					<h4>Experts</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid2 text-center">
					<i class="far fa-edit"></i>
					<p class="counter">563</p>
					<h4>Designs</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid3 text-center">
					<i class="far fa-smile"></i>
					<p class="counter">1045</p>
					<h4>Happy Clients</h4>
				</div>

			</div>
		</div>
	</section>
	<!---->
	
	<!--/model-->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body video">
					<div class="signin-form profile">
						<div class="login-m_page">
							<h3 class="sign">Sign In</h3>
							<div class="login-form">
								<form action="#" method="post">
									<input class="form-control" type="email" name="email" placeholder="E-mail" required="">
									<input class="form-control" type="password" name="password" placeholder="Password" required="">
									<div class="tp">
										<input class="form-control" type="submit" value="Sign In">
									</div>
								</form>
							</div>
							<div class="login-social-grids">
								<ul class="social_list1">
									<li>
										<a href="#" class="facebook1">
											<i class="fab fa-facebook-f"></i>

										</a>
									</li>
									<li>
										<a href="#" class="twitter2">
											<i class="fab fa-twitter"></i>

										</a>
									</li>
									<li>
										<a href="#" class="dribble3">
											<i class="fab fa-dribbble"></i>
										</a>
									</li>
								</ul>

							</div>
							<p>
								<a href="#" data-toggle="modal" data-target="#exampleModal2"> Don't have an account?</a>
							</p>
						</div>

					</div>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Save changes</button>
				</div>
			</div>
		</div>
	</div>
	<!--//model-->
	<!-- Modal -->
	<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">

					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body video">
					<div class="signin-form profile">
						<div class="login-m_page">
							<h3 class="sign">Sign Up</h3>
							<div class="login-form">
								<form action="#" method="post">
									<input class="form-control" type="text" name="name" placeholder="Name" required="">
									<input class="form-control" type="email" name="email" placeholder="Email" required="">
									<input class="form-control" type="password" name="password" id="password1" placeholder="Password" required="">
									<input class="form-control" type="password" name="password" id="password2" placeholder="Confirm Password" required="">
									<input class="form-control" type="submit" value="Sign Up">
								</form>
							</div>
							<p>
								<a href="#"> By clicking Sign up, I agree to your terms</a>
							</p>
						</div>


					</div>


				</div>

			</div>
		</div>
	</div>
	<!--//model-->
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<!-- //js -->
	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->
	<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 2,
						nav: false
					},
					1000: {
						items: 5,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->


	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 900);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->

	<script>
		$(document).ready(function () {
			/*
									var defaults = {
							  			containerID: 'toTop', // fading element id
										containerHoverID: 'toTopHover', // fading element hover id
										scrollSpeed: 1200,
										easingType: 'linear' 
							 		};
									*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>