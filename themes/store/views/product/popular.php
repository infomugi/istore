<div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-12 col-xs-12">
          <div class="shop-inner">
            <div class="product-grid-area">

<?php 
	$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_viewPopular',
	'summaryText'=>'',
)); ?>
 			</div>
            <div class="pagination-area ">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>