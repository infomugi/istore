<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo CHtml::encode(Yii::app()->name); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Mugi Rachmat">

	<?php
	$baseUrl = Yii::app()->theme->baseUrl; 
	$cs = Yii::app()->getClientScript();
	Yii::app()->clientScript->registerCoreScript('jquery');
	?>

	<link href="<?php echo $baseUrl;?>/assets/css/custom.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseUrl;?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseUrl;?>/assets/css/color.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseUrl;?>/assets/css/responsive.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseUrl;?>/assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseUrl;?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link href="<?php echo $baseUrl;?>/assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="./images/logo.png" type="image/x-icon">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,500,700,900' rel='stylesheet' type='text/css'>


</head>

<body class="theme-style-1">

	<div id="wrapper">
		<header id="header">
			<div class="container">
				<div class="navigation-col">
					<nav class="navbar navbar-inverse">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
							<strong class="logo"><a href="index.html"><img src="images/logo.png" width="60%" alt="logo"></a></strong> 
						</div>
						<div id="navbar" class="collapse navbar-collapse">
							<ul class="nav navbar-nav" id="nav">
								<?php require_once('tpl_navigation.php');?>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</header>

		<section id="inner-banner">
			<div class="container">
				<h1><?php echo CHtml::encode($this->pageTitle); ?></h1>
			</div>
		</section>

		<div id="main">
		
									<?php echo $content; ?>
	
		</div>


	</div>
	<script src="<?php echo $baseUrl;?>/assets/js/momenjs.js"></script>
	<script src="<?php echo $baseUrl;?>/assets/js/bootstrap.min.js"></script>
	<script src="<?php echo $baseUrl;?>/assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo $baseUrl;?>/assets/js/jquery.velocity.min.js"></script>
	<script src="<?php echo $baseUrl;?>/assets/js/jquery.kenburnsy.js"></script>
	<script src="<?php echo $baseUrl;?>/assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
	<script src="<?php echo $baseUrl;?>/assets/js/jquery.counterup.min.js"></script>
	<script src="<?php echo $baseUrl;?>/assets/js/custom.js"></script>

</body>
</html>
