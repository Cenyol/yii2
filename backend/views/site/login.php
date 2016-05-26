<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = '登录';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
    <title><?= Html::encode($this->title) . ' - ' . Yii::$app->name; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- STYLESHEETS --><!--[if lt IE 9]><script src="js/flot/excanvas.min.js"></script><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl;?>/css/cloud-admin.css" >
	
	<link href="<?= Yii::$app->request->baseUrl;?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- DATE RANGE PICKER -->
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl;?>/js/bootstrap-daterangepicker/daterangepicker-bs3.css" />
	<!-- UNIFORM -->
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl;?>/js/uniform/css/uniform.default.min.css" />
	<!-- ANIMATE -->
	<link rel="stylesheet" type="text/css" href="<?= Yii::$app->request->baseUrl;?>/css/animatecss/animate.min.css" />
</head>
<body class="login">	
	<!-- PAGE -->
	<section id="page">
			<!-- HEADER -->
			<header>
				<!-- NAV-BAR -->
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div id="logo">
								<a href="index.html"><img src="<?= Yii::$app->request->baseUrl;?>/img/logo/logo-alt.png" height="40" alt="logo name" /></a>
							</div>
						</div>
					</div>
				</div>
				<!--/NAV-BAR -->
			</header>
			<!--/HEADER -->
			<!-- LOGIN -->
			<section id="login" class="visible">
				<div class="container">
					<div class="row">
						<div class="col-md-4 col-md-offset-4">
							<div class="login-box-plain">
								
                                <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
                    
                                <?= $form->field($model, 'username')->textInput(['style' => 'padding-left:8px !important;']) ?>
                
                                <?= $form->field($model, 'password')->passwordInput(['style' => 'padding-left:8px !important;']) ?>
                
                                <div class="form-actions">
                                    <?= $form->field($model, 'rememberMe')->checkbox(['class'=>"uniform"]) ?>
                                    <?= Html::submitButton($this->title, ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                                </div>
                                    
                                <?php ActiveForm::end(); ?>
            
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--/LOGIN -->
	</section>
	<!--/PAGE -->
	<!-- JAVASCRIPTS -->
	<!-- Placed at the end of the document so the pages load faster -->
	<!-- JQUERY -->
	<script src="<?= Yii::$app->request->baseUrl;?>/js/jquery/jquery-2.0.3.min.js"></script>
	<!-- JQUERY UI-->
	<script src="<?= Yii::$app->request->baseUrl;?>/js/jquery-ui-1.10.3.custom/js/jquery-ui-1.10.3.custom.min.js"></script>
	<!-- BOOTSTRAP -->
	<script src="<?= Yii::$app->request->baseUrl;?>/bootstrap-dist/js/bootstrap.min.js"></script>
	
	
	<!-- UNIFORM -->
	<script type="text/javascript" src="<?= Yii::$app->request->baseUrl;?>/js/uniform/jquery.uniform.min.js"></script>
	<!-- CUSTOM SCRIPT -->
	<script src="<?= Yii::$app->request->baseUrl;?>/js/script.js"></script>
	<script>
		jQuery(document).ready(function() {		
			App.setPage("login");  //Set current page
			App.init(); //Initialise plugins and elements
		});
	</script>
	<script type="text/javascript">
		function swapScreen(id) {
			jQuery('.visible').removeClass('visible animated fadeInUp');
			jQuery('#'+id).addClass('visible animated fadeInUp');
		}
	</script>
	<!-- /JAVASCRIPTS -->
</body>
</html>