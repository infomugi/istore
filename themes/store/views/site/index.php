<?php
$baseUrl = Yii::app()->theme->baseUrl; 
?>

<!-- main container -->
<div class="main-container col1-layout">
     <div class="container">
          <div class="row"> 

               <!-- Home Tabs  -->
               <div class="col-sm-8 col-md-9 col-xs-12">
                    <div class="home-tab">
                         <ul class="nav home-nav-tabs home-product-tabs">
                              <li class="active"><a href="<?php echo $baseUrl;?>/index.html#featured" data-toggle="tab" aria-expanded="false">Featured products</a></li>
                              <li class="divider"></li>
                              <li> <a href="<?php echo $baseUrl;?>/index.html#top-sellers" data-toggle="tab" aria-expanded="false">Top Sellers</a> </li>
                        </ul>
                        <div id="productTabContent" class="tab-content">
                              <div class="tab-pane active in" id="featured">
                                   <div class="featured-pro">
                                        <div class="slider-items-products">
                                             <div id="featured-slider" class="product-flexslider hidden-buttons">
                                                  <div class="slider-items slider-width-col4">
                                                       <div class="product-item">
                                                            <div class="item-inner">
                                                                 <div class="product-thumbnail">
                                                                      <div class="icon-sale-label sale-left">Sale</div>
                                                                      <div class="icon-new-label new-right">New</div>
                                                                      <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
                                                                           <figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img01.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img01.jpg" alt=""></figure>
                                                                     </a>
                                                                     <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                                               </div>
                                                               <div class="pr-info-area">
                                                                <div class="pr-button">
                                                                     <div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                                                     <div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                                                     <div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                                               </div>
                                                         </div>
                                                   </div>
                                                   <div class="item-info">
                                                     <div class="info-inner">
                                                          <div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
                                                          <div class="item-content">
                                                               <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                                               <div class="item-price">
                                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                              </div>
                                                        </div>
                                                  </div>
                                            </div>
                                      </div>
                                </div>
                                <div class="product-item">
                                     <div class="item-inner">
                                          <div class="product-thumbnail">
                                               <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
                                                    <figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img02.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img02.jpg" alt=""></figure>
                                              </a>
                                              <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                        </div>
                                        <div class="pr-info-area">
                                         <div class="pr-button">
                                              <div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                              <div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                              <div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                        </div>
                                  </div>
                            </div>
                            <div class="item-info">
                              <div class="info-inner">
                                   <div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
                                   <div class="item-content">
                                        <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                        <div class="item-price">
                                             <div class="price-box">
                                                  <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                                                  <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                                            </div>
                                      </div>
                                </div>
                          </div>
                    </div>
              </div>
        </div>
        <div class="product-item">
              <div class="item-inner">
                   <div class="product-thumbnail">
                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
                             <figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img03.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img03.jpg" alt=""></figure>
                       </a>
                       <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                 </div>
                 <div class="pr-info-area">
                  <div class="pr-button">
                       <div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                       <div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
                       <div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                 </div>
           </div>
     </div>
     <div class="item-info">
       <div class="info-inner">
            <div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
            <div class="item-content">
                 <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                 <div class="item-price">
                      <div class="price-box">
                           <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                           <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                     </div>
               </div>
         </div>
   </div>
</div>
</div>
</div>
<div class="product-item">
   <div class="item-inner">
        <div class="icon-sale-label sale-left">Sale</div>
        <div class="icon-new-label new-right">New</div>
        <div class="product-thumbnail">
             <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
                  <figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img04.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img04.jpg" alt=""></figure>
            </a>
            <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
      </div>
      <div class="pr-info-area">
       <div class="pr-button">
            <div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
            <div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
            <div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
      </div>
</div>
</div>
<div class="item-info">
  <div class="info-inner">
       <div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
       <div class="item-content">
            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
            <div class="item-price">
                 <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
           </div>
     </div>
