<?php
/* @var $this SiteController */
$this->pageTitle='Dashboard';
$customer = Yii::app()->db->createCommand('SELECT COUNT(id_user) FROM user WHERE status = 1')->queryScalar();
$product = Yii::app()->db->createCommand('SELECT COUNT(id_product) FROM product WHERE status = 1')->queryScalar();
$category = Yii::app()->db->createCommand('SELECT COUNT(id_category) FROM category WHERE status = 1')->queryScalar();
$tag = Yii::app()->db->createCommand('SELECT COUNT(id_category_sub) FROM category_sub WHERE status = 1')->queryScalar();
?>

	<div class="row">
		<div class="col-md-3 col-sm-6 col-xs-12">
			<section class="panel">
				<div class="panel-body">
					<div class="circle-icon bg-success">
						<i class="fa fa-user"></i>
					</div>
					<div>
						<h3 class="no-margin"><?php echo $customer; ?></h3>
						Customer
					</div>
				</div>
			</section>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<section class="panel">
				<div class="panel-body">
					<div class="circle-icon bg-danger">
						<i class="fa fa-archive"></i>
					</div>
					<div>
						<h3 class="no-margin"><?php echo $product; ?></h3>
						Product
					</div>
				</div>
			</section>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<section class="panel">
				<div class="panel-body">
					<div class="circle-icon bg-default">
						<i class="fa fa-tags"></i>
					</div>
					<div>
						<h3 class="no-margin"><?php echo $category; ?></h3>
						Category
					</div>
				</div>
			</section>
		</div>
		<div class="col-md-3 col-sm-6 col-xs-12">
			<section class="panel">
				<div class="panel-body">
					<div class="circle-icon bg-default">
						<i class="fa fa-tasks"></i>
					</div>
					<div>
						<h3 class="no-margin"><?php echo $tag; ?></h3>
						Tag
					</div>
				</div>
			</section>
		</div>		

	</div>
	</div>