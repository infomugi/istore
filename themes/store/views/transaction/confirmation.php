<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	'Konfirmasi',
	);

$this->pageTitle='Konfirmasi Pembayaran';
?>

<!-- Main Container -->
<section class="main-container col1-layout">
	<div class="main container">
		<div class="col-main">
			<div class="cart">

				<div class="page-content page-order"><div class="page-title">
					<h2><?PHP echo $this->pageTitle; ?></h2>
				</div>


				<div class="order-detail-content">

					<HR>

						<?php echo $this->renderPartial('_form_confirmation', array('model'=>$model)); ?>

					</div>

				</div>
			</div>
		</div>
	</div>
</section>

				<style type="text/css">
					.framed-box{border: 1px solid #e3e3e3; width: 100%}.framed-box.center{text-align: center}.framed-box-wrap{border: 1px solid #fff; background-color: #f9f9f9}.framed-box-wrap .pricing-title{background-color: #f1f1f1; padding: 20px 0 0; text-align: center; border-bottom: 1px solid #fff}.framed-box-wrap .pricing-text-list{padding: 15px 20px 20px; text-align: center}
					.framed-box-wrap .pricing-title2{background-color: #b9b8bd; border-bottom: 1px solid #fff; padding: 10px 0; text-align: center; color: #f9f9fb}
					.list7 ol,li{list-style: none;margin: 0;padding: 0;}
				</style>