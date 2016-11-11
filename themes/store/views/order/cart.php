<?php
/* @var $this OrderController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Orders',
	);

$this->pageTitle='Cart';

$jumlahbeli = Yii::app()->db->createCommand('
  SELECT SUM(quantity) 
  FROM transaction_detail 
  WHERE STATUS = 0 
  GROUP by customer_id
  ')->queryScalar();

?>

<!-- Main Container -->
<section class="main-container col1-layout">
	<div class="main container">
		<div class="col-main">
			<div class="cart">

				<div class="page-content page-order"><div class="page-title">
					<h2>Shopping Cart</h2>
				</div>

				<div class="order-detail-content">
					<div class="table-responsive">
						<table class="table table-bordered cart_summary">
							<thead>
								<tr>
									<th class="cart_product">Product</th>
									<th>Description</th>
									<th>Avail.</th>
									<th>Unit price</th>
									<th>Qty</th>
									<th>Total</th>
									<th  class="action"><i class="fa fa-trash-o"></i></th>
								</tr>
							</thead>
							<tbody>

								<?php 
								$this->widget('zii.widgets.CListView', array(
									'dataProvider'=>$dataProvider,
									'itemView'=>'_view_cart',
									)); ?>

								</tbody>
								<tfoot>
									<tr>
										<td colspan="2" rowspan="2"></td>

									</tr>
									<tr>
										<td colspan="3"><strong>Total</strong></td>
										<td colspan="2"><strong>$<?php echo $jumlahbeli; ?> </strong></td>
									</tr>
								</tfoot>
							</table>
						</div>
						<div class="cart_navigation"> <a class="continue-btn" href="#" onClick="backAway()"><i class="fa fa-arrow-left"> </i> Continue Shopping</a> <a class="checkout-btn" href="<?php echo Yii::app()->baseUrl; ?>/index.php?r=order/checkout"><i class="fa fa-check"></i> Proceed to Checkout</a> </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Footer -->


<script>
    function backAway(){
        if(history.length === 1){
            window.location = "http://localhost/kkstore/"
        } else {
            history.back();
        }
    }
</script>