</div>
</div>
</div>
</div>
<div class="product-item">
    <div class="item-inner">
         <div class="product-thumbnail">
              <div class="icon-new-label new-left">New</div>
              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
                   <figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img05.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img05.jpg" alt=""></figure>
             </a>
             <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
       </div>
       <div class="pr-info-area">
        <div class="pr-button">
             <div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
             <div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
             <div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
       </div>
 </div>
</div>
<div class="item-info">
   <div class="info-inner">
        <div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
        <div class="item-content">
             <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
             <div class="item-price">
                  <div class="price-box">
                       <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                       <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                 </div>
           </div>
     </div>
</div>
</div>
</div>
</div>
<div class="product-item">
     <div class="item-inner">
          <div class="product-thumbnail">
               <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
                    <figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img06.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img06.jpg" alt=""></figure>
              </a>
              <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
        </div>
        <div class="pr-info-area">
         <div class="pr-button">
              <div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
              <div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
              <div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
        </div>
  </div>
</div>
<div class="item-info">
    <div class="info-inner">
         <div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
         <div class="item-content">
              <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
              <div class="item-price">
                   <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
             </div>
       </div>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="tab-pane fade" id="top-sellers">
     <div class="top-sellers-pro">
          <div class="slider-items-products">
               <div id="top-sellers-slider" class="product-flexslider hidden-buttons">
                    <div class="slider-items slider-width-col4 ">
                         <div class="product-item">
                              <div class="item-inner">
                                   <div class="product-thumbnail">
                                        <div class="icon-sale-label sale-left">Sale</div>
                                        <div class="icon-new-label new-right">New</div>
                                        <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
                                             <figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img03.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img03.jpg" alt=""></figure>
                                       </a>
                                       <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
                                 </div>
                                 <div class="pr-info-area">
                                  <div class="pr-button">
                                       <div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                                       <div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
                                       <div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
                                 </div>
                           </div>
                     </div>
                     <div class="item-info">
                       <div class="info-inner">
                            <div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
                            <div class="item-content">
                                 <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                                 <div class="item-price">
                                      <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                </div>
                          </div>
                    </div>
              </div>
        </div>
  </div>
  <div class="product-item">
       <div class="item-inner">
            <div class="product-thumbnail">
                 <div class="icon-sale-label sale-left">Sale</div>
                 <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
                      <figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img08.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img08.jpg" alt=""></figure>
                </a>
                <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
          </div>
          <div class="pr-info-area">
           <div class="pr-button">
                <div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
                <div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
                <div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
          </div>
    </div>
</div>
<div class="item-info">
      <div class="info-inner">
           <div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
           <div class="item-content">
                <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
                <div class="item-price">
                     <div class="price-box">
                          <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                          <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                    </div>
              </div>
        </div>
  </div>
</div>
</div>
</div>
<div class="product-item">
  <div class="item-inner">
       <div class="product-thumbnail">
            <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
                 <figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img01.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img01.jpg" alt=""></figure>
           </a>
           <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
     </div>
     <div class="pr-info-area">
      <div class="pr-button">
           <div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
           <div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
           <div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
     </div>
</div>
</div>
<div class="item-info">
 <div class="info-inner">
      <div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
      <div class="item-content">
           <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
           <div class="item-price">
                <div class="price-box">
                     <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                     <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
               </div>
         </div>
   </div>
</div>
</div>
</div>
</div>
<div class="product-item">
   <div class="item-inner">
        <div class="product-thumbnail">
             <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
                  <figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img04.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img04.jpg" alt=""></figure>
            </a>
            <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
      </div>
      <div class="pr-info-area">
       <div class="pr-button">
            <div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
            <div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
            <div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
      </div>
</div>
</div>
<div class="item-info">
  <div class="info-inner">
       <div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
       <div class="item-content">
            <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
            <div class="item-price">
                 <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
           </div>
     </div>
</div>
</div>
</div>
</div>
<div class="product-item">
    <div class="item-inner">
         <div class="product-thumbnail">
              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
                   <figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img05.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img05.jpg" alt=""></figure>
             </a>
             <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
       </div>
       <div class="pr-info-area">
        <div class="pr-button">
             <div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
             <div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
             <div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
       </div>
 </div>
