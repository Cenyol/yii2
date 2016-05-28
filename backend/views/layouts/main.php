<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;
use common\models\Utils;
use yii\helpers\Url;
use common\models\SystemDict;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) . ' - ' . Yii::$app->name; ?></title>
    
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl;?>/css/cloud-admin.css" >
	<link rel="stylesheet" type="text/css"  href="<?= Yii::$app->request->baseUrl;?>/css/themes/default.css" id="skin-switcher" >
	<link rel="stylesheet" type="text/css"  href="<?= Yii::$app->request->baseUrl;?>/css/responsive.css" >
	
	<link href="<?= Yii::$app->request->baseUrl;?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl;?>/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- FUELUX TREE -->
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl;?>/js/fuelux-tree/fuelux.min.css" />
	<!-- FONTS -->
	<link href='http://fonts.useso.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
	
	<!-- JQUERY 
	<script src="<?= Yii::$app->request->baseUrl;?>/js/jquery/jquery-2.0.3.min.js"></script>
	-->
	
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

	<!-- HEADER -->
	<header class="navbar clearfix" id="header">
		<div class="container">
				<div class="navbar-brand">
					<!-- COMPANY LOGO -->
					<a href="index.html">
						<img src="<?= Yii::$app->request->baseUrl;?>/img/logo/logo.png" alt="Cloud Admin Logo" class="img-responsive" height="30" width="120">
					</a>
					<!-- /COMPANY LOGO -->
					<!-- TEAM STATUS FOR MOBILE -->
					<div class="visible-xs">
						<a href="#" class="team-status-toggle switcher btn dropdown-toggle">
							<i class="fa fa-users"></i>
						</a>
					</div>
					<!-- /TEAM STATUS FOR MOBILE -->
					
					
					<div id="sidebar-collapse" class="sidebar-collapse btn">
						<i class="fa fa-bars" data-icon1="fa fa-bars" data-icon2="fa fa-bars"></i>
					</div>
					
					
				</div>
				<!-- BEGIN TOP NAVIGATION MENU -->					
				<ul class="nav navbar-nav pull-right">
					
					
					<!-- BEGIN INBOX DROPDOWN 右上角，信箱-->
					<!-- 
					<li class="dropdown" id="header-message">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-envelope"></i>
						<span class="badge">3</span>
						</a>
						<ul class="dropdown-menu inbox">
							<li class="dropdown-title">
								<span><i class="fa fa-envelope-o"></i> 2 Messages</span>
								<span class="compose pull-right tip-right" title="Compose message"><i class="fa fa-pencil-square-o"></i></span>
							</li>
							<li>
								<a href="#">
									<img src="<?= Yii::$app->request->baseUrl;?>/img/avatars/avatar2.jpg" alt="" />
									<span class="body">
										<span class="from">Jane Doe</span>
										<span class="message">
										Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole ...
										</span> 
										<span class="time">
											<i class="fa fa-clock-o"></i>
											<span>Just Now</span>
										</span>
									</span>
									 
								</a>
							</li>
							<li>
								<a href="#">
									<img src="<?= Yii::$app->request->baseUrl;?>/img/avatars/avatar1.jpg" alt="" />
									<span class="body">
										<span class="from">Vince Pelt</span>
										<span class="message">
										Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse mole ...
										</span> 
										<span class="time">
											<i class="fa fa-clock-o"></i>
											<span>15 min ago</span>
										</span>
									</span>
									 
								</a>
							</li>
							<li class="footer">
								<a href="#">See all messages <i class="fa fa-arrow-circle-right"></i></a>
							</li>
						</ul>
					</li>
					 -->
					<!-- END INBOX DROPDOWN -->
					
					<!-- BEGIN USER LOGIN DROPDOWN 右上角用户设置-->
					<li class="dropdown user" id="header-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<img alt="" src="<?= Yii::$app->request->baseUrl;?>/img/avatars/avatar3.jpg" />
							<span class="username">Cenyol</span>
							<i class="fa fa-angle-down"></i>
						</a>
						<ul class="dropdown-menu">
<!-- 							<li><a href="#"><i class="fa fa-user"></i> My Profile</a></li> -->
<!-- 							<li><a href="#"><i class="fa fa-cog"></i> Account Settings</a></li> -->
<!-- 							<li><a href="#"><i class="fa fa-eye"></i> Privacy Settings</a></li> -->
							<li><a href="<?php echo Url::toRoute(['site/logout'], true)?>"><i class="fa fa-power-off"></i> 退出</a></li>
						</ul>
					</li>
					<!-- END USER LOGIN DROPDOWN -->
				</ul>
				<!-- END TOP NAVIGATION MENU -->
		</div>
		
	</header>
	<!--/HEADER -->
	
	<!-- PAGE -->
	<section id="page">
				<!-- SIDEBAR -->
				
				<div id="sidebar" class="sidebar">
					<div class="sidebar-menu nav-collapse">
						<div class="divide-20"></div>
                        <?php
                            $menuItems = [
                                // 图标网页：http://getbootstrap.com/components/
                                ['label' => '<i class="fa fa-tachometer fa-fw"></i> <span class="menu-text">'.Yii::t('app', 'site-index') . '</span>', 'url' => ['/site/index']],
                                [
                                    'label' => '<span class="am-icon-wrench"></span> '.Yii::t('app', 'system-settings').' <span class="am-icon-angle-right am-fr am-margin-right"></span>',
                                    'options' => [
                                        'class' => 'am-parent',
                                    ],
                                    'linkOptions' => [
                                        'class' => 'am-cf',
                                        'data-am-collapse' => "{target: '#collapse-nav1'}",
                                    ],
                                    'items'=>[
                                        [
                                        	'label'=>'设置1',
                                            'url'=>['/site/index'],
                                    	],
                                    ]
                                    
                                ],
                            ];
                            if (Yii::$app->user->isGuest) {
                                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                            } else {
                                $menuItems[] = [
                                    'label' => '<span class="am-icon-sign-out"></span> 退出 (' . Yii::$app->user->identity->username . ')',
                                    'url' => ['/site/logout'],
                    //                 'linkOptions' => ['data-method' => 'post']
                                ];
                            }
                            echo Nav::widget([
                                'id' => '',
                                'options' => ['class' => ''],
                                'items' => $menuItems,
                                'encodeLabels' => false,
                            ]);
                        ?>
					</div>
				</div>
				<!-- /SIDEBAR -->
		<div id="main-content">
			<!-- SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="modal fade" id="box-config" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					  <h4 class="modal-title">Box Settings</h4>
					</div>
					<div class="modal-body">
					  Here goes box setting content.
					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					  <button type="button" class="btn btn-primary">Save changes</button>
					</div>
				  </div>
				</div>
			  </div>
			<!-- /SAMPLE BOX CONFIGURATION MODAL FORM-->
			<div class="container">
				<div class="row">
					<div id="content" class="col-lg-12">
					   <?php echo $content;?>
					</div><!-- /CONTENT-->
				</div>
			</div>
		</div>
	</section>
	<!--/PAGE -->

	<script>
		jQuery(document).ready(function() {		
			App.setPage("index");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	<!-- /JAVASCRIPTS -->
	
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
	