<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;
use yii\base\widget;
use yii\helpers\Url;
use frontend\widgets\chat\ChatWidget;

$this->title = 'Comments';
$this->params['breadcrumbs'][] = $this->title;
?>
    <section class="index-news commit_title" id="comment" style="padding-bottom: 20px; padding-top: 30px;">
      <div class="container" style="margin-left: 260px;">
        <header class="text-center">
        </header>
          <div class="body-content">
              <div class="col-lg-9">
                  <div class="timeline" style="margin-bottom:0px;">
                      <div class="timeline-left" id="liuyan-div">
                          <?=ChatWidget::widget()?>
                      </div> 
                  </div>
              </div>
          </div>
      </div>
    </section>

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