</div>
<div class="item-info">
   <div class="info-inner">
        <div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
        <div class="item-content">
             <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
             <div class="item-price">
                  <div class="price-box">
                       <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
                       <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
                 </div>
           </div>
     </div>
</div>
</div>
</div>
</div>
<div class="product-item">
     <div class="item-inner">
          <div class="product-thumbnail">
               <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
                    <figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img06.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img06.jpg" alt=""></figure>
              </a>
              <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
        </div>
        <div class="pr-info-area">
         <div class="pr-button">
              <div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
              <div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
              <div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
        </div>
  </div>
</div>
<div class="item-info">
    <div class="info-inner">
         <div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
         <div class="item-content">
              <div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
              <div class="item-price">
                   <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
             </div>
       </div>
 </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--Hot deal -->
<div class="col-md-3 col-sm-4 col-xs-12 hot-products">
  <div class="hot-deal"> <span class="title-text">Hot deal</span>
    <ul class="products-grid">
      <li class="item">
        <div class="product-item">
          <div class="item-inner">
            <div class="product-thumbnail">
              <div class="icon-hot-label hot-right">Hot</div>
              <div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
                <figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img15.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img15.jpg" alt=""></figure>
          </a>
          <button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
    </div>
    <div class="jtv-box-timer">
        <div class="countbox_1 jtv-timer-grid"></div>
  </div>
  <div class="pr-info-area">
        <div class="pr-button">
          <div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
          <div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
          <div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
    </div>
</div>
</div>
<div class="item-info">
      <div class="info-inner">
        <div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
        <div class="item-content">
          <div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
          <div class="item-price">
            <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
      </div>
</div>
</div>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<!-- end main container --> 

