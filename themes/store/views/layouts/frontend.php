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
	<link href="<?php echo $baseUrl;?>/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="icon" href="./images/logo.png" type="image/x-icon">



</head>

<body class="theme-style-1">

	<?php echo $content; ?>

</body>

<script src="<?php echo $baseUrl;?>/assets/js/momenjs.js"></script>
<script src="<?php echo $baseUrl;?>/assets/js/bootstrap.min.js"></script>

</body>
</html>
