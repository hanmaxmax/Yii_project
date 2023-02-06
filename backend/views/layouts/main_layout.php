<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>俄乌战争 | CRM Admin Dashboard Template</title>
      
      <link rel="stylesheet" href="static/css/backend-plugin.min.css">
      <link rel="stylesheet" href="static/css/backend.css">  <style type="text/css">.apexcharts-canvas {
  position: relative;
  user-select: none;
  /* cannot give overflow: hidden as it will crop tooltips which overflow outside chart area */
}


/* scrollbar is not visible by default for legend, hence forcing the visibility */
.apexcharts-canvas ::-webkit-scrollbar {
  -webkit-appearance: none;
  width: 6px;
}

.apexcharts-canvas ::-webkit-scrollbar-thumb {
  border-radius: 4px;
  background-color: rgba(0, 0, 0, .5);
  box-shadow: 0 0 1px rgba(255, 255, 255, .5);
  -webkit-box-shadow: 0 0 1px rgba(255, 255, 255, .5);
}


.apexcharts-inner {
  position: relative;
}

.apexcharts-text tspan {
  font-family: inherit;
}

.legend-mouseover-inactive {
  transition: 0.15s ease all;
  opacity: 0.20;
}

.apexcharts-series-collapsed {
  opacity: 0;
}