<!-- top banner -->
<div class="container">
	<div class="row">
		<div class="col-sm-4 col-xs-12">
			<div class="jtv-banner-box banner-inner">
				<div class="image"> <a class="jtv-banner-opacity" href="<?php echo $baseUrl;?>/index.html#"><img src="<?php echo $baseUrl;?>/frontend/images/top-banner1.jpg" alt=""></a> </div>
				<div class="jtv-content-text">
					<h3 class="title">Save up 25%</h3>
					<span class="sub-title">Nice & Cleans</span> </div>
				</div>
			</div>
			<div class="col-sm-5 col-xs-12">
				<div class="jtv-banner-box">
					<div class="image"> <a class="jtv-banner-opacity" href="<?php echo $baseUrl;?>/index.html#"><img src="<?php echo $baseUrl;?>/frontend/images/top-banner2.jpg" alt=""></a> </div>
					<div class="jtv-content-text">
						<h3 class="title">Powerful Stereo <span>Sound</span></h3>
						<span class="sub-title">You're future in the sound !</span> <a href="<?php echo $baseUrl;?>/index.html#" class="button">Buy Now</a> </div>
					</div>
				</div>
				<div class="col-sm-3 col-xs-12">
					<div class="jtv-banner-box banner-inner">
						<div class="image"> <a class="jtv-banner-opacity" href="<?php echo $baseUrl;?>/index.html#"><img src="<?php echo $baseUrl;?>/frontend/images/top-banner3.jpg" alt=""></a> </div>
						<div class="jtv-content-text">
							<h3 class="title">New Arrival</h3>
						</div>
					</div>
					<div class="jtv-banner-box banner-inner">
						<div class="image "> <a class="jtv-banner-opacity" href="<?php echo $baseUrl;?>/index.html#"><img src="<?php echo $baseUrl;?>/frontend/images/top-banner4.jpg" alt=""></a> </div>
						<div class="jtv-content-text">
							<h3 class="title">Accessories</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<!--special-products-->
		<div class="container">
			<div class="special-products">
				<div class="page-header">
					<h2>special products</h2>
				</div>
				<div class="special-products-pro">
					<div class="slider-items-products">
						<div id="special-products-slider" class="product-flexslider hidden-buttons">
							<div class="slider-items slider-width-col4">
								<div class="product-item">
									<div class="item-inner">
										<div class="product-thumbnail">
											<div class="icon-sale-label sale-left">Sale</div>
											<div class="icon-new-label new-right">New</div>
											<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
												<figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img08.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img08.jpg" alt=""></figure>
											</a>
											<button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
										</div>
										<div class="pr-info-area">
											<div class="pr-button">
												<div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
												<div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
												<div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
											</div>
										</div>
									</div>
									<div class="item-info">
										<div class="info-inner">
											<div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
											<div class="item-content">
												<div class="rating"> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
												<div class="item-price">
													<div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="product-item">
								<div class="item-inner">
									<div class="product-thumbnail">
										<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
											<figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img13.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img13.jpg" alt=""></figure>
										</a>
										<button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
									</div>
									<div class="pr-info-area">
										<div class="pr-button">
											<div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
											<div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
											<div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
										</div>
									</div>
								</div>
								<div class="item-info">
									<div class="info-inner">
										<div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
										<div class="item-content">
											<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
											<div class="item-price">
												<div class="price-box">
													<p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
													<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product-item">
							<div class="item-inner">
								<div class="product-thumbnail">
									<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
										<figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img09.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img09.jpg" alt=""></figure>
									</a>
									<button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
								</div>
								<div class="pr-info-area">
									<div class="pr-button">
										<div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
										<div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
										<div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
									</div>
								</div>
							</div>
							<div class="item-info">
								<div class="info-inner">
									<div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
									<div class="item-content">
										<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
										<div class="item-price">
											<div class="price-box">
												<p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
												<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product-item">
						<div class="item-inner">
							<div class="icon-sale-label sale-left">Sale</div>
							<div class="icon-new-label new-right">New</div>
							<div class="product-thumbnail">
								<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
									<figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img12.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img12.jpg" alt=""></figure>
								</a>
								<button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
							</div>
							<div class="pr-info-area">
								<div class="pr-button">
									<div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
									<div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
									<div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
								</div>
							</div>
						</div>
						<div class="item-info">
							<div class="info-inner">
								<div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
								<div class="item-content">
									<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
									<div class="item-price">
										<div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="product-item">
					<div class="item-inner">
						<div class="product-thumbnail">
							<div class="icon-new-label new-left">New</div>
							<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
								<figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img05.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img05.jpg" alt=""></figure>
							</a>
							<button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
						</div>
						<div class="pr-info-area">
							<div class="pr-button">
								<div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
								<div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
								<div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
							</div>
						</div>
					</div>
					<div class="item-info">
						<div class="info-inner">
							<div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
							<div class="item-content">
								<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
								<div class="item-price">
									<div class="price-box">
										<p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
										<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="product-item">
				<div class="item-inner">
					<div class="product-thumbnail">
						<div class="pr-img-area"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">
							<figure> <img class="first-img" src="<?php echo $baseUrl;?>/frontend/images/products/img06.jpg" alt=""> <img class="hover-img" src="<?php echo $baseUrl;?>/frontend/images/products/img06.jpg" alt=""></figure>
						</a>
						<button type="button" class="add-to-cart-mt"> <i class="fa fa-shopping-cart"></i><span> Add to Cart</span> </button>
					</div>
					<div class="pr-info-area">
						<div class="pr-button">
							<div class="mt-button add_to_wishlist"> <a href="<?php echo $baseUrl;?>/wishlist.html"> <i class="fa fa-heart"></i> </a> </div>
							<div class="mt-button add_to_compare"> <a href="<?php echo $baseUrl;?>/compare.html"> <i class="fa fa-signal"></i> </a> </div>
							<div class="mt-button quick-view"> <a href="<?php echo $baseUrl;?>/quick_view.html"> <i class="fa fa-search"></i> </a> </div>
						</div>
					</div>
				</div>
				<div class="item-info">
					<div class="info-inner">
						<div class="item-title"> <a title="Ipsums Dolors Untra" href="<?php echo $baseUrl;?>/single_product.html">Ipsums Dolors Untra </a> </div>
						<div class="item-content">
							<div class="rating"> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> <i class="fa fa-star-o"></i> </div>
							<div class="item-price">
								<div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</div>
