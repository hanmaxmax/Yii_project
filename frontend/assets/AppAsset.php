<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
<<<<<<< HEAD
    public $baseUrl = '@web/statics';
=======
    public $baseUrl = '@web/statics'; 
>>>>>>> main
    public $css = [
        //'css/site.css',
        'css/bootstrap.css',
        'css/style.css',
        'css/prettyPhoto.css',
        'css/owl.carousel.css',
        'css/owl.theme.css',
        'css/fontawesome-all.css'
    ];
    public $js = [
        'js/jquery-2.2.3.min.js',
        'js/bootstrap.js',
        'js/owl.carousel.js',
        'js/move-top.js',
        'js/easing.js',
        'js/jquery-1.7.2.js',
        'js/jquery.quicksand.js',
        'js/script.js',
        'js/jquery.prettyPhoto.js'
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
