              <ul class="data-grid">
                <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 ">
                  <div class="product-item">
                    <div class="item-inner">
                      <div class="product-thumbnail">
                        <div class="icon-sale-label sale-left"><?php echo $data->sales?></div>
                        <div class="icon-new-label new-right"><?php echo Product::model()->status($data->status)?></div>
                        <div class="pr-img-area"> <?php echo CHtml::link('', 
                              array('Product/views', 'id'=>$data->id_product
                              ),  array('title'=>'View Product'));
                            ?>
                          <figure> <img class="first-img" src="<?php echo YII::app()->baseUrl."/image/product/big/".$data->image; ?>" alt=""> <img class="hover-img" src="<?php echo YII::app()->baseUrl."/image/product/big/".$data->image; ?>" alt=""></figure>
                          </a>
                          <?php echo CHtml::link('<span><i class="fa fa-shopping-cart"></i> Add to Cart</span>',
                          array('order/create', 'product'=>$data->id_product),
                          array('class' => 'add-to-cart-mt' ,'title'=>'Add Product', 'type'=>'button'));
                          ?>  
                        </div>
                        <div class="pr-info-area">
                          <div class="pr-button">
                            <div class="mt-button add_to_wishlist">
                            <?php echo CHtml::link('<i class="fa fa-heart"></i> ', 
                              array('Product/likes', 'id'=>$data->id_product
                              ),  array('title'=>'Like Product'));
                            ?>                              
                            </div>
                            <div class="mt-button add_to_compare"> <a href="compare.html"> <i class="fa fa-signal"></i> </a> </div>
                            <div class="mt-button quick-view">
                            <?php echo CHtml::link('<i class="fa fa-search"></i> ', 
                              array('Product/views', 'id'=>$data->id_product,
                              ),  array('title'=>'View Product'));
                            ?>
                            </div>
                                
                          </div>
                        </div>
                      </div>
                      <div class="item-info">
                        <div class="info-inner">
                          <div class="item-title"> <a title="Ipsums Dolors Untra" href="single_product.html"><?php echo $data->name?> </a> </div>
                          <div class="item-content">
                            <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                            <div class="item-price">
                              <div class="price-box"> <span class="regular-price"> <span class="price"><?php echo Yii::app()->numberFormatter->format("Rp ###,###,###",$data->price)?></span> </span> </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>