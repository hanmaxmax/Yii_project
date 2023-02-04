
<?php

/* @var $this \yii\web\View */
/* @var $content string */

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
    <div class="page-heading-85912" style="background-image: url('statics/images/background1.jpg')">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-6">
                    <h1 class="mb-0 heading text-white" style="font-family: 华文楷体;">关于我们</h1>
                    <h4 style="font-family: 华文楷体;"><p> 本页面介绍了我们的团队，展示了我们团队的每个人的个人作业链接地址和团队的整体介绍。</p></h4>
                </div>
            </div>
        </div>
    </div>
    <ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="#">主页</a>
		</li>
		<li class="breadcrumb-item active">关于团队</li>
	</ol>

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
					<p class="counter">146</p>
					<h4>git提交次数</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid1 text-center">
					<i class="fas fa-users"></i>
					<p class="counter">4</p>
					<h4>团队成员数量</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid2 text-center">
					<i class="far fa-edit"></i>
					<p class="counter">15</p>
					<h4>开发用的天数</h4>
				</div>
				<div class="col-md-3 stats_left counter_grid3 text-center">
					<i class="far fa-smile"></i>
					<p class="counter">1045</p>
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
                        后台模板导入和页面设计，登入登出功能实现
                    </p>
                    <li><a href="https://github.com/hanmaxmax">看我的github主页</a></li>
				</div>
				<!-- /.col-lg-4 -->
                <div class="col-lg-3 bt-bottom-info ab">
					<img src="statics/images/lyy.jpg" alt=" " class="img-fluid" width = "250" height = "250" />
			    </div>
				<div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle" style="font-size:30px">林语盈</h4>
					<p class="about-p" style="font-size:15px">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                    <li><a href="https://github.com/AldebaranL">看我的github主页</a></li>
				</div>
				<!-- /.col-lg-4 -->
                <div class="col-lg-3 bt-bottom-info ab">
					<img src="statics/images/pyt.jpg" alt=" " class="img-fluid" width = "250" height = "250" />
			    </div>
				<div class="col-lg-3 bottom-sub-grid" data-aos="fade-up">
					<h4 class="sub-tittle" style="font-size:30px">彭钰婷</h4>
                    <p class="about-p" style="font-size:15px">
                        新闻页面和时间线页面设计和实现
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
                        前台模板导入和页面设计，团队介绍页面设计和实现
                    </p>
                    <li><a href="https://github.com/yx66667">看我的github主页</a></li>
				</div>
        </div>
    </div>

    <div class="site-section">
        <h2 class="section-heading text-center" style="font-family: 华文楷体;">组员作业展示</h2>
        <p class="text-center" style="font-family: 华文楷体; font-size: 20px">下面是我们团队成员在课程中个人作业的github链接，欢迎浏览。</p>
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
                                <li><a href="https://github.com/fengjk12138/-/blob/master/%E4%B8%AA%E4%BA%BA%E4%BD%9C%E4%B8%9A/%E4%BD%9C%E4%B8%9A1(1813402_%E5%86%AF%E6%9D%B0%E5%BA%B7).zip">> 第一次个人作业链接</a></li>
                                <li><a href="https://github.com/NickSkyyy/Homework/blob/master/%E4%BD%9C%E4%B8%9A1%EF%BC%881811412_%E6%88%9A%E6%99%93%E7%9D%BF%EF%BC%89.zip">> qqqq</a></li>
                                <li><a href="https://github.com/VitalC-3026/Internet">> qqqqq</a></li>
                                <li><a href="https://github.com/king-wk/homework_internet/tree/master/%E4%BD%9C%E4%B8%9A1%EF%BC%881811507_%E6%96%87%E9%9D%99%E9%9D%99%EF%BC%89">> qqqq</a></li>
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
                                <li><a href="https://github.com/fengjk12138/-/blob/master/%E4%B8%AA%E4%BA%BA%E4%BD%9C%E4%B8%9A/%E4%BD%9C%E4%B8%9A2(1813402_%E5%86%AF%E6%9D%B0%E5%BA%B7).zip">> 第二次个人作业</a></li>
                                <li><a href="https://github.com/NickSkyyy/Homework/blob/master/%E4%BD%9C%E4%B8%9A2%EF%BC%881811412_%E6%88%9A%E6%99%93%E7%9D%BF%EF%BC%89.zip">qwer</a></li>
                                <li><a href="https://github.com/VitalC-3026/Internet">bbbbb</a></li>
                                <li><a href="https://github.com/king-wk/homework_internet/tree/master/%E4%BD%9C%E4%B8%9A2%EF%BC%881811507_%E6%96%87%E9%9D%99%E9%9D%99%EF%BC%89">aaaa</a></li>
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
                                <li><a href="https://github.com/fengjk12138/-/blob/master/%E4%B8%AA%E4%BA%BA%E4%BD%9C%E4%B8%9A/%E4%BD%9C%E4%B8%9A3(1813402_%E5%86%AF%E6%9D%B0%E5%BA%B7).zip">kkkk</a></li>
                                <li><a href="https://github.com/NickSkyyy/Homework/blob/master/%E4%BD%9C%E4%B8%9A3%EF%BC%881811412_%E6%88%9A%E6%99%93%E7%9D%BF%EF%BC%89.zip">lllll</a></li>
                                <li><a href="https://github.com/VitalC-3026/Internet">oooo</a></li>
                                <li><a href="https://github.com/king-wk/homework_internet/tree/master/%E4%BD%9C%E4%B8%9A3%EF%BC%881811507_%E6%96%87%E9%9D%99%E9%9D%99%EF%BC%89">llll</a></li>
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
                                <li><a href="https://github.com/fengjk12138">才不要你来我github呢</a></li>
                                <li><a href="https://github.com/NickSkyyy">你看这个star竟然可以点</a></li>
                                <li><a href="https://github.com/VitalC-3026">不就是代码么，push就是了</a></li>
                                <li><a href="https://github.com/king-wk">码量发量反比例</a></li>
                                <li><a href="https://github.com/Pixie-King">lll</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- END: .widget-29182 -->
                </div>

            </div>
        </div>
    </div>
    <!-- END: .site-section -->

</div>	
