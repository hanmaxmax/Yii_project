<?php $cnt4loop = 1; $cnt4image = 1;?>
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
                                    <?php foreach ($timelines as $timeline) : ?>
                                        <?php
											if($cnt4image > 14) $cnt4image = 1;
										?>
                                        <div class="item"> 
                                            <div class="top-wrap c-color-gray"> 
                                                <span class="dot"></span> 
                                                <span class="time c-gap-left-small"><?= $timeline->date ?></span>  
                                            </div> 
                                            <div class="c-gap-left-large c-gap-inner-top-middle content pic-content"> 
                                                <div class="img-content"> 
												<a class="post-img" href="<?= $timeline->url ?>"><img src="static/image/timeline/news0<?=$cnt4image++?>.jpg" alt=""></a>
												<div class="c-text c-font-medium"> 
                                                        <a class="content-link c-line-clamp3 " target="_blank" href="<?= $timeline->url ?>"> 
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








</html> 