.apexcharts-tooltip {
  border-radius: 5px;
  box-shadow: 2px 2px 6px -4px #999;
  cursor: default;
  font-size: 14px;
  left: 62px;
  opacity: 0;
  pointer-events: none;
  position: absolute;
  top: 20px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
  white-space: nowrap;
  z-index: 12;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-tooltip.apexcharts-theme-light {
  border: 1px solid #e3e3e3;
  background: rgba(255, 255, 255, 0.96);
}

.apexcharts-tooltip.apexcharts-theme-dark {
  color: #fff;
  background: rgba(30, 30, 30, 0.8);
}

.apexcharts-tooltip * {
  font-family: inherit;
}


.apexcharts-tooltip-title {
  padding: 6px;
  font-size: 15px;
  margin-bottom: 4px;
}

.apexcharts-tooltip.apexcharts-theme-light .apexcharts-tooltip-title {
  background: #ECEFF1;
  border-bottom: 1px solid #ddd;
}

.apexcharts-tooltip.apexcharts-theme-dark .apexcharts-tooltip-title {
  background: rgba(0, 0, 0, 0.7);
  border-bottom: 1px solid #333;
}

.apexcharts-tooltip-text-y-value,
.apexcharts-tooltip-text-goals-value,
.apexcharts-tooltip-text-z-value {
  display: inline-block;
  font-weight: 600;
  margin-left: 5px;
}

.apexcharts-tooltip-text-y-label:empty,
.apexcharts-tooltip-text-y-value:empty,
.apexcharts-tooltip-text-goals-label:empty,
.apexcharts-tooltip-text-goals-value:empty,
.apexcharts-tooltip-text-z-value:empty {
  display: none;
}

.apexcharts-tooltip-text-y-value,
.apexcharts-tooltip-text-goals-value,
.apexcharts-tooltip-text-z-value {
  font-weight: 600;
}

.apexcharts-tooltip-text-goals-label, 
.apexcharts-tooltip-text-goals-value {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-goals-group, 
.apexcharts-tooltip-text-goals-label, 
.apexcharts-tooltip-text-goals-value {
  display: flex;
}
.apexcharts-tooltip-text-goals-label:not(:empty),
.apexcharts-tooltip-text-goals-value:not(:empty) {
  margin-top: -6px;
}

.apexcharts-tooltip-marker {
  width: 12px;
  height: 12px;
  position: relative;
  top: 0px;
  margin-right: 10px;
  border-radius: 50%;
}

.apexcharts-tooltip-series-group {
  padding: 0 10px;
  display: none;
  text-align: left;
  justify-content: left;
  align-items: center;
}

.apexcharts-tooltip-series-group.apexcharts-active .apexcharts-tooltip-marker {
  opacity: 1;
}

.apexcharts-tooltip-series-group.apexcharts-active,
.apexcharts-tooltip-series-group:last-child {
  padding-bottom: 4px;
}

.apexcharts-tooltip-series-group-hidden {
  opacity: 0;
  height: 0;
  line-height: 0;
  padding: 0 !important;
}

.apexcharts-tooltip-y-group {
  padding: 6px 0 5px;
}

.apexcharts-tooltip-box, .apexcharts-custom-tooltip {
  padding: 4px 8px;
}

.apexcharts-tooltip-boxPlot {
  display: flex;
  flex-direction: column-reverse;
}

.apexcharts-tooltip-box>div {
  margin: 4px 0;
}

.apexcharts-tooltip-box span.value {
  font-weight: bold;
}

.apexcharts-tooltip-rangebar {
  padding: 5px 8px;
}

.apexcharts-tooltip-rangebar .category {
  font-weight: 600;
  color: #777;
}

.apexcharts-tooltip-rangebar .series-name {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}

.apexcharts-xaxistooltip {
  opacity: 0;
  padding: 9px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
  transition: 0.15s ease all;
}

.apexcharts-xaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-xaxistooltip:after,
.apexcharts-xaxistooltip:before {
  left: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-xaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-left: -6px;
}

.apexcharts-xaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-left: -7px;
}

.apexcharts-xaxistooltip-bottom:after,
.apexcharts-xaxistooltip-bottom:before {
  bottom: 100%;
}

.apexcharts-xaxistooltip-top:after,
.apexcharts-xaxistooltip-top:before {
  top: 100%;
}

.apexcharts-xaxistooltip-bottom:after {
  border-bottom-color: #ECEFF1;
}

.apexcharts-xaxistooltip-bottom:before {
  border-bottom-color: #90A4AE;
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:after {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-bottom.apexcharts-theme-dark:before {
  border-bottom-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top:after {
  border-top-color: #ECEFF1
}

.apexcharts-xaxistooltip-top:before {
  border-top-color: #90A4AE;
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:after {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip-top.apexcharts-theme-dark:before {
  border-top-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-xaxistooltip.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-yaxistooltip {
  opacity: 0;
  padding: 4px 10px;
  pointer-events: none;
  color: #373d3f;
  font-size: 13px;
  text-align: center;
  border-radius: 2px;
  position: absolute;
  z-index: 10;
  background: #ECEFF1;
  border: 1px solid #90A4AE;
}

.apexcharts-yaxistooltip.apexcharts-theme-dark {
  background: rgba(0, 0, 0, 0.7);
  border: 1px solid rgba(0, 0, 0, 0.5);
  color: #fff;
}

.apexcharts-yaxistooltip:after,
.apexcharts-yaxistooltip:before {
  top: 50%;
  border: solid transparent;
  content: " ";
  height: 0;
  width: 0;
  position: absolute;
  pointer-events: none;
}

.apexcharts-yaxistooltip:after {
  border-color: rgba(236, 239, 241, 0);
  border-width: 6px;
  margin-top: -6px;
}

.apexcharts-yaxistooltip:before {
  border-color: rgba(144, 164, 174, 0);
  border-width: 7px;
  margin-top: -7px;
}

.apexcharts-yaxistooltip-left:after,
.apexcharts-yaxistooltip-left:before {
  left: 100%;
}

.apexcharts-yaxistooltip-right:after,
.apexcharts-yaxistooltip-right:before {
  right: 100%;
}

.apexcharts-yaxistooltip-left:after {
  border-left-color: #ECEFF1;
}

.apexcharts-yaxistooltip-left:before {
  border-left-color: #90A4AE;
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:after {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-left.apexcharts-theme-dark:before {
  border-left-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right:after {
  border-right-color: #ECEFF1;
}

.apexcharts-yaxistooltip-right:before {
  border-right-color: #90A4AE;
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:after {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip-right.apexcharts-theme-dark:before {
  border-right-color: rgba(0, 0, 0, 0.5);
}

.apexcharts-yaxistooltip.apexcharts-active {
  opacity: 1;
}

.apexcharts-yaxistooltip-hidden {
  display: none;
}

.apexcharts-xcrosshairs,
.apexcharts-ycrosshairs {
  pointer-events: none;
  opacity: 0;
  transition: 0.15s ease all;
}

.apexcharts-xcrosshairs.apexcharts-active,
.apexcharts-ycrosshairs.apexcharts-active {
  opacity: 1;
  transition: 0.15s ease all;
}

.apexcharts-ycrosshairs-hidden {
  opacity: 0;
}

.apexcharts-selection-rect {
  cursor: move;
}

.svg_select_boundingRect, .svg_select_points_rot {
  pointer-events: none;
  opacity: 0;
  visibility: hidden;
}
.apexcharts-selection-rect + g .svg_select_boundingRect,
.apexcharts-selection-rect + g .svg_select_points_rot {
  opacity: 0;
  visibility: hidden;
}

.apexcharts-selection-rect + g .svg_select_points_l,
.apexcharts-selection-rect + g .svg_select_points_r {
  cursor: ew-resize;
  opacity: 1;
  visibility: visible;
}

.svg_select_points {
  fill: #efefef;
  stroke: #333;
  rx: 2;
}

.apexcharts-svg.apexcharts-zoomable.hovering-zoom {
  cursor: crosshair
}

.apexcharts-svg.apexcharts-zoomable.hovering-pan {
  cursor: move
}

.apexcharts-zoom-icon,
.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon,
.apexcharts-reset-icon,
.apexcharts-pan-icon,
.apexcharts-selection-icon,
.apexcharts-menu-icon,
.apexcharts-toolbar-custom-icon {
  cursor: pointer;
  width: 20px;
  height: 20px;
  line-height: 24px;
  color: #6E8192;
  text-align: center;
}

.apexcharts-zoom-icon svg,
.apexcharts-zoomin-icon svg,
.apexcharts-zoomout-icon svg,
.apexcharts-reset-icon svg,
.apexcharts-menu-icon svg {
  fill: #6E8192;
}

.apexcharts-selection-icon svg {
  fill: #444;
  transform: scale(0.76)
}

.apexcharts-theme-dark .apexcharts-zoom-icon svg,
.apexcharts-theme-dark .apexcharts-zoomin-icon svg,
.apexcharts-theme-dark .apexcharts-zoomout-icon svg,
.apexcharts-theme-dark .apexcharts-reset-icon svg,
.apexcharts-theme-dark .apexcharts-pan-icon svg,
.apexcharts-theme-dark .apexcharts-selection-icon svg,
.apexcharts-theme-dark .apexcharts-menu-icon svg,
.apexcharts-theme-dark .apexcharts-toolbar-custom-icon svg {
  fill: #f3f4f5;
}

.apexcharts-canvas .apexcharts-zoom-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-selection-icon.apexcharts-selected svg,
.apexcharts-canvas .apexcharts-reset-zoom-icon.apexcharts-selected svg {
  fill: #008FFB;
}

.apexcharts-theme-light .apexcharts-selection-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoom-icon:not(.apexcharts-selected):hover svg,
.apexcharts-theme-light .apexcharts-zoomin-icon:hover svg,
.apexcharts-theme-light .apexcharts-zoomout-icon:hover svg,
.apexcharts-theme-light .apexcharts-reset-icon:hover svg,
.apexcharts-theme-light .apexcharts-menu-icon:hover svg {
  fill: #333;
}

.apexcharts-selection-icon,
.apexcharts-menu-icon {
  position: relative;
}

.apexcharts-reset-icon {
  margin-left: 5px;
}

.apexcharts-zoom-icon,
.apexcharts-reset-icon,
.apexcharts-menu-icon {
  transform: scale(0.85);
}

.apexcharts-zoomin-icon,
.apexcharts-zoomout-icon {
  transform: scale(0.7)
}

.apexcharts-zoomout-icon {
  margin-right: 3px;
}

.apexcharts-pan-icon {
  transform: scale(0.62);
  position: relative;
  left: 1px;
  top: 0px;
}

.apexcharts-pan-icon svg {
  fill: #fff;
  stroke: #6E8192;
  stroke-width: 2;
}

.apexcharts-pan-icon.apexcharts-selected svg {
  stroke: #008FFB;
}

.apexcharts-pan-icon:not(.apexcharts-selected):hover svg {
  stroke: #333;
}

.apexcharts-toolbar {
  position: absolute;
  z-index: 11;
  max-width: 176px;
  text-align: right;
  border-radius: 3px;
  padding: 0px 6px 2px 6px;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.apexcharts-menu {
  background: #fff;
  position: absolute;
  top: 100%;
  border: 1px solid #ddd;
  border-radius: 3px;
  padding: 3px;
  right: 10px;
  opacity: 0;
  min-width: 110px;
  transition: 0.15s ease all;
  pointer-events: none;
}

.apexcharts-menu.apexcharts-menu-open {
  opacity: 1;
  pointer-events: all;
  transition: 0.15s ease all;
}

.apexcharts-menu-item {
  padding: 6px 7px;
  font-size: 12px;
  cursor: pointer;
}

.apexcharts-theme-light .apexcharts-menu-item:hover {
  background: #eee;
}

.apexcharts-theme-dark .apexcharts-menu {
  background: rgba(0, 0, 0, 0.7);
  color: #fff;
}

@media screen and (min-width: 768px) {
  .apexcharts-canvas:hover .apexcharts-toolbar {
    opacity: 1;
  }
}

.apexcharts-datalabel.apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-pie-label,
.apexcharts-datalabels,
.apexcharts-datalabel,
.apexcharts-datalabel-label,
.apexcharts-datalabel-value {
  cursor: default;
  pointer-events: none;
}

.apexcharts-pie-label-delay {
  opacity: 0;
  animation-name: opaque;
  animation-duration: 0.3s;
  animation-fill-mode: forwards;
  animation-timing-function: ease;
}

.apexcharts-canvas .apexcharts-element-hidden {
  opacity: 0;
}

.apexcharts-hide .apexcharts-series-points {
  opacity: 0;
}

.apexcharts-gridline,
.apexcharts-annotation-rect,
.apexcharts-tooltip .apexcharts-marker,
.apexcharts-area-series .apexcharts-area,
.apexcharts-line,
.apexcharts-zoom-rect,
.apexcharts-toolbar svg,
.apexcharts-area-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-line-series .apexcharts-series-markers .apexcharts-marker.no-pointer-events,
.apexcharts-radar-series path,
.apexcharts-radar-series polygon {
  pointer-events: none;
}


/* markers */

.apexcharts-marker {
  transition: 0.15s ease all;
}

@keyframes opaque {
  0% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}


/* Resize generated styles */

@keyframes resizeanim {
  from {
    opacity: 0;
  }
  to {
    opacity: 0;
  }
}

.resize-triggers {
  animation: 1ms resizeanim;
  visibility: hidden;
  opacity: 0;
}

.resize-triggers,
.resize-triggers>div,
.contract-trigger:before {
  content: " ";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  overflow: hidden;
}

.resize-triggers>div {
  background: #eee;
  overflow: auto;
}

.contract-trigger:before {
  width: 200%;
  height: 200%;
}</style><style id="smooth-scrollbar-style">
[data-scrollbar] {
  display: block;
  position: relative;
}

.scroll-content {
  -webkit-transform: translate3d(0, 0, 0);
          transform: translate3d(0, 0, 0);
}

.scrollbar-track {
  position: absolute;
  opacity: 0;
  z-index: 1;
  background: rgba(222, 222, 222, .75);
  -webkit-user-select: none;
     -moz-user-select: none;
      -ms-user-select: none;
          user-select: none;
  -webkit-transition: opacity 0.5s 0.5s ease-out;
          transition: opacity 0.5s 0.5s ease-out;
}
.scrollbar-track.show,
.scrollbar-track:hover {
  opacity: 1;
  -webkit-transition-delay: 0s;
          transition-delay: 0s;
}

.scrollbar-track-x {
  bottom: 0;
  left: 0;
  width: 100%;
  height: 8px;
}
.scrollbar-track-y {
  top: 0;
  right: 0;
  width: 8px;
  height: 100%;
}
.scrollbar-thumb {
  position: absolute;
  top: 0;
  left: 0;
  width: 8px;
  height: 8px;
  background: rgba(0, 0, 0, .5);
  border-radius: 4px;
}
</style></head>












<body class="sidebar-main">
    <!-- loader Start -->
    <div id="loading" style="display: none;">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->








    <div class="wrapper">
      <div class="iq-sidebar  sidebar-default  ">
          <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
               <a href="" class="header-logo">
                  <img src="static/picture/logo.png" class="img-fluid rounded-normal light-logo" alt="logo">
                  <img src="static/picture/logo-dark.png" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
                  <span>俄乌战争</span>            
              </a>
              <div class="side-menu-bt-sidebar-1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu open" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                      </svg>
                  </div>
          </div>


          <div class="data-scrollbar" data-scroll="1" data-scrollbar="true" tabindex="-1" style="overflow: hidden; outline: none;"><div class="scroll-content">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="side-menu">
                      <li class="active sidebar-layout">
                          <a href="<?php echo Yii::$app->getHomeUrl(); ?>" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">主页</span>
                              <p class="mb-0 w-10 badge badge-pill badge-primary">6</p>
                          </a>
                      </li>
                      <li class="px-3 pt-3 pb-2 ">
                          <span class="text-uppercase small font-weight-bold">团队管理</span>
                      </li>

                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                              <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">团队成员</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=our-team-mems" class="svg-icon">
                                      <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path>
                                      </svg>
                                      </i><span class="">成员展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=our-team-mems%2Fcreate" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                          </svg>
                                      </i><span class="">新建成员</span>
                                  </a>
                              </li>

                          </ul>
                      </li>


                      <li class="px-3 pt-3 pb-2 ">
                          <span class="text-uppercase small font-weight-bold">用户管理</span>
                      </li>

                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                              <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">用户</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=user" class="svg-icon">
                                      <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4"></path>
                                      </svg>
                                      </i><span class="">用户展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=user%2Fcreate" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                          </svg>
                                      </i><span class="">新建用户</span>
                                  </a>
                              </li>

                          </ul>
                      </li>



                      <li class="px-3 pt-3 pb-2 ">
                          <span class="text-uppercase small font-weight-bold">数据管理</span>
                      </li>


                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                            <i class="">
                                  <svg class="svg-icon" id="iq-chart-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" style="stroke-dasharray: 96, 116; stroke-dashoffset: 0;"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">新闻</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=news" class="svg-icon">
                                      <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                      </i><span class="">新闻展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=news%2Fcreate" class="svg-icon">
                                  <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                      </i><span class="">新建新闻</span>
                                  </a>
                              </li>

                          </ul>
                      </li>











                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">各国观点</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=countriesview" class="svg-icon">
                                      <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                      </i><span class="">观点展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=countriesview%2Fcreate" class="svg-icon">
                                  <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                      </i><span class="">新建观点</span>
                                  </a>
                              </li>

                          </ul>
                      </li>










                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                            <i class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">影响-能源</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=energy" class="svg-icon">
                                      <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                      </i><span class="">展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=energy%2Fcreate" class="svg-icon">
                                  <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                      </i><span class="">新建表项</span>
                                  </a>
                              </li>

                          </ul>
                      </li>


                      


                      <li class="sidebar-layout">
                          <a href="#app1" class="svg-icon" data-toggle="collapse" aria-expanded="false">
                            <i class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">影响-经济</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=economics" class="svg-icon">
                                      <i class="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                        </svg>
                                      </i><span class="">展示</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=energy%2Fcreate" class="svg-icon">
                                  <i class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                    </svg>
                                      </i><span class="">新建表项</span>
                                  </a>
                              </li>

                          </ul>
                      </li>




                      








                      <li class=" sidebar-layout">

                          <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=our-team-mems" class="svg-icon ">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">目录</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=our-team-mems%2Fcreate" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">新建成员</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=our-team-mems%2Fcreate" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">Order</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="invoice.html" class="svg-icon">
                              <i class="">
                                  <svg class="icon line" width="18" id="receipt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                      <path d="M17,16V3L13,5,10,3,7,5,3,3V17.83A3.13,3.13,0,0,0,5.84,21,3,3,0,0,0,9,18V17a1,1,0,0,1,1-1H20a1,1,0,0,1,1,1v1a3,3,0,0,1-3,3H6" style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                                      <line x1="8" y1="10" x2="12" y2="10" style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line>
                                  </svg> 
                              </i>
                              <span class="ml-2">Invoice</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="todo.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                  </svg>
                              </i><span class="ml-2">Todo</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="calendar.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">Calendar</span>
                              <p class="mb-0 px-2 badge badge-pill badge-success">New</p>
                          </a>
                      </li>

                      <li class="px-3 pt-3 pb-2 ">
                          <span class="text-uppercase small font-weight-bold">作业下载</span>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=teamhomework" class="svg-icon ">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">团队作业</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=personhomework" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">个人作业</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="order.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">Order</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="invoice.html" class="svg-icon">
                              <i class="">
                                  <svg class="icon line" width="18" id="receipt" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor">
                                      <path d="M17,16V3L13,5,10,3,7,5,3,3V17.83A3.13,3.13,0,0,0,5.84,21,3,3,0,0,0,9,18V17a1,1,0,0,1,1-1H20a1,1,0,0,1,1,1v1a3,3,0,0,1-3,3H6" style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path>
                                      <line x1="8" y1="10" x2="12" y2="10" style="fill: none; stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line>
                                  </svg> 
                              </i>
                              <span class="ml-2">Invoice</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="todo.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                  </svg>
                              </i><span class="ml-2">Todo</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="calendar.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">Calendar</span>
                              <p class="mb-0 px-2 badge badge-pill badge-success">New</p>
                          </a>
                      </li>


















                      <li class="px-3 pt-3 pb-2">
                          <span class="text-uppercase small font-weight-bold">Pages</span>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="<?php echo Yii::$app->getHomeUrl(); ?>?r=news" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                                  </svg>
                              </i><span class="ml-2">Chat</span>
                          </a>
                      </li>


                      <li class="sidebar-layout">
                          <a href="#app6" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">Error</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app6" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                              <li class=" sidebar-layout">
                                  <a href="pages-error.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                          </svg>
                                      </i>
                                      <span class="ml-2">Error 404</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="pages-error-500.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414"></path>
                                          </svg>
                                      </i>
                                      <span class="ml-2">Error 500</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="pages-comingsoon.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"></path>
                                  </svg>
                              </i><span class="ml-2">Comingsoon</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="pages-maintenance.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                  </svg>
                              </i><span class="ml-2">Maintenance</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="pages-blank-page.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                                  </svg>
                              </i><span class="ml-2">Blank Page</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="pages-faq.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2"></path>
                                  </svg>
                              </i><span class="ml-2">Faq</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="pricing.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                  </svg>
                              </i><span class="ml-2">Pricing</span>
                          </a>
                      </li>
                       <li class=" sidebar-layout">
                          <a href="timeline.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                  </svg>
                              </i><span class="ml-2">Timeline</span>
                          </a>
                      </li>
                      <li class="px-3 pt-3 pb-2">
                          <span class="text-uppercase small font-weight-bold">Components</span>
                      </li>
                      <li class="sidebar-layout">
                          <a href="#app2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg class="svg-icon" id="iq-ui-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" style="stroke-dasharray: 97, 117; stroke-dashoffset: 0;"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">UI Elements</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app2" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="ui-avatars.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-ui-1-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" style="stroke-dasharray: 90, 110; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Avatars</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-alerts.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" style="stroke-dasharray: 56, 76; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Alerts</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-badges.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" style="stroke-dasharray: 74, 94; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Badges</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-breadcrumb.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" style="stroke-dasharray: 48, 68; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Breadcrumb</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-buttons.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="{2}" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" style="stroke-dasharray: 72, 92; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Buttons</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-buttons-group.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-ui-1-5" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" style="stroke-dasharray: 90, 110; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Buttons Group</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-boxshadow.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" style="stroke-dasharray: 84, 104; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Box Shadow</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-colors.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" style="stroke-dasharray: 97, 117; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Colors</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-cards.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" style="stroke-dasharray: 79, 99; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Cards</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-carousel.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" style="stroke-dasharray: 133, 153; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Carousel</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-grid.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" style="stroke-dasharray: 83, 103; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Grid</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-images.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" style="stroke-dasharray: 85, 105; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Images</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-list-group.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                                          </svg>
                                      </i><span class="">list Group</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-media-object.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" style="stroke-dasharray: 90, 110; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Media</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-modal.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18" style="stroke-dasharray: 87, 107; stroke-dashoffset: 0;">
                                              </path>
                                          </svg>
                                      </i><span class="">Modal</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-notifications.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" style="stroke-dasharray: 63, 83; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Notifications</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-pagination.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-17" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" style="stroke-dasharray: 19, 39; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Pagination</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-popovers.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z"></path>
                                          </svg>
                                      </i><span class="">Popovers</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-progressbars.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                                          </svg>
                                      </i><span class="">Progressbars</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-typography.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-ui-1-20" xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" style="stroke-dasharray: 67, 87; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Typography</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-tabs.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-ui-1-21" xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" style="stroke-dasharray: 98, 118; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Tabs</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-tooltips.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                          </svg>
                                      </i><span class="">Tooltips</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="ui-embed-video.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-ui-1-23" xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Video</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="sidebar-layout">
                          <a href="#app3" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg class="svg-icon" id="iq-form-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" style="stroke-dasharray: 74, 94; stroke-dashoffset: 0;"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">Forms</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app3" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                              <li class="sidebar-layout">
                                  <a href="#form1" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-form-1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" style="stroke-dasharray: 61, 81; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i>
                                      <span class="">Form Control</span>
                                      <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                      </svg>
                                  </a>
                                  <ul id="form1" class="submenu collapse" data-parent="#app3">
                                      <li class=" sidebar-layout">
                                          <a href="form-layout.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                                  </svg>
                                              </i><span class="">Form Elements</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="form-input-group.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z"></path>
                                                  </svg>
                                              </i><span class="">Form Input</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">   
                                          <a href="form-validation.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                                  </svg>
                                              </i><span class="">Form Validation</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="form-switch.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
                                                  </svg>
                                              </i><span class="">Form Switch</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="form-chechbox.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                                  </svg>
                                              </i><span class="">Form Checkbox</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="form-radio.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                  </svg>
                                              </i><span class="">Form Radio</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="form-textarea.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                  </svg>
                                              </i><span class="">Form Textarea</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="sidebar-layout">
                                  <a href="#form2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-user-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                          </svg>
                                      </i>
                                      <span class="">Form Widget</span>
                                      <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                      </svg>
                                  </a>
                                  <ul id="form2" class="submenu collapse" data-parent="#app3">
                                      <li class=" sidebar-layout">
                                          <a href="form-datepicker.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                  </svg>
                                              </i><span class="">Datepicker</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="form-select.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122"></path>
                                                  </svg>
                                              </i><span class="">Select2</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="form-file-uploader.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                                  </svg>
                                              </i><span class="">File Upload</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="form-quill.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                                  </svg>
                                              </i><span class="">Form quill</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="sidebar-layout">
                          <a href="#app5" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">Table</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                              </svg>
                          </a>
                          <ul id="app5" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                              <li class=" sidebar-layout">
                                  <a href="tables-basic.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2"></path>
                                          </svg>
                                      </i>
                                      <span class="ml-2">Basic Tables</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="table-data.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path>
                                          </svg>
                                      </i>
                                      <span class="ml-2">Data Table</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="table-editable.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2"></path>
                                          </svg>
                                      </i>
                                      <span class="ml-2">Editable Table</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="chart-apex.html" class="svg-icon">
                              <i class="">
                                  <svg class="svg-icon" id="iq-chart-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" style="stroke-dasharray: 96, 116; stroke-dashoffset: 0;"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">Chart</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="icon-heroicon.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">Icon</span>
                          </a>
                      </li>  
                  </ul>
              </nav>
              <div class="pt-5 pb-5"></div>
          </div><div class="scrollbar-track scrollbar-track-x" style="display: none;"><div class="scrollbar-thumb scrollbar-thumb-x" style="width: 260px; transform: translate3d(0px, 0px, 0px);"></div></div><div class="scrollbar-track scrollbar-track-y" style="display: block;"><div class="scrollbar-thumb scrollbar-thumb-y" style="height: 1041.77px; transform: translate3d(0px, 0px, 0px);"></div></div></div>
      </div>
       <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="side-menu-bt-sidebar">
                      <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                      </svg>
                  </div>
                  <div class="d-flex align-items-center">
                      <div class="change-mode">
                          <div class="custom-control custom-switch custom-switch-icon custom-control-inline">
                              <div class="custom-switch-inner">
                                  <p class="mb-0"> </p>
                                  <input type="checkbox" class="custom-control-input" id="dark-mode" data-active="true">
                                  <label class="custom-control-label" for="dark-mode" data-mode="toggle">
                                      <span class="switch-icon-right">
                                          <svg xmlns="http://www.w3.org/2000/svg" id="h-moon" height="20" width="20" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"></path>
                                          </svg>
                                      </span>
                                      <span class="switch-icon-left">
                                          <svg xmlns="http://www.w3.org/2000/svg" id="h-sun" height="20" width="20" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                                          </svg>
                                      </span>
                                  </label>
                              </div>
                          </div>
                      </div>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                          <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                          </svg>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                     
                              <li class="nav-item nav-icon dropdown">
                                  <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="static/picture/flag.jpg" class="img-fluid rounded-circle" alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                                  <span class="bg-primary"></span>
                                  </a>
                              </li>

                              <li class="nav-item nav-icon dropdown">
                                  <a href="../../frontend/web">
                                  <span style="font-weight:bold",class="mb-0 ml-2 user-name">进入前台</span>
                                  </a>
                              </li>
                              
                              <li class="nav-item nav-icon dropdown">
                                  <a href="#" class="nav-item nav-icon dropdown-toggle pr-0 search-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <img src="static/picture/1.jpg" class="img-fluid avatar-rounded" alt="user">
                                      <span class="mb-0 ml-2 user-name"><?php echo Yii::$app->user->identity->username ?></span>
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                          </svg>
                                          <a href="<?php echo Yii::$app->getHomeUrl(); ?>">Home</a>
                                      </li>
    

                                      <li class="dropdown-item  d-flex svg-icon border-top">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                                          </svg>
                                          <form action="<?php echo Yii::$app->getHomeUrl(); ?>?r=site%2Flogout" method="post">
											<input type="hidden" name="_csrf-backend" value="<?= Yii::$app->request->csrfToken ?>">
											<button type="submit" class="btn btn-link logout"> logout</button>
										</form>                                    
                                    </li>
                                  </ul>
                              </li>
                          </ul>                     
                      </div> 
                  </div>
              </nav>
          </div>
      </div>
    <div class="content-page">
        <div class="container-fluid">
        
<div class="row">
            
            <div class="col-lg-15 col-md-15 col-sm-15 col-xs-15">


            
                <div class="container">
                    <?= Breadcrumbs::widget([
                        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                    ]) ?>
                    <?= Alert::widget() ?>
                    <?= $content ?>
                </div>




            </div>
            
        </div>
            <!-- Page end  -->
        </div>
    </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="mr-1">Copyright © 2021.Company name All rights reserved.</span>
                </div>
            </div>
        </div>
    </footer>    <!-- Backend Bundle JavaScript -->
    <script src="static/js/backend-bundle.min.js"></script>
    <!-- Chart Custom JavaScript -->
    <script src="static/js/customizer.js"></script>
    
    <script src="static/js/sidebar.js"></script>
    
    <!-- Flextree Javascript-->
    <script src="static/js/flex-tree.min.js"></script>
    <script src="static/js/tree.js"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="static/js/table-treeview.js"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="static/js/sweetalert.js"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="static/js/vector-map-custom.js"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="static/js/chart-custom.js"></script>
    <script src="static/js/01.js"></script>
    <svg id="SvgjsSvg1170" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;"><defs id="SvgjsDefs1171"></defs><polyline id="SvgjsPolyline1172" points="0,0"></polyline><path id="SvgjsPath1173" d="M-1 262.5L-1 262.5C-1 262.5 163.6153846153846 262.5 163.6153846153846 262.5C163.6153846153846 262.5 272.6923076923077 262.5 272.6923076923077 262.5C272.6923076923077 262.5 381.7692307692308 262.5 381.7692307692308 262.5C381.7692307692308 262.5 490.8461538461538 262.5 490.8461538461538 262.5C490.8461538461538 262.5 599.9230769230769 262.5 599.9230769230769 262.5C599.9230769230769 262.5 709 262.5 709 262.5C709 262.5 709 262.5 709 262.5 "></path></svg><script src="static/js/02.js"></script>
    
    <!-- slider JavaScript -->
    <script src="static/js/slider.js"></script>
    
    <!-- Emoji picker -->
    <script src="static/js/index.js" type="module"></script>
    
    
    <!-- app JavaScript -->
    <script src="static/js/app.js"></script><div class="datepicker datepicker-dropdown datepicker-orient-top datepicker-orient-left" style="top: 104.981px; left: 782.269px;"><div class="datepicker-picker"><div class="datepicker-header"><div class="datepicker-title" style="display: none;"></div><div class="datepicker-controls"><button type="button" class="button prev-btn">«</button><button type="button" class="button view-switch">February 2023</button><button type="button" class="button next-btn">»</button></div></div><div class="datepicker-main"><div class="datepicker-view"><div class="days"><div class="days-of-week"><span class="dow">Su</span><span class="dow">Mo</span><span class="dow">Tu</span><span class="dow">We</span><span class="dow">Th</span><span class="dow">Fr</span><span class="dow">Sa</span></div><div class="datepicker-grid"><span class="datepicker-cell day prev" data-date="1674921600000">29</span><span class="datepicker-cell day prev" data-date="1675008000000">30</span><span class="datepicker-cell day prev" data-date="1675094400000">31</span><span class="datepicker-cell day" data-date="1675180800000">1</span><span class="datepicker-cell day focused" data-date="1675267200000">2</span><span class="datepicker-cell day" data-date="1675353600000">3</span><span class="datepicker-cell day" data-date="1675440000000">4</span><span class="datepicker-cell day" data-date="1675526400000">5</span><span class="datepicker-cell day" data-date="1675612800000">6</span><span class="datepicker-cell day" data-date="1675699200000">7</span><span class="datepicker-cell day" data-date="1675785600000">8</span><span class="datepicker-cell day" data-date="1675872000000">9</span><span class="datepicker-cell day" data-date="1675958400000">10</span><span class="datepicker-cell day" data-date="1676044800000">11</span><span class="datepicker-cell day" data-date="1676131200000">12</span><span class="datepicker-cell day" data-date="1676217600000">13</span><span class="datepicker-cell day" data-date="1676304000000">14</span><span class="datepicker-cell day" data-date="1676390400000">15</span><span class="datepicker-cell day" data-date="1676476800000">16</span><span class="datepicker-cell day" data-date="1676563200000">17</span><span class="datepicker-cell day" data-date="1676649600000">18</span><span class="datepicker-cell day" data-date="1676736000000">19</span><span class="datepicker-cell day" data-date="1676822400000">20</span><span class="datepicker-cell day" data-date="1676908800000">21</span><span class="datepicker-cell day" data-date="1676995200000">22</span><span class="datepicker-cell day" data-date="1677081600000">23</span><span class="datepicker-cell day" data-date="1677168000000">24</span><span class="datepicker-cell day" data-date="1677254400000">25</span><span class="datepicker-cell day" data-date="1677340800000">26</span><span class="datepicker-cell day" data-date="1677427200000">27</span><span class="datepicker-cell day" data-date="1677513600000">28</span><span class="datepicker-cell day next" data-date="1677600000000">1</span><span class="datepicker-cell day next" data-date="1677686400000">2</span><span class="datepicker-cell day next" data-date="1677772800000">3</span><span class="datepicker-cell day next" data-date="1677859200000">4</span><span class="datepicker-cell day next" data-date="1677945600000">5</span><span class="datepicker-cell day next" data-date="1678032000000">6</span><span class="datepicker-cell day next" data-date="1678118400000">7</span><span class="datepicker-cell day next" data-date="1678204800000">8</span><span class="datepicker-cell day next" data-date="1678291200000">9</span><span class="datepicker-cell day next" data-date="1678377600000">10</span><span class="datepicker-cell day next" data-date="1678464000000">11</span></div></div></div></div><div class="datepicker-footer"><div class="datepicker-controls"><button type="button" class="button today-btn" style="display: none;">Today</button><button type="button" class="button clear-btn" style="display: none;">Clear</button></div></div></div></div><div class="datepicker datepicker-dropdown datepicker-orient-top datepicker-orient-left" style="top: 104.981px; left: 1036.42px;"><div class="datepicker-picker"><div class="datepicker-header"><div class="datepicker-title" style="display: none;"></div><div class="datepicker-controls"><button type="button" class="button prev-btn">«</button><button type="button" class="button view-switch">February 2023</button><button type="button" class="button next-btn">»</button></div></div><div class="datepicker-main"><div class="datepicker-view"><div class="days"><div class="days-of-week"><span class="dow">Su</span><span class="dow">Mo</span><span class="dow">Tu</span><span class="dow">We</span><span class="dow">Th</span><span class="dow">Fr</span><span class="dow">Sa</span></div><div class="datepicker-grid"><span class="datepicker-cell day prev" data-date="1674921600000">29</span><span class="datepicker-cell day prev" data-date="1675008000000">30</span><span class="datepicker-cell day prev" data-date="1675094400000">31</span><span class="datepicker-cell day" data-date="1675180800000">1</span><span class="datepicker-cell day focused" data-date="1675267200000">2</span><span class="datepicker-cell day" data-date="1675353600000">3</span><span class="datepicker-cell day" data-date="1675440000000">4</span><span class="datepicker-cell day" data-date="1675526400000">5</span><span class="datepicker-cell day" data-date="1675612800000">6</span><span class="datepicker-cell day" data-date="1675699200000">7</span><span class="datepicker-cell day" data-date="1675785600000">8</span><span class="datepicker-cell day" data-date="1675872000000">9</span><span class="datepicker-cell day" data-date="1675958400000">10</span><span class="datepicker-cell day" data-date="1676044800000">11</span><span class="datepicker-cell day" data-date="1676131200000">12</span><span class="datepicker-cell day" data-date="1676217600000">13</span><span class="datepicker-cell day" data-date="1676304000000">14</span><span class="datepicker-cell day" data-date="1676390400000">15</span><span class="datepicker-cell day" data-date="1676476800000">16</span><span class="datepicker-cell day" data-date="1676563200000">17</span><span class="datepicker-cell day" data-date="1676649600000">18</span><span class="datepicker-cell day" data-date="1676736000000">19</span><span class="datepicker-cell day" data-date="1676822400000">20</span><span class="datepicker-cell day" data-date="1676908800000">21</span><span class="datepicker-cell day" data-date="1676995200000">22</span><span class="datepicker-cell day" data-date="1677081600000">23</span><span class="datepicker-cell day" data-date="1677168000000">24</span><span class="datepicker-cell day" data-date="1677254400000">25</span><span class="datepicker-cell day" data-date="1677340800000">26</span><span class="datepicker-cell day" data-date="1677427200000">27</span><span class="datepicker-cell day" data-date="1677513600000">28</span><span class="datepicker-cell day next" data-date="1677600000000">1</span><span class="datepicker-cell day next" data-date="1677686400000">2</span><span class="datepicker-cell day next" data-date="1677772800000">3</span><span class="datepicker-cell day next" data-date="1677859200000">4</span><span class="datepicker-cell day next" data-date="1677945600000">5</span><span class="datepicker-cell day next" data-date="1678032000000">6</span><span class="datepicker-cell day next" data-date="1678118400000">7</span><span class="datepicker-cell day next" data-date="1678204800000">8</span><span class="datepicker-cell day next" data-date="1678291200000">9</span><span class="datepicker-cell day next" data-date="1678377600000">10</span><span class="datepicker-cell day next" data-date="1678464000000">11</span></div></div></div></div><div class="datepicker-footer"><div class="datepicker-controls"><button type="button" class="button today-btn" style="display: none;">Today</button><button type="button" class="button clear-btn" style="display: none;">Clear</button></div></div></div></div>  
</body>












</html>
<?php $this->endPage() ?>