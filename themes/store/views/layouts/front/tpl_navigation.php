<!--[if lt IE 8]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="<?php echo $baseUrl;?>/http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
      <![endif]--> 

      <!-- mobile menu -->
      <div id="mobile-menu">
      	<ul>
      		<li><a href="<?php echo $baseUrl;?>/" class="home1">Home</a></li>
      	</ul>
      </div>
      <!-- end mobile menu -->
      <div id="page"> 
      	
      	
      	<!-- Header -->
      	<header>
      		<div class="header-container">
      			<div class="header-top">
      				<div class="container">
      					<div class="row">
      						<div class="col-lg-4 col-sm-4 hidden-xs"> 
      							<!-- Default Welcome Message -->
      							<div class="welcome-msg ">Welcome to MyStore! </div>
      							<span class="phone hidden-sm">Call Us: +123.456.789</span> </div>
      							
      							<!-- top links -->
      							<div class="headerlinkmenu col-lg-8 col-md-7 col-sm-8 col-xs-12">
      								<div class="links">
                      <?PHP if(!YII::app()->user->isGuest){ ?>
                        <div class="myaccount">
                          <a title="My Account" href="<?php echo $url;?>/user/profile"><i class="fa fa-user"></i><span class="hidden-xs">My Account</span></a>
                        </div>
                      <?PHP }else{ ?>
                        <div class="login">
                          <a href="<?php echo $url;?>/site/login"><i class="fa fa-unlock-alt"></i><span class="hidden-xs">Log In</span></a>
                        </div>
                        <?PHP } ?>

                      </div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="container">
               <div class="row">
                <div class="col-sm-3 col-md-3 col-xs-12"> 
                 <!-- Header Logo -->
                 <div class="logo"><a title="e-commerce" href="<?php echo $baseUrl;?>/"><img alt="e-commerce" src="<?php echo $baseUrl;?>/frontend/images/logo.png"></a> </div>
                 <!-- End Header Logo --> 
               </div>
               <div class="col-xs-9 col-sm-6 col-md-6"> 
                 <!-- Search -->

                 <div class="top-search">
                  <div id="search">
                   <form>
                    <div class="input-group">
                     <input type="text" class="form-control" placeholder="Search" name="search">
                     <button class="btn-search" type="button"><i class="fa fa-search"></i></button>
                   </div>
                 </form>
               </div>
             </div>

             <!-- End Search --> 
           </div>
           <!-- top cart -->
           
           <div class="col-lg-3 col-xs-3 top-cart">
             <div class="top-cart-contain">
              <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="./order/cart">
                <div class="cart-icon"><i class="fa fa-shopping-cart"></i></div>
                <div class="shoppingcart-inner hidden-xs"><span class="cart-title">Shopping Cart</span> <span class="cart-total">4 Item(s): $520.00</span></div>
              </a></div>
              <div>
                <div class="top-cart-content">
                 <div class="block-subtitle hidden-xs">Recently added item(s)</div>
                 <ul id="cart-sidebar" class="mini-products-list">
                  <li class="item odd"> <a href="<?php echo $baseUrl;?>/" title="Ipsums Dolors Untra" class="product-image"><img src="<?php echo $baseUrl;?>/frontend/images/products/img07.jpg" alt="Lorem ipsum dolor" width="65"></a>
                   <div class="product-details"> <a href="<?php echo $baseUrl;?>/#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                    <p class="product-name"><a href="<?php echo $baseUrl;?>/">Lorem ipsum dolor sit amet Consectetur</a> </p>
                    <strong>1</strong> x <span class="price">$20.00</span> </div>
                  </li>
                  <li class="item even"> <a href="<?php echo $baseUrl;?>/" title="Ipsums Dolors Untra" class="product-image"><img src="<?php echo $baseUrl;?>/frontend/images/products/img11.jpg" alt="Lorem ipsum dolor" width="65"></a>
                    <div class="product-details"> <a href="<?php echo $baseUrl;?>/#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                     <p class="product-name"><a href="<?php echo $baseUrl;?>/">Consectetur utes anet adipisicing elit</a> </p>
                     <strong>1</strong> x <span class="price">$230.00</span> </div>
                   </li>
                   <li class="item last odd"> <a href="<?php echo $baseUrl;?>/" title="Ipsums Dolors Untra" class="product-image"><img src="<?php echo $baseUrl;?>/frontend/images/products/img10.jpg" alt="Lorem ipsum dolor" width="65"></a>
                     <div class="product-details"> <a href="<?php echo $baseUrl;?>/#" title="Remove This Item" class="remove-cart"><i class="icon-close"></i></a>
                      <p class="product-name"><a href="<?php echo $baseUrl;?>/">Sed do eiusmod tempor incidist</a> </p>
                      <strong>2</strong> x <span class="price">$420.00</span> </div>
                    </li>
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price">$520.00</span></div>
                  <div class="actions">
                   <button class="btn-checkout" type="button"><i class="fa fa-check"></i><span>Checkout</span></button>
                   <button class="view-cart" type="button"><i class="fa fa-shopping-cart"></i> <span>View Cart</span></button>
                 </div>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</header>
<!-- end header --> 

