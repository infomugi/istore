<!DOCTYPE html>
<html lang="en">
<head>

	<?php
  $baseUrl = Yii::app()->theme->baseUrl; 
	$url = Yii::app()->baseUrl."/index.php?r="; 
	$cs = Yii::app()->getClientScript();
	Yii::app()->clientScript->registerCoreScript('jquery');
	?>


	<!-- Basic page needs -->
	<meta charset="utf-8">
<!--[if IE]>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <![endif]-->
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo CHtml::encode(Yii::app()->name); ?></title>
  <meta name="description" content="">

  <!-- Mobile specific metas  -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Favicon  -->
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo $baseUrl;?>/favicon.ico">

  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=PT+Sans:400,700italic,700,400italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Arimo:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Dosis:400,300,200,500,600,700,800' rel='stylesheet' type='text/css'>

  <!-- CSS Style -->

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/frontend/css/bootstrap.min.css">

  <!-- font-awesome & simple line icons CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/frontend/css/font-awesome.css" media="all">
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/frontend/css/simple-line-icons.css" media="all">

  <!-- owl.carousel CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/frontend/css/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/frontend/css/owl.theme.css">
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/frontend/css/owl.transitions.css">

  <!-- animate CSS  -->
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/frontend/css/animate.css" media="all">

  <!-- flexslider CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/frontend/css/flexslider.css" >

  <!-- jquery-ui.min CSS  -->
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/frontend/css/jquery-ui.css">

  <!-- Revolution Slider CSS -->
  <link href="<?php echo $baseUrl;?>/css/revolution-slider.css" rel="stylesheet">

  <!-- style CSS -->
  <link rel="stylesheet" type="text/css" href="<?php echo $baseUrl;?>/frontend/css/style.css" media="all">
</head>

<body class="cms-index-index cms-home-page">