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
	<!--/banner-->
	<div class="banner">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="carousel-item active">
					<div class="carousel-caption">
						<h3>Gold Jewellery </h3>
						<h5>2018
							<span>New Looks</span>
						</h5>
					</div>
				</div>
				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>Flexi Rings </h3>
						<h5>2018
							<span>New Looks</span>
						</h5>
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
						<h3>Gold Jewellery </h3>
						<h5>2018
							<span>New Looks</span>
						</h5>
					</div>
				</div>
				<div class="carousel-item item4">
					<div class="carousel-caption">
						<h3>Flexi Rings </h3>
						<h5>2018
							<span>New Looks</span>
						</h5>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<!--/model-->
	<!--//banner-->
	<!--/banner-bottom-w3ls-agileinfo-->
	<section class="banner-bottom-w3ls-agileinfo">
		<div class="container">
			<div class="row jewel-grids-main-in">
				<div class="col-lg-4 bottom-sub-grid text-center" data-aos="fade-up">
					<div class="bt-icon">

						<span class="fas fa-gift"></span>
					</div>

					<h4 class="sub-tittle">Gift Card</h4>
					<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

				</div>
				<!-- /.col-lg-4 -->
				<div class="col-lg-4 bottom-sub-grid text-center" data-aos="fade-up">
					<div class="bt-icon">
						<span class="fas fa-home"></span>
					</div>

					<h4 class="sub-tittle">Store</h4>
					<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

				</div>
				<!-- /.col-lg-4 -->
				<div class="col-lg-4 bottom-sub-grid text-center" data-aos="fade-up">
					<div class="bt-icon">
						<span class="far fa-life-ring"></span>
					</div>

					<h4 class="sub-tittle">Full Support</h4>
					<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>

				</div>
				<!-- /.col-lg-4 -->
			</div>
		</div>
		<!-- /.row -->
	</section>
	<!---->
	<div class="featured-items banner-bottom-w3ls-agileinfo">
		<h3 class="tittle text-center">Featured Brands This Week</h3>
		<div class="inner-sec-wthree-agileits">
			<div class="sreen-gallery-cursual">

				<div class="owl-carousel owl-theme">
					<div class="item">
						<div class="item-review text-center">
							<img src="statics/images/g1.jpg" class="img-fluid rounded" alt="" />
							<h5>Some Text</h5>
						</div>
					</div>
					<div class="item">
						<div class="item-review text-center">
							<img src="statics/images/g2.jpg" class="img-fluid rounded" alt="" />
							<h5>Some Text</h5>
						</div>
					</div>
					<div class="item">
						<div class="item-review text-center">
							<img src="statics/images/g3.jpg" class="img-fluid rounded" alt="" />
							<h5>Some Text</h5>
						</div>
					</div>
					<div class="item">
						<div class="item-review text-center">
							<img src="statics/images/g4.jpg" class="img-fluid rounded" alt="" />
							<h5>Some Text</h5>
						</div>
					</div>
					<div class="item">
						<div class="item-review text-center">
							<img src="statics/images/g5.jpg" class="img-fluid rounded" alt="" />
							<h5>Some Text</h5>
						</div>
					</div>
					<div class="item">
						<div class="item-review text-center">
							<img src="statics/images/g5.jpg" class="img-fluid rounded" alt="" />
							<h5>Some Text</h5>
						</div>
					</div>
					<div class="item">
						<div class="item-review text-center">
							<img src="statics/images/g6.jpg" class="img-fluid rounded" alt="" />
							<h5>Some Text</h5>
						</div>
					</div>
					<div class="item">
						<div class="item-review text-center">
							<img src="statics/images/g8.jpg" class="img-fluid rounded" alt="" />
							<h5>Some Text</h5>
						</div>
					</div>
					<div class="item">
						<div class="item-review text-center">
							<img src="statics/images/g7.jpg" class="img-fluid rounded" alt="" />
							<h5>Some Text</h5>
						</div>
					</div>
					<div class="item-owl">
						<div class="item-review text-center">
							<img src="statics/images/g1.jpg" class="img-fluid rounded" alt="" />
							<h5>Some Text</h5>
						</div>
					</div>
					<div class="item">
						<div class="item-review text-center">
							<img src="statics/images/g2.jpg" class="img-fluid rounded" alt="" />
							<h5>Some Text</h5>
						</div>
					</div>
					<div class="item">
						<div class="item-review text-center">
							<img src="statics/images/g3.jpg" class="img-fluid rounded" alt="" />
							<h5>Some Text</h5>
						</div>
					</div>
				</div>
				<!--//screen-gallery-->
			</div>
		</div>
	</div>

	<section class="reviews_sec featured-items banner-bottom-w3ls-agileinfo">
		<div class="container">
			<h3 class="tittle">What our clients say</h3>
			<div class="inner-sec-wthree-agileits">
				<!---->
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<div class="row test-slides">
								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="statics/images/t3.jpg" alt=" " class="img-fluid" />
										<div class="test_social_pos">
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

											</ul>
										</div>
									</div>
									<h3>Gretchen
										<span>Customer</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
									</p>
								</div>

								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="statics/images/t2.jpg" alt=" " class="img-fluid" />
										<div class="test_social_pos">
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

											</ul>
										</div>
									</div>
									<h3>Esmeralda
										<span>Customer</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
									</p>
								</div>

							</div>
						</div>
						<div class="carousel-item">
							<div class="row test-slides">
								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="statics/images/t3.jpg" alt=" " class="img-fluid" />
										<div class="test_social_pos">
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

											</ul>
										</div>
									</div>
									<h3>Gretchen
										<span>Customer</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
									</p>
								</div>

								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="statics/images/t2.jpg" alt=" " class="img-fluid" />
										<div class="test_social_pos">
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

											</ul>
										</div>
									</div>
									<h3>Esmeralda
										<span>Customer</span>
									</h3>
									<i>United States</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
									</p>
								</div>

							</div>
						</div>
					</div>
					<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
						<span class="far fa-arrow-alt-circle-left"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
						<span class="far fa-arrow-alt-circle-right" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
				<!---->
			</div>
		</div>
	</section>
	<!---->

	<!--footer-->
	<footer>

		<div class="instagram-posts">
			<h3 class="tittle cen foot">Istagram Posts</h3>
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
			<!-- //instagram posts -->
			<!-- subscribe -->
			<div class="footer-bottom-w3layouts-agileinfo">
				<div class="subscribe-main text-center">
					<h2>Signup to our newsletter</h2>
					<div class="subscribe-form">
						<form action="#" method="post" class="subscribe_form">
							<input class="form-control" type="email" placeholder="Enter your email..." required="">
							<input class="form-control" type="submit" value="Subscribe">
						</form>

					</div>
					<p>We respect your privacy.No spam ever!</p>
				</div>
				<!-- //subscribe -->
				<!-- footer -->
				<div class="footer-cpy text-center">
					<div class="footer-social">
						<div class="copyrighttop">
							<ul>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-facebook-f"></i>
										<span>Facebook</span>
									</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-twitter"></i>
										<span>Twitter</span>
									</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-google-plus-g"></i>
										<span>Google+</span>
									</a>
								</li>
								<li>
									<a class="facebook" href="#">
										<i class="fab fa-pinterest-p"></i>
										<span>Pinterest</span>
									</a>
								</li>
							</ul>

						</div>
					</div>
					<div class="copyrightbottom-w3ls-agile">
						<p>Copyright &copy; 2018.Company name All rights reserved.<a target="_blank" href="http://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>

					</div>
				</div>

				<!-- //footer -->
			</div>
		</div>
	</footer>
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
	<script src="statics/js/jquery-2.2.3.min.js"></script>
	<script src="statics/js/bootstrap.js"></script>
	<!-- //js -->
	<!-- password-script -->
	<script >
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
	<!-- required-js-files-->
	<!-- carousel -->
	<script src="statics/js/owl.carousel.js"></script>
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
						items:5,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->

	<!--//required-js-files-->
	<!-- start-smoth-scrolling -->
	<script src="statics/js/move-top.js"></script>
	<script src="statics/js/easing.js"></script>
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
	<!-- Necessary-JS-File-For-Bootstrap -->
	<!-- jQuery-Photo-filter-lightbox-Gallery-plugin -->
	<script src="statics/js/jquery-1.7.2.js"></script>
	<script src="statics/js/jquery.quicksand.js"></script>
	<script src="statics/js/script.js"></script>
	<script src="statics/js/jquery.prettyPhoto.js"></script>
	<!-- //jQuery-Photo-filter-lightbox-Gallery-plugin -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