</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-6"> 
			<!-- Testimonials Box -->
			<div class="testimonials">
				<div class="slider-items-products">
					<div id="testimonials-slider" class="product-flexslider hidden-buttons home-testimonials">
						<div class="slider-items slider-width-col4 ">
							<div class="holder">
								<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
									minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
									ex ea commodo consequat. </p>
									<div class="thumb"> <img src="<?php echo $baseUrl;?>/frontend/images/testimonials-img3.jpg" alt="testimonials img"> </div>
									<strong class="name">John Doe</strong> <strong class="designation">CEO, Company</strong> </div>
									<div class="holder">
										<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
											ex ea commodo consequat. fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
											<div class="thumb"> <img src="<?php echo $baseUrl;?>/frontend/images/testimonials-img1.jpg" alt="testimonials img"> </div>
											<strong class="name">Vince Roy</strong> <strong class="designation">CEO, Newspaper</strong> </div>
											<div class="holder">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
													eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
													minim veniam, quis nostrud. </p>
													<div class="thumb"> <img src="<?php echo $baseUrl;?>/frontend/images/testimonials-img2.jpg" alt="testimonials img"> </div>
													<strong class="name">John Doe</strong> <strong class="designation">CEO, ABC Softwear</strong> </div>
													<div class="holder">
														<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad 
															minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
															ex ea commodo consequat.</p>
															<div class="thumb"> <img src="<?php echo $baseUrl;?>/frontend/images/testimonials-img4.jpg" alt="testimonials img"> </div>
															<strong class="name">Vince Roy</strong> <strong class="designation">CEO, XYZ Softwear</strong> </div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<!-- End Testimonials Box --> 
										<!-- our clients Slider -->
										<div class="col-md-6">
											<div class="our-clients">
												<div class="slider-items-products">
													<div id="our-clients-slider" class="product-flexslider hidden-buttons">
														<div class="slider-items slider-width-col6"> 
															
															<!-- Item -->
															<div class="item"> <a href="<?php echo $baseUrl;?>/index.html#"><img src="<?php echo $baseUrl;?>/frontend/http://htmlmystore.justthemevalley.com/Version1/images/brand1.png" alt="Image"></a> <a href="<?php echo $baseUrl;?>/index.html#"><img src="<?php echo $baseUrl;?>/frontend/images/brand2.png" alt="Image"></a> </div>
															<!-- End Item --> 
															
															<!-- Item -->
															<div class="item"> <a href="<?php echo $baseUrl;?>/index.html#"><img src="<?php echo $baseUrl;?>/frontend/images/brand3.png" alt="Image"></a> <a href="<?php echo $baseUrl;?>/index.html#"><img src="<?php echo $baseUrl;?>/frontend/images/brand4.png" alt="Image"></a> </div>
															<!-- End Item --> 
															
															<!-- Item -->
															<div class="item"> <a href="<?php echo $baseUrl;?>/index.html#"><img src="<?php echo $baseUrl;?>/frontend/images/brand5.png" alt="Image"></a> <a href="<?php echo $baseUrl;?>/index.html#"><img src="<?php echo $baseUrl;?>/frontend/images/brand6.png" alt="Image"></a> </div>
															<!-- End Item --> 
															
															<!-- Item -->
															<div class="item"> <a href="<?php echo $baseUrl;?>/index.html#"><img src="<?php echo $baseUrl;?>/frontend/images/brand7.png" alt="Image"></a> <a href="<?php echo $baseUrl;?>/index.html#"><img src="<?php echo $baseUrl;?>/frontend/images/brand3.png" alt="Image"></a> </div>
															<!-- End Item --> 
															
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								
						

										
										<!-- category area start -->
										<div class="jtv-category-area">
											<div class="container">
												<div class="row">
													<div class="col-md-4 col-sm-6">
														<div class="jtv-single-cat">
															<h2 class="cat-title">Top Rated</h2>
															<div class="jtv-product">
																<div class="product-img"> <a href="<?php echo $baseUrl;?>/single_product.html"> <img src="<?php echo $baseUrl;?>/frontend/images/products/img10.jpg" alt=""> <img class="secondary-img" src="<?php echo $baseUrl;?>/frontend/images/products/img10.jpg" alt=""> </a> </div>
																<div class="jtv-product-content">
																	<h3><a href="<?php echo $baseUrl;?>/single_product.html">Lorem ipsum dolor sit amet</a></h3>
																	<div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
																	<div class="jtv-product-action">
																		<div class="jtv-extra-link">
																			<div class="button-cart">
																				<button><i class="fa fa-shopping-cart"></i></button>
																			</div>
																			<a href="<?php echo $baseUrl;?>/index.html#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="<?php echo $baseUrl;?>/index.html#"><i class="fa fa-heart"></i></a> </div>
																		</div>
																	</div>
																</div>
																<div class="jtv-product jtv-cat-margin">
																	<div class="product-img"> <a href="<?php echo $baseUrl;?>/single_product.html"> <img src="<?php echo $baseUrl;?>/frontend/images/products/img07.jpg" alt=""> <img class="secondary-img" src="<?php echo $baseUrl;?>/frontend/images/products/img08.jpg" alt=""> </a> </div>
																	<div class="jtv-product-content">
																		<h3><a href="<?php echo $baseUrl;?>/single_product.html">Lorem ipsum dolor sit amet</a></h3>
																		<div class="price-box">
																			<p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $456.00 </span> </p>
																			<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $567.00 </span> </p>
																		</div>
																		<div class="jtv-product-action">
																			<div class="jtv-extra-link">
																				<div class="button-cart">
																					<button><i class="fa fa-shopping-cart"></i></button>
																				</div>
																				<a href="<?php echo $baseUrl;?>/index.html#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="<?php echo $baseUrl;?>/index.html#"><i class="fa fa-heart"></i></a> </div>
																			</div>
																		</div>
																	</div>
																	<div class="jtv-product jtv-cat-margin">
																		<div class="product-img"> <a href="<?php echo $baseUrl;?>/single_product.html"> <img src="<?php echo $baseUrl;?>/frontend/images/products/img08.jpg" alt=""> <img class="secondary-img" src="<?php echo $baseUrl;?>/frontend/images/products/img09.jpg" alt=""> </a> </div>
																		<div class="jtv-product-content">
																			<h3><a href="<?php echo $baseUrl;?>/single_product.html">Lorem ipsum dolor sit amet</a></h3>
																			<div class="price-box"> <span class="regular-price"> <span class="price">$225.00</span> </span> </div>
																			<div class="jtv-product-action">
																				<div class="jtv-extra-link">
																					<div class="button-cart">
																						<button><i class="fa fa-shopping-cart"></i></button>
																					</div>
																					<a href="<?php echo $baseUrl;?>/index.html#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="<?php echo $baseUrl;?>/index.html#"><i class="fa fa-heart"></i></a> </div>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="col-md-4 col-sm-6">
																	<div class="jtv-single-cat">
																		<h2 class="cat-title">ON SALE</h2>
																		<div class="jtv-product">
																			<div class="product-img"> <a href="<?php echo $baseUrl;?>/single_product.html"> <img src="<?php echo $baseUrl;?>/frontend/images/products/img12.jpg" alt=""> <img class="secondary-img" src="<?php echo $baseUrl;?>/frontend/images/products/img11.jpg" alt=""> </a> </div>
																			<div class="jtv-product-content">
																				<h3><a href="<?php echo $baseUrl;?>/single_product.html">Lorem ipsum dolor sit amet</a></h3>
																				<div class="price-box">
																					<p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $99.00 </span> </p>
																					<p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"> $119.00 </span> </p>
																				</div>
																				<div class="jtv-product-action">
																					<div class="jtv-extra-link">
																						<div class="button-cart">
																							<button><i class="fa fa-shopping-cart"></i></button>
																						</div>
																						<a href="<?php echo $baseUrl;?>/index.html#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="<?php echo $baseUrl;?>/index.html#"><i class="fa fa-heart"></i></a> </div>
																					</div>
																				</div>
																			</div>
																			<div class="jtv-product jtv-cat-margin">
																				<div class="product-img"> <a href="<?php echo $baseUrl;?>/single_product.html"> <img src="<?php echo $baseUrl;?>/frontend/images/products/img05.jpg" alt=""> <img class="secondary-img" src="<?php echo $baseUrl;?>/frontend/images/products/img10.jpg" alt=""> </a> </div>
																				<div class="jtv-product-content">
																					<h3><a href="<?php echo $baseUrl;?>/single_product.html">Lorem ipsum dolor sit amet</a></h3>
																					<div class="price-box"> <span class="regular-price"> <span class="price">$189.00</span> </span> </div>
																					<div class="jtv-product-action">
																						<div class="jtv-extra-link">
																							<div class="button-cart">
																								<button><i class="fa fa-shopping-cart"></i></button>
																							</div>
																							<a href="<?php echo $baseUrl;?>/index.html#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="<?php echo $baseUrl;?>/index.html#"><i class="fa fa-heart"></i></a> </div>
																						</div>
																					</div>
																				</div>
																				<div class="jtv-product jtv-cat-margin">
																					<div class="product-img"> <a href="<?php echo $baseUrl;?>/single_product.html"> <img src="<?php echo $baseUrl;?>/frontend/images/products/img01.jpg" alt=""> <img class="secondary-img" src="<?php echo $baseUrl;?>/frontend/images/products/img03.jpg" alt=""> </a> </div>
																					<div class="jtv-product-content">
																						<h3><a href="<?php echo $baseUrl;?>/single_product.html">Lorem ipsum dolor sit amet</a></h3>
																						<div class="price-box"> <span class="regular-price"> <span class="price">$88.99</span> </span> </div>
																						<div class="jtv-product-action">
																							<div class="jtv-extra-link">
																								<div class="button-cart">
																									<button><i class="fa fa-shopping-cart"></i></button>
																								</div>
																								<a href="<?php echo $baseUrl;?>/index.html#" data-toggle="modal" data-target="#productModal"><i class="fa fa-search"></i></a> <a href="<?php echo $baseUrl;?>/index.html#"><i class="fa fa-heart"></i></a> </div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																			
																			<!-- service area start -->
																			<div class="col-md-4 col-sm-12 col-xs-12">
																				<div class="jtv-service-area"> 
																					
																					<!-- jtv-single-service start -->
																					
																					<div class="jtv-single-service">
																						<div class="service-icon"> <img alt="" src="<?php echo $baseUrl;?>/frontend/images/customer-service-icon.png"> </div>
																						<div class="service-text">
																							<h2>24/7 customer service</h2>
																							<p><span>Call us 24/7 at 000 - 123 - 456</span></p>
																						</div>
																					</div>
																					<div class="jtv-single-service">
																						<div class="service-icon"> <img alt="" src="<?php echo $baseUrl;?>/frontend/images/shipping-icon.png"> </div>
																						<div class="service-text">
																							<h2>free shipping worldwide</h2>
																							<p><span>On order over $199 - 7 days a week</span></p>
																						</div>
																					</div>
																					<div class="jtv-single-service">
																						<div class="service-icon"> <img alt="" src="<?php echo $baseUrl;?>/frontend/images/guaratee-icon.png"> </div>
																						<div class="service-text">
																							<h2>money back guaratee!</h2>
																							<p><span>Send within 30 days</span></p>
																						</div>
																					</div>
																					
																					<!-- jtv-single-service end --> 
																					
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
																<!-- category-area end --> 
																