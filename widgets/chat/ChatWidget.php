<?php 
namespace frontend\widgets\chat;

/**
 * Team: NKU-HLPY
 * Coding By: 姚鑫
 * 本文件用于网友评论界面
 */
use Yii;
use yii\bootstrap\Widget;
use yii\base\BaseObject;
use frontend\models\WishForm;

class ChatWidget extends Widget
{
     public function run()
     {
     	$Wish = new WishForm();
     	$data['Wish'] = $Wish->getList();
     	return $this->render('index',['data'=>$data]);
     }

}