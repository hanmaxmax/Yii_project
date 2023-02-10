
<?php
/**
 * Team: NKU-HLPY
 * Coding By: 姚鑫
 * 本文件用于关于团队界面
 */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

$this->title = 'About us';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">


	<section class="banner-bottom-w3ls-agileinfo">
		<div class="container">
			<div class="row inner-sec-wthree-agileits">
                <div class="col-lg-6 bt-bottom-info ab">
					<img src="statics/images/background.jpg" class="img-fluid" alt=" " width = "600" height = "420" />
				</div>
				<div class="col-lg-6 bt-bottom-info">
                    <h3 class="tittle text-center" style="font-family: 华文楷体;">团队介绍</h3>
                    <h4 style="font-family: 华文楷体;"><p> &emsp; &emsp;本网站是南开大学互联网数据库开发课程大作业，网站建站依靠yii框架进行搭建，网站页面分为前台部分和后台部分，同时网站也连接了数据库进行使用。</p></h4>
                    <h4 style="font-family: 华文楷体;"><p> &emsp; &emsp;本网站由四名计算机学院和网络空间安全学院的大三学生创建，我们团队成员具有较强的个人能力和不错的团队协作能力，成员分工明确，各司其职，互帮互助，团队内有良好的学习氛围，遇到问题能及时沟通解决。如果有任何问题，可以在下面点击团队成员github链接访问主页，并联系我们。
                    </p></h4>
				</div>
			</div>
        </div>
    </section>

    <div class="container">
        			<!-- /.row -->
			<div class="row inner_stat">
				<div class="col-md-3 stats_left counter_grid text-center">
					<i class="far fa-building"></i>
					<p class="counter">60+</p>
					<h4>git提交次数</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid1 text-center">
					<i class="fas fa-users"></i>
					<p class="counter">4</p>
					<h4>团队成员数量</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid2 text-center">
					<i class="far fa-edit"></i>
					<p class="counter">10+</p>
					<h4>开发用的天数</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid3 text-center">
					<i class="far fa-smile"></i>
					<p class="counter">7000+</p>
					<h4>文件总数</h4>
				</div>
			</div>
			<!-- Three columns of text below the carousel -->
		<div class="row inner-sec-wthree-agileits jewel-grids-main-in ab">
                <div class="col-lg-3 bt-bottom-info ab">
                    <img src="statics/images/hjx.jpg" alt=" " class="img-fluid" width = "250" height = "250" />
			    </div>
				<div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle" style="font-size:30px">韩佳迅</h4>
					<p class="about-p" style="font-size:15px">
                        后台模板导入，前台主页、国际视野、经济、能源的页面实现，后台用户管理、数据管理、作业下载功能实现。
                    </p>
                    <li><a href="https://github.com/hanmaxmax">看我的github主页</a></li>
				</div>
				<!-- /.col-lg-4 -->
                <div class="col-lg-3 bt-bottom-info ab">
					<img src="statics/images/lyy.jpg" alt=" " class="img-fluid" width = "250" height = "250" />
			    </div>
				<div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle" style="font-size:30px">林语盈</h4>
					<p class="about-p" style="font-size:15px">前台国际关系页面实现，实现了爬虫，对news数据表进行数据爬取，实现了一键部署功能。</p>
                    <li><a href="https://github.com/AldebaranL">看我的github主页</a></li>
				</div>
				<!-- /.col-lg-4 -->
                <div class="col-lg-3 bt-bottom-info ab">
					<img src="statics/images/pyt.jpg" alt=" " class="img-fluid" width = "250" height = "250" />
			    </div>
				<div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle" style="font-size:30px">彭钰婷</h4>
                    <p class="about-p" style="font-size:15px">
                        前台新闻页面、时间线页面设计和实现，实现爬虫，对news数据表进行数据爬取。
                    </p>
                    <li><a href="https://github.com/tttran67">看我的github主页</a></li>
				</div>
				<!-- /.col-lg-4 -->
                <div class="col-lg-3 bt-bottom-info ab">
					<img src="statics/images/yx.jpg" alt=" " class="img-fluid" width = "250" height = "250" />
			    </div>
                <div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle" style="font-size:30px">姚鑫</h4>
                    <p class="about-p" style="font-size:15px">
                        前台模板导入，导航栏部分页面设计，团队介绍、网友评论页面设计和实现。
                    </p>
                    <li><a href="https://github.com/yx66667">看我的github主页</a></li>
				</div>
        </div>
    </div>

    <div class="site-section">
        <h2 class="section-heading text-center" style="font-family: 华文楷体;">组员作业展示</h2>
        <p class="text-center" style="font-family: 华文楷体; font-size: 20px">下面是我们团队成员在课程中个人作业的github链接，欢迎浏览。（下载功能提供在后台，请登录后台下载）</p>
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <!-- BEGIN: .widget-29182 -->
                    <!--
                      Add '.widget-29182-v2' class for v2 style
                    -->
                    <div class="widget-29182 widget-29182-v2 mb-0 pb-0">
                        <div class="widget-inner"><img src="statics/images/web前端.png" alt="Image"
                                                       class="img-mb-2 img-fluid" width = "250" height = "200" />
                        </div>

                        <div class="widget-inner">
                            <h3>Web前端初探</h3>
                        </div>
                        <div class="widget-inner">
                            <ul class="list-unstyled">
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/personal/%E4%BD%9C%E4%B8%9A1(2012682_%E9%9F%A9%E4%BD%B3%E8%BF%85).zip">> 韩佳迅第一次作业</a></li>
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/personal/%E4%BD%9C%E4%B8%9A1(2012174_%E6%9E%97%E8%AF%AD%E7%9B%88).zip">> 林语盈第一次作业</a></li>
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/personal/%E4%BD%9C%E4%B8%9A1(2013631_%E5%BD%AD%E9%92%B0%E5%A9%B7).zip">> 彭钰婷第一次作业</a></li>
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/personal/%E4%BD%9C%E4%B8%9A1(2014089_%E5%A7%9A%E9%91%AB).zip">> 姚鑫第一次作业</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: .widget-29182 -->
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <!-- BEGIN: .widget-29182 -->
                    <!--
                      Add '.widget-29182-v2' class for v2 style
                    -->
                    <div class="widget-29182 widget-29182-v2 mb-0 pb-0">

                        <div class="widget-inner"><img src="statics/images/web前端2.jpg" alt="Image"
                                                       class="img-mb-2 img-fluid" width = "250" height = "200" />
                        </div>
                        <div class="widget-inner">
                            <h3>Web前端设计</h3>
                        </div>

                        <div class="widget-inner">
                            <ul class="list-unstyled">
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/personal/%E4%BD%9C%E4%B8%9A2(2012682_%E9%9F%A9%E4%BD%B3%E8%BF%85).zip">> 韩佳迅第二次作业</a></li>
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/personal/%E4%BD%9C%E4%B8%9A2(2012174_%E6%9E%97%E8%AF%AD%E7%9B%88).zip">> 林语盈第二次作业</a></li>
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/personal/%E4%BD%9C%E4%B8%9A2(2013631_%E5%BD%AD%E9%92%B0%E5%A9%B7).zip">> 彭钰婷第二次作业</a></li>
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/personal/%E4%BD%9C%E4%B8%9A2(2014089_%E5%A7%9A%E9%91%AB).zip">> 姚鑫第二次作业</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: .widget-29182 -->
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <!-- BEGIN: .widget-29182 -->
                    <!--
                      Add '.widget-29182-v2' class for v2 style
                    -->
                    <div class="widget-29182 widget-29182-v2 mb-0 pb-0">
                        <div class="widget-inner"><img src="statics/images/web前端3.png" alt="Image"
                                                       class="img-mb-2 img-fluid" width = "250" height = "200" />
                        </div>
                        <div class="widget-inner">
                            <h3>开源建站工具初试</h3>
                        </div>

                        <div class="widget-inner">
                            <ul class="list-unstyled">
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/personal/%E4%BD%9C%E4%B8%9A3(2012682_%E9%9F%A9%E4%BD%B3%E8%BF%85).zip">> 韩佳迅第三次作业</a></li>
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/personal/%E4%BD%9C%E4%B8%9A3(2012174_%E6%9E%97%E8%AF%AD%E7%9B%88).zip">> 林语盈第三次作业</a></li>
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/personal/%E4%BD%9C%E4%B8%9A3(2013631_%E5%BD%AD%E9%92%B0%E5%A9%B7).zip">> 彭钰婷第三次作业</a></li>
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/personal/%E4%BD%9C%E4%B8%9A3(2014089_%E5%A7%9A%E9%91%AB).zip">> 姚鑫第三次作业</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: .widget-29182 -->
                </div>

                <div class="col-12 col-sm-6 col-md-6 col-lg-3">
                    <!-- BEGIN: .widget-29182 -->
                    <!--
                      Add '.widget-29182-v2' class for v2 style
                    -->
                    <div class="widget-29182 widget-29182-v2 mb-0 pb-0">
                        <div class="widget-inner"><img src="statics/images/web前端4.jpg" alt="Image"
                                                       class="img-mb-2 img-fluid" width = "250" height = "200" />
                        </div>
                        <div class="widget-inner">
                            <h3>团队作业开发文档</h3>
                        </div>

                        <div class="widget-inner">
                            <ul class="list-unstyled">
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/team/NKU-HLPY_%E9%9C%80%E6%B1%82%E6%96%87%E6%A1%A3(2012682_2012174_2013631_2014089).pdf">> 需求文档</a></li>
                                <li><a href="https://github.com/NickSkyyy">> 设计文档</a></li>
                                <li><a href="https://github.com/VitalC-3026">> 实现文档</a></li>
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/team/NKU-HLPY_%E7%94%A8%E6%88%B7%E6%89%8B%E5%86%8C(2012682_2012174_2013631_2014089).pdf">> 用户手册</a></li>
                                <li><a href="https://github.com/hanmaxmax/Yii_project/blob/main/data/team/NKU-HLPY_%E9%83%A8%E7%BD%B2%E6%96%87%E6%A1%A3(2012682_2012174_2013631_2014089).pdf">> 部署文档</a></li>
								<li><a href="https://github.com/Pixie-King">> 展示PPT</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: .widget-29182 -->
                </div>

            </div>
        </div>
    </div>
    <!-- END: .site-section -->

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
					<li><a href="index.php?r=news" >战争时间线</a></li>
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
						<p>Copyright &copy; 2022. NKU-hply All rights reserved.<a target="_blank" href="https://github.com/hanmaxmax/Yii_project">源代码Github链接</a></p>

					</div>
				</div>
				<!-- //footer -->
			</div>
		</div>
</footer>

	<!---->

</div>	
