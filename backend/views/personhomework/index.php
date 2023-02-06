<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\PersonhomeworkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */


?>
<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1><p align="center">个人作业</p></h1>

        <p align="center"style="font-size:20px">团队成员：韩佳迅、林语盈、彭钰婷、姚鑫</p>
    </div>
<div class="contain">
    <body>
        <p style="text-align: center;">
            <img src="static/picture/nku2.png" alt="" height = "150" >
        </p>
    </body>
</div>
    <div class="body-content">
        <div class="row">
            <div class="col-lg-6">
                <h3><p style="color:navy">韩佳迅</p></h3>
                
                <p>
                    <p><span style="font-size:24px;">作业一：</span>
                    <a href="../../../data/team/xxx.zip" download="xxx.zip" ><span style="font-size:24px;">PDF下载&nbsp;&nbsp;&nbsp;</span><br /></a></p>
                    

                    <p><span style="font-size:24px;">作业二：</span>
                    <a href="../../../data/team/xxx.zip" download="xxx.zip" ><span style="font-size:24px;">PDF下载&nbsp;&nbsp;&nbsp;</span><br /></a></p>
                    
                    <p><span style="font-size:24px;">作业三：</span>
                    <a href="../../../data/team/xxx.zip" download="xxx.zip" ><span style="font-size:24px;">PDF下载&nbsp;&nbsp;&nbsp;</span><br /></a></p>
                    

                </p>





                <p><a class="btn btn-default" href="https://github.com/hanmaxmax">进入Github &raquo;</a></p>
            </div>
            <div class="col-lg-6">
            <h3><p style="color:navy">林语盈</p></h3>

                <p>  </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="https://github.com/AldebaranL">进入Github &raquo;</a></p>
            </div>
            <div class="col-lg-6">
            <h3><p style="color:navy">彭钰婷</p></h3>
                <p>  </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="https://github.com/tttran67">进入Github &raquo;</a></p>
            </div>

            <div class="col-lg-6">
            <h3><p style="color:navy">姚鑫</p></h3>
                <p>  </p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="https://github.com/yx66667">进入Github &raquo;</a></p>
            </div>
        </div>
        <p align="center"><a class="btn btn-lg btn-info" href="http://www.yiiframework.com">进入 Yii 官网</a></p>

    </div>
</div>
