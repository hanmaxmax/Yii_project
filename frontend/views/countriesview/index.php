<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CountriesviewSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Countriesviews';
$this->params['breadcrumbs'][] = $this->title;
?>


<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Shape Hover Effect with SVG | Demo 1</title>
		<meta name="description" content="Hover Effects with animated SVG Shapes using Snap.svg">
		<meta name="keywords" content="animated svg, hover effect, grid, svg shape html, ">
		<link rel="stylesheet" type="text/css" href="static1/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="static1/css/demo.css">
		<link rel="stylesheet" type="text/css" href="static1/css/component.css">
		<script src="static1/js/snap.svg-min.js"></script>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>


<body>
	<div class="container">
		
		<header class="jq22-header">
			<h1>各国观点<span>Views of countries on Russia Ukraine War</span></h1>	
			
		</header>
		<section id="grid" class="grid clearfix">




		<?php foreach ($Countriesview as $view) : ?>

			<a href="#" data-path-hover="m 180,34.57627 -180,0 L 0,0 180,0 z">
				<figure>
					<img src="static1/img/<?=$view->picture?>">
					<svg viewBox="0 0 180 320" preserveAspectRatio="none"><path d="M 180,160 0,218 0,0 180,0 z"></path><desc>Created with Snap</desc><defs></defs></svg>
					<figcaption>
						<h2><?= $view->name ?>（<?= $view->country?>）</h2>
						<p><?= $view->view ?></p>
					</figcaption>
				</figure>
			</a>

		<?php endforeach; ?>



		</section>
	</div><!-- /container -->
	<script>
		(function() {

			function init() {
				var speed = 250,
					easing = mina.easeinout;

				[].slice.call ( document.querySelectorAll( '#grid > a' ) ).forEach( function( el ) {
					var s = Snap( el.querySelector( 'svg' ) ), path = s.select( 'path' ),
						pathConfig = {
							from : path.attr( 'd' ),
							to : el.getAttribute( 'data-path-hover' )
						};

					el.addEventListener( 'mouseenter', function() {
						path.animate( { 'path' : pathConfig.to }, speed, easing );
					} );

					el.addEventListener( 'mouseleave', function() {
						path.animate( { 'path' : pathConfig.from }, speed, easing );
					} );
				} );
			}

			init();

		})();
	</script>
</body>












