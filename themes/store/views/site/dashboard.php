<?php
/* @var $this SiteController */
$this->pageTitle='Dashboard';
$customer = Yii::app()->db->createCommand('SELECT COUNT(id_user) FROM user WHERE status = 1')->queryScalar();
$sales = Yii::app()->db->createCommand('SELECT COUNT(id_transaction) FROM transaction WHERE status = 3 AND month(date_order)='.date('m').'')->queryScalar();
$payment = Yii::app()->db->createCommand('SELECT SUM(payment_total) FROM transaction WHERE status = 3 AND month(date_order)='.date('m').'')->queryScalar();
?>

<div class="row">
	<div class="col-md-4 col-sm-6 col-xs-12">
		<section class="panel">
			<div class="panel-body">
				<div class="circle-icon bg-info">
					<i class="fa fa-user"></i>
				</div>
				<div>
					<h3 class="no-margin"><?php echo $customer; ?></h3>
					Pelanggan Bulan ini
				</div>
			</div>
		</section>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-12">
		<section class="panel">
			<div class="panel-body">
				<div class="circle-icon bg-warning">
					<i class="fa fa-archive"></i>
				</div>
				<div>
					<h3 class="no-margin"><?php echo $sales; ?></h3>
					Penjualan Bulan Ini
				</div>
			</div>
		</section>
	</div>
	<div class="col-md-4 col-sm-6 col-xs-12">
		<section class="panel">
			<div class="panel-body">
				<div class="circle-icon bg-success">
					<i class="fa fa-tags"></i>
				</div>
				<div>
					<h3 class="no-margin"><?php echo Yii::app()->numberFormatter->format("Rp ###,###,###",$payment); ?></h3>
					Pendapatan Bulan Ini
				</div>
			</div>
		</section>
	</div>

	<div class="col-md-12 col-sm-12 col-xs-12 hidden-xs">
		<section class="panel">
			<div class="panel-body">
			
			<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
		
			<?php 
			echo $this->renderPartial('dashboard_transaction', array(
			'dataProvider1'=>$dataProvider1,
			'dataProvider2'=>$dataProvider2,
			'dataProvider3'=>$dataProvider3,
			'dataProvider4'=>$dataProvider4,
			'dataProvider5'=>$dataProvider5
			)); ?>


			</div>
			</section>
		</div>

		</div>
