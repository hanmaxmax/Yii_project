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
						<h3>Russia Ukraine </h3>
						<h5>2022
							<span>俄乌战争</span>
						</h5>
					</div>
				</div>
				<div class="carousel-item item3">
					<div class="carousel-caption">
						<h3>War and Conflict </h3>
						<h5>2022
							<span>俄乌战争</span>
						</h5>
					</div>
				</div>
				<div class="carousel-item item2">
					<div class="carousel-caption">
						<h3>Mass protest</h3>
						<h5>2022
							<span>俄乌战争</span>
						</h5>
					</div>
				</div>
				<div class="carousel-item item4">
					<div class="carousel-caption">
						<h3>Yearn for Peace</h3>
						<h5>2022
							<span>俄乌战争</span>
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


		<h1 style="font-family: 华文新魏;"><b>俄罗斯乌克兰冲突</b></h1>
		<h1 style="font-family: 华文新魏;"></h1>

      <div class="about-top w3ls-agile">
        <div class="col-md-6 red">


		<div id="butong_net_left" style="overflow:hidden;width:500px;">
			<table cellpadding="0" cellspacing="0" border="0">
				<tr><td id="butong_net_left1" valign="top" align="center">
			<table cellpadding="2" cellspacing="0" border="0">
			<tr align="center">
				<td><img src="statics/images/RU.jpg"></td>
			</tr>
			</table>
				</td>
					<td id="butong_net_left2" valign="top"></td>
				</tr>
			</table>
		</div>
		<script>
			var speed=18//速度数值越大速度越慢
			butong_net_left2.innerHTML=butong_net_left1.innerHTML
			function Marquee3(){
				if(butong_net_left2.offsetWidth-butong_net_left.scrollLeft<=0)
					butong_net_left.scrollLeft-=butong_net_left1.offsetWidth
				else{
					butong_net_left.scrollLeft++
				}
			}
			var MyMar3=setInterval(Marquee3,speed)
			butong_net_left.onmouseover=function() {clearInterval(MyMar3)}
			butong_net_left.onmouseout=function() {MyMar3=setInterval(Marquee3,speed)}
		</script>


        </div>
        <div class="col-md-6 come">
            <h4 style="font-family: 华文楷体;"><p> &emsp; &emsp;2022年2月15日，随着俄罗斯国防部高调宣布撤回部分部署在俄乌边境、此前正在参与大规模军事演习的陆上部队，从2021年10月起持续至2022年2月的乌克兰东部危机，似乎呈现出了缓慢降温的趋势。</p></h4>

			<h4 style="font-family: 华文楷体;"><p> &emsp; &emsp;2022年2月17日，乌东部地区局势恶化，乌政府和当地民间武装相互指责对方在接触线地带发动挑衅性炮击。2月18日，乌东部民间武装宣布，因存在乌克兰发起军事行动的危险，自即日起向俄罗斯大规模集中疏散当地居民。2月21日晚，俄罗斯总统普京签署命令，承认乌克兰东部的“顿涅茨克人民共和国”和“卢甘斯克人民共和国”。 </p></h4>


			<h4 style="font-family: 华文楷体;"><p> &emsp; &emsp;2022年2月24日，乌克兰管理部门宣布关闭全国领空，乌克兰总统泽连斯基表示，乌克兰全境将进入战时状态，首都基辅地铁免费开放，地铁站将作为防空洞使用；俄军开始对乌军东部部队和其他地区的军事指挥中心、机场进行炮击。乌克兰国民卫队司令部被摧毁。2月24日，乌克兰宣布与俄罗斯断交。2月24日，乌克兰边防部队称俄军突入基辅地区。当地时间2月24日，乌克兰基辅市政府发出防空警报，通知所有人立即前往民防避难所避难。当地时间26日，乌克兰基辅市市长宣布，该市地铁转为避难所，不再提供运输服务。3月2日，乌克兰已经关闭其驻俄罗斯圣彼得堡的总领馆。13日清晨，俄军对利沃夫州亚沃洛夫斯基训练场的空袭共造成9人死亡，57人受伤。5月3日，俄军摧毁一处美欧援乌军火库，内部存放导弹和无人机。</p></h4>
			<p><a href="https://baike.baidu.com/item/2022%E5%B9%B4%E4%BF%84%E4%B9%8C%E5%86%B2%E7%AA%81/60143880?fr=aladdin"
                                          class="more">>> 了解更多</a></p>
          
        </div>
        <div class="clearfix"> </div>
      </div>

	  <div class="featured-items banner-bottom-w3ls-agileinfo">
			<div class="row jewel-grids-main-in">
				<div class="col-lg-4 bottom-sub-grid text-center" data-aos="fade-up">
					<div class="bt-icon">
						<span class="fa fa-home"></span>
						<!-- fa fa-handshake-o -->
					</div>
					<h4 class="sub-tittle">背景</h4>
					<p> <b>历史根源：</b>北约东扩、克里米亚事件、新明斯克协议&emsp;</p>
					<p> <b>根源之争：</b>乌克兰境内的民族矛盾，被西欧方国家和俄罗斯来回拉扯，以至于不断恶化。各个民族之间的不认同，促成了种族和文化冲突，使得国家失去凝集力和团结。</p>
					<p> <b>地缘政治：</b>北约的建立就是为了应对苏联（现俄罗斯）的武装和军事威胁而成立的军事政治组织。如果乌克兰加入北约，那么，俄罗斯的边境安全便会受到威胁，在美国和俄罗斯的博弈中，美国将占据地缘优势。</p>
					<p> <b>地缘经济：</b>乌克兰和工业发达的俄罗斯相比处于弱势地位，两国相交无法形成平等抗衡的局势。让俄罗斯在俄乌经济来往中占据主导，让乌克兰没有安全感，并且，乌克兰的军备力量薄弱，更是处在俄罗斯武装威慑之下。</p>
					<p><a href="https://new.qq.com/rain/a/20220227A04E0A00"
									class="more">>> more</a></p>
				</div>


				<div class="col-lg-4 bottom-sub-grid text-center" data-aos="fade-up">
					<div class="bt-icon">
						<span class="far fa-life-ring"></span>
						<!-- fa fa-handshake-o -->
					</div>
					<h4 class="sub-tittle">国际局势</h4>
					<p> <b>冷战思维扩张：</b>持续数月的俄乌冲突加剧了冷战思维扩张和地缘政治紧张。</p>
					<p> <b>全球阵营对抗：</b>俄乌冲突强化了全球阵营对抗，美西方国家的霸权主义和单边行动威胁着世界和平与发展。</p>
					<p> <b>拖累全球经济：</b>俄乌冲突在新冠肺炎疫情持续蔓延下进一步拖累了全球经济复苏，世界经济前景更加暗淡。</p>
					<p> <b>追求和平发展：</b>俄乌冲突不会改变和平与发展的时代主题，各国人民对美好生活的追求不会变。</p>
					<p> <b>坚守同舟共济：</b>在错综复杂的世界形势下，国际社会要牢固坚守同舟共济、合作共赢的使命。</p>

					<p><a href="https://news.gmw.cn/2022-07/02/content_35855163.htm"
									class="more">>> more</a></p>
				</div>


				<div class="col-lg-4 bottom-sub-grid text-center" data-aos="fade-up">
					<div class="bt-icon">
						<span class="fa fa-map"></span>
					</div>
						<h4 class="sub-tittle">影响</h4>
						<p> <b>群众生活：</b>截至2022年3月9日18时，乌克兰能源部发布称境内有超1250个定居点和约1.1万个变电站因俄乌冲突而断电，波及范围超72万人。
						当地时间2022年2月24日，已有超过11.1万居民从顿巴斯地区撤离至俄罗斯境内。
						从2月24日俄乌双方开始交火后至当地时间3月6日，已有超过170万难民逃离乌克兰前往欧洲其他国家。</p>
						<p> <b>网络攻击：</b>乌克兰国家银行、乌克兰内阁、外交部等多个网站因遭遇大规模网络攻击而关闭。</p>
						<p> <b>国家外交：</b>当地时间2022年2月24日，美国外交机构暂停在乌克兰西部城市利沃夫的领事业务。</p>
						<p><a href="https://baike.baidu.com/item/2022%E5%B9%B4%E4%BF%84%E4%B9%8C%E5%86%B2%E7%AA%81/60143880?fr=aladdin#6"
										class="more">>> more</a></p>
				</div>
			</div>
		</div>
		<!-- /.row -->
	</section>










    <div class="site-section overflow-hidden pb-0 bg-light">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <!--
                      You can change the color of the line by addings these 'classes'
                      '.line-black', '.line-primary', '.line-white'
                      Line Alignment: Add classes like '.text-center', '.text-left', 'text-right'
                      -->
                    <h1 class="section-heading line-primary text-center" style="font-family: 华文行楷;"> <b>热门问答</b></h1>
                </div>
            </div>
			<div class="row align-items-stretch">





				<div class="col-lg-6 bt-bottom-info ab">
				
				

				<div class="section-heading">
                        <h3 class="section-heading heading-sm line-black" style="font-family: 华文新魏;">相关视频</h3>
				</div>
					<a href="https://tv.cctv.com/2022/04/27/VIDEvqyDD5FiG2jm40rl9JaH220427.shtml" class="video-41036 mb-4" data-fancybox="" data-ratio="2">
					<span class="play">
						<span class="fa fa-play"></span>
					</span>
					<img src="statics/images/v1.png" alt="Image" class="img-fluid">
                    </a>

                    <a href="https://www.bilibili.com/video/BV1vZ4y1k7g7?t=0.9" class="video-41036 mb-4" data-fancybox="" data-ratio="2">
					<span class="play">
						<span class="fa fa-play"></span>
					</span>
					<img src="statics/images/v2.png" alt="Image" class="img-fluid">
                    </a>
				
				</div>








                <div class="col-lg-6 pl-lg-5 mb-5">
                    <!-- BEGIN: .custom-accordion -->
                    <div class="custom-accordion" id="accordion_1">
                        <div class="accordion-item">
                            <h2 class="mb-0" id="headingOne">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                        data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" style="font-family: 华文新魏;font-size:18px" >
                                    <b>中国对于俄乌冲突的的立场和态度？</b><i class="fa fa-chevron-down"></i>
                                </button>
                            </h2>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                 data-parent="#accordion_1">
                                <div class="accordion-body">
								   &diams;  中国坚决支持联合国宪章，支持国家的主权独立和领土完整。
									<p></p>
									&diams; 这个事件的发展有复杂的历史原因。
									<p></p>
									&diams; 一定要尽快劝和促谈、结束战争。
									<p></p>
									&diams; 希望在乌东危机之后建立一个更加均衡、更加可持续的欧洲安全体系。

                                </div>
                            </div>
                        </div> <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h2 class="mb-0" id="headingTwo">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo" style="font-family: 华文新魏;font-size:18px" >
										<b>中国对冲突的应对？</b><i class="fa fa-chevron-down"></i>
                                </button>
                            </h2>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordion_1">
                                <div class="accordion-body">
									&diams;  迅速撤走侨民。
									<p></p>
									&diams;  人道主义援助。
									<p></p>
									&diams;  劝和促谈，鼓励欧洲发挥作用。
									<p></p>
									&diams;  跟西方做一些澄清。
									<p></p>
									&diams;  中国在联合国多个场合，向美国施加压力。
                                </div>
                            </div>
                        </div> <!-- .accordion-item -->
                        <div class="accordion-item">
                            <h2 class="mb-0" id="headingThree">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree" style="font-family: 华文新魏;font-size:18px" >
										<b>俄罗斯面临的困境？</b><i class="fa fa-chevron-down"></i>
                                </button>
                            </h2>

                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                 data-parent="#accordion_1">
                                <div class="accordion-body">
									&diams;  俄罗斯国内军事动员阻力重重。
									<p></p>
									&diams;  俄罗斯战场上军事斗争频繁失利。
									<p></p>
									&diams;  俄罗斯面临美西方制裁经济低迷。
                                </div>
                            </div>

                        </div> <!-- .accordion-item -->

                        <div class="accordion-item">
                            <h2 class="mb-0" id="headingFour">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                        data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour" style="font-family: 华文新魏;font-size:18px" >
										<b>乌克兰所处的态势？</b><i class="fa fa-chevron-down"></i>
                                </button>
                            </h2>

                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                 data-parent="#accordion_1">
                                <div class="accordion-body">
									&diams;  俄军体量对乌军占据了压倒性优势。
									<p></p>
									&diams;  乌军战斗力较弱，战斗素养不高。
									<p></p>
									&diams;  美国和北约对乌克兰的援助并非无止境。
									<p></p>
									&diams;  乌克兰东西部地区实际情况存在差异。
                                </div>
                            </div>

                        </div> <!-- .accordion-item -->




                    </div>
                    <!-- END: .custom-accordion -->

                </div>
            </div>
        </div>

    </div>

















	

	<section class="reviews_sec featured-items banner-bottom-w3ls-agileinfo">
		<div class="container">
			<h3 class="tittle">开发团队</h3>
			<div class="inner-sec-wthree-agileits">
				<!---->
				<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<div class="row test-slides">
								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
									<img src="statics/images/hjx.jpg" alt=" " class="img-fluid" width = "120" height = "120" />
										<div class="test_social_pos">
										<ul class="social_list1">
											<li>
												<a href="https://github.com/hanmaxmax">
												<i class="bi bi-github"></i>
													<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-github" viewBox="0 0 16 16">
													<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
													</svg>
												</a>
											</li>
										</ul>
										</div>
									</div>
									<h3>韩佳迅
										<span>组长</span>
									</h3>
									<i>南开大学 计算机科学与技术专业 大三学生</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
									</p>
								</div>

								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
									<img src="statics/images/lyy.jpg" alt=" " class="img-fluid" width = "120" height = "120" />
										<div class="test_social_pos">
											<ul class="social_list1">
												<li>
													<a href="https://github.com/AldebaranL">
													<i class="bi bi-github"></i>
														<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-github" viewBox="0 0 16 16">
														<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
														</svg>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<h3>林语盈
										<span>组员1</span>
									</h3>
									<i>南开大学 计算机科学与技术专业 大三学生</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
									</p>
								</div>

							</div>
						</div>
						<div class="carousel-item">
							<div class="row test-slides">
								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
										<img src="statics/images/pyt.jpg" alt=" " class="img-fluid" width = "120" height = "120" />
										<div class="test_social_pos">
											<ul class="social_list1">
												<li>
													<a href="https://github.com/tttran67">
													<i class="bi bi-github"></i>
														<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-github" viewBox="0 0 16 16">
														<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
														</svg>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<h3>彭钰婷
										<span>组员2</span>
									</h3>
									<i>南开大学 计算机科学与技术专业 大三学生</i>
									<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
									</p>
								</div>

								<div class="col-md-6 testimonials_grid text-center">
									<div class="testimonials_grid-inn">
									<img src="statics/images/yx.jpg" alt=" " class="img-fluid" width = "120" height = "120" />
										<div class="test_social_pos">
											<ul class="social_list1">
												<li>
													<a href="https://github.com/yx66667">
													<i class="bi bi-github"></i>
														<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="black" class="bi bi-github" viewBox="0 0 16 16">
														<path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
														</svg>
													</a>
												</li>
											</ul>
										</div>
									</div>
									<h3>姚鑫
										<span>组员3</span>
									</h3>
									<i>南开大学 信息安全专业 大三学生</i>
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
