<div class="main-container col1-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-12 col-xs-12">
          <div class="shop-inner">
            <div class="page-title">
              <h2> Furnitur</h2>
            </div>
            <div class="product-grid-area">
              <ul class="products-grid">
                  <?php 
                      foreach($Product as $Products)
                      {
                  ?>
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left"><?php echo $Products->sales?></div>
                        <div class="icon-new-label new-right"><?php echo Product::model()->status($model->status)?></div>
                        <div class="pr-img-area"> <?php echo CHtml::link('', 
                              array('Product/views', 'id'=>$Products->id_product
                              ),  array('title'=>'View Product'));
                            ?>
                          <figure> <img class="first-img" src="<?php echo YII::app()->baseUrl."/image/product/big/".$Products->image; ?>" alt=""> <img class="hover-img" src="<?php echo YII::app()->baseUrl."/image/product/big/".$Products->image; ?>" alt=""></figure>
                          </a>
                          <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                        </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist">
                            <?php echo CHtml::link('<i class="fa fa-heart"></i> ', 
                              array('Product/likes', 'id'=>$Products->id_product
                              ),  array('title'=>'Like Product'));
                            ?>                              
                            </div>
                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                            <div class="mt-button quick-view">
                            <?php echo CHtml::link('<i class="fa fa-search"></i> ', 
                              array('Product/views', 'id'=>$Products->id_product,
                              ),  array('title'=>'View Product'));
                            ?>
                            </div>
                                
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html"><?php echo $Products->name?> </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price"><?php echo Yii::app()->numberFormatter->format("Rp ###,###,###",$Products->price)?></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php
                }
                ?>
              </ul>
            </div>
            <div class="pagination-area ">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>