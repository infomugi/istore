<?php
/* @var $this ProductController */
/* @var $model Product */

$this->breadcrumbs=array(
  'Products'=>array('index'),
  $model->name,
  );

  $this->pageTitle='Detail Product';
  ?>
<div class="main-container col1-layout">
  <div class="container">
    <div class="row">
      <div class="col-main">
        <div class="product-view-area">
          <div class="product-big-image col-xs-12 col-sm-5 col-lg-5 col-md-5">
            <div class="icon-sale-label sale-left">Sale</div>
            <div class="large-image"> 
            <a href='<?php echo YII::app()->baseUrl."/image/product/big/".$model->image; ?>' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: '<?php echo YII::app()->baseUrl."/image/product/big/".$model->image; ?>' ">
            <img src="<?php echo YII::app()->baseUrl."/image/product/big/".$model->image; ?>" alt="<?php echo $model->name; ?>"/>

            </a> 

            </div>
            <!--  
            <div class="flexslider flexslider-thumb">
              <ul class="previews-list slides">
                <li><a href='images/products/img01.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/products/img01.jpg' "><img src="images/products/img01.jpg" alt = "Thumbnail 2"/></a></li>
                <li><a href='images/products/img07.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/products/img07.jpg' "><img src="images/products/img07.jpg" alt = "Thumbnail 1"/></a></li>
                <li><a href='images/products/img02.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/products/img02.jpg' "><img src="images/products/img02.jpg" alt = "Thumbnail 1"/></a></li>
                <li><a href='images/products/img03.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/products/img03.jpg' "><img src="images/products/img03.jpg" alt = "Thumbnail 2"/></a></li>
                <li><a href='images/products/img04.jpg' class='cloud-zoom-gallery' rel="useZoom: 'zoom1', smallImage: 'images/products/img04.jpg' "><img src="images/products/img04.jpg" alt = "Thumbnail 2"/></a></li>
              </ul>
            </div> 
            -->
              
            <!-- end: more-images --> 
            
          </div>
          <div class="col-xs-12 col-sm-7 col-lg-7 col-md-7 product-details-area">
       
              <div class="product-name">
                <h1><?php echo $model->name;?></h1>
              </div>
              <div class="price-box">
                <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"><?php echo Yii::app()->numberFormatter->format("Rp ###,###,###",$model->price*$model->discount/100);?> </span> </p>
                <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> <?php echo Yii::app()->numberFormatter->format("Rp ###,###,###",$model->price);?> </span> </p>
                <i class="fa fa-heart pull-right"> <?php echo $model->likes; ?></i>
                <i class="fa fa-eye pull-right"> <?php echo $model->views; ?> |</i>
              </div>
              <div class="ratings">
                <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Your Review</a> </p> | 
                
                <p class="availability in-stock pull-right">Availability: <span><?php echo Product::model()->color($model->color); ?></span></p>
              </div>
              <div class="short-description">
                <h2>Spesification</h2>
                <p><?php echo $model->spesification; ?></p>
               
              </div>
              <div class="product-color-size-area">
                <div class="color-area">
                  <h2 class="saider-bar-title">Color</h2>
                  <div class="color">
                    <ul>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                    </ul>
                  </div>
                </div>
                
              </div>
              <div class="product-variation">
                <form action="#" method="post">
                  <div class="cart-plus-minus">
                    <label for="qty">Quantity:</label>
                    <div class="numbers-row">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="dec qtybutton"><i class="fa fa-minus">&nbsp;</i></div>
                      <input type="text" class="qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                      <div onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="inc qtybutton"><i class="fa fa-plus">&nbsp;</i></div>
                    </div>
                  </div>

                  <?php echo CHtml::link('<span><i class="fa fa-shopping-cart"></i> Add to Cart</span>',
                    array('order/create', 'product'=>$model->id_product),
                    array('class' => 'btn btn-primary' ,'title'=>'Add Product', 'type'=>'button', 
                          'style'=>"padding-bottom: 8px; padding-top: 8px;"));
                   ?>  
                </form>
              </div>
              <div class="product-cart-option">
                <ul>
                  <li><a href="#"><i class="fa fa-heart"></i><span>Add to Wishlist</span></a></li>
                  <li><a href="#"><i class="fa fa-retweet"></i><span>Add to Compare</span></a></li>
                </ul>
           
            </div>
          </div>
        </div>
      </div>
      <div class="product-overview-tab">
        <div class="container">
          <div class="row">
            <div class="col-xs-12"><div class="product-tab-inner"> 
              <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                <li class="active"> <a href="#" data-toggle="tab"> Description </a> </li>
              </ul>
              <div id="productTabContent" class="tab-content">
                <div class="tab-pane fade in active" id="description">
                  <div class="std">
                    <p><?php echo $model->description; ?></p>
                  </div>
                </div>
              </div>
            </div></div>
          </div>
        </div>
      </div>
    </div>
</div>        