<!-- Navbar -->
<nav>
  <div class="container">
   <div class="row">
    <div class="col-md-3 col-sm-4">
     <div class="mm-toggle-wrap">
      <div class="mm-toggle"> <i class="fa fa-align-justify"></i> </div>
      <span class="mm-label">Kategori</span> </div>
      <div class="mega-container visible-lg visible-md visible-sm">
       <div class="navleft-container">
        <div class="mega-menu-title">
         <h3>Kategori</h3>
       </div>
       <div class="mega-menu-category">
         <ul class="nav">
          <li> <a href="<?php echo $baseUrl;?>/#"><i class="icon fa fa-bed fa-fw"></i> Furnitur</a>
           <div class="wrap-popup">
            <div class="popup">
             <div class="row">
              <div class="col-md-8 col-sm-6">
               <h3>Furniture</h3>
               <ul class="nav">
                  <?php
                    $jmlh = Yii::app()->db->createCommand('
                    SELECT COUNT(id_category_sub) 
                    FROM category_sub')->queryScalar();

                    for($a=0;$a<=$jmlh;$a++)
                  {
                    $tagfurnitur = Yii::app()->db->createCommand('
                    SELECT name 
                    FROM category_sub 
                    WHERE category_id=1 AND id_category_sub='.$a.'
                    GROUP BY id_category_sub ASC')->queryScalar();
                  ?>
                  <li><a href="<?php echo $baseUrl;?>/"><span><?php echo $tagfurnitur;?></span></a></li>
                  <?php
                  }
                  ?>
              </ul>
            </div>
          <div class="col-md-4 has-sep hidden-sm">
           <div class="custom-menu-right">
            <div class="box-banner menu-banner">
             <div class="add-right"><a href="<?php echo $baseUrl;?>/#"><img src="<?php echo $baseUrl;?>/frontend/images/<?php echo Yii::app()->db->createCommand('
                    SELECT image 
                    FROM category WHERE id_category=1')->queryScalar();?>" alt=""></a></div>
           </div>
         </div>
       </div>
     </div>
   </div>
 </div>
</li>
<li> <a href="<?php echo $baseUrl;?>/#"><i class="icon fa fa-heart fa-fw"></i> Sepatu</a>
 <div class="wrap-popup">
  <div class="popup">
   <div class="row">
                  <div class="col-md-8 col-sm-6">
               <h3>Shoes</h3>
               <ul class="nav">
                  <?php
                    $jmlh = Yii::app()->db->createCommand('
                    SELECT COUNT(id_category_sub) 
                    FROM category_sub')->queryScalar();

                    for($a=0;$a<=$jmlh;$a++)
                  {
                    $tagshoes = Yii::app()->db->createCommand('
                    SELECT name 
                    FROM category_sub 
                    WHERE category_id=2 AND id_category_sub='.$a.'
                    GROUP BY id_category_sub ASC')->queryScalar();
                  ?>
                  <li><a href="<?php echo $baseUrl;?>/"><span><?php echo $tagshoes;?></span></a></li>
                  <?php
                  }
                  ?>
              </ul>
            </div>
          <div class="col-md-4 has-sep hidden-sm">
           <div class="custom-menu-right">
            <div class="box-banner menu-banner">
             <div class="add-right"><a href="<?php echo $baseUrl;?>/#"><img src="<?php echo $baseUrl;?>/frontend/images/<?php echo Yii::app()->db->createCommand('
                    SELECT image 
                    FROM category WHERE id_category=2')->queryScalar();?>" alt=""></a></div>
           </div>
         </div>
       </div>
</div>
</div>
</li>
</div>
</div>
</div>
</div>
<div class="col-md-9 col-sm-8">
 <div class="mtmegamenu">
  <ul>
   <li class="mt-root demo_custom_link_cms">
    <div class="mt-root-item"><a href="<?php echo $url;?>/site/index">
     <div class="title title_font"><span class="title-text">Home</span></div>
   </a></div>
 </li>

  <li class="mt-root">
   <div class="mt-root-item"><a href="<?php echo $url;?>category/list&id=1">
   <div class="title title_font"><span class="title-text">Furnitur</span> </div>
 </a></div>
</li>

 <li class="mt-root">
   <div class="mt-root-item"><a href="<?php echo $url;?>category/list&id=2">
   <div class="title title_font"><span class="title-text">Sepatu</span> </div>
 </a></div>
</li>

 <li class="mt-root">
   <div class="mt-root-item"><a href="<?php echo $url;?>/product/top">
   <div class="title title_font"><span class="title-text">Terpopuler</span> </div>
 </a></div>
</li>
<li class="mt-root">
   <div class="mt-root-item"><a href="<?php echo $url;?>/product/new">
   <div class="title title_font"><span class="title-text">Terbaru</span></div>
 </a></div>
</li>
<li class="mt-root">
  <div class="mt-root-item">
   <div class="title title_font"><span class="title-text">Best Seller</span></div>
 </div>
 <ul class="menu-items col-xs-12">
   <li class="menu-item depth-1 product menucol-1-3 withimage">
    <div class="product-item">
     <div class="item-inner">
      <div class="product-thumbnail">
       <div class="icon-sale-label sale-left">Sale</div>
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
</li>
<li class="menu-item depth-1 product menucol-1-3 withimage">
 <div class="product-item">
  <div class="item-inner">
   <div class="product-thumbnail">
    <div class="icon-sale-label sale-left">Sale</div>
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
    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</li>
<li class="menu-item depth-1 product menucol-1-3 withimage">
  <div class="product-item">
   <div class="item-inner">
    <div class="icon-sale-label sale-left">Sale</div>
    <div class="icon-new-label new-right">New</div>
    <div class="product-thumbnail">
     <div class="icon-sale-label sale-left">Sale</div>
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
     <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
   </div>
 </div>
</div>
</div>
</div>
</div>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</nav>
<!-- end nav --> 

