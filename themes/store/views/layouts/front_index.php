  <!-- Header -->
<?php include_once('front/tpl_asset_header.php');?>
<!-- Navigation -->
<?php include_once('front/tpl_navigation.php');?>

  <!-- Main Container -->
  <div class="main-container col2-right-layout">
    <div class="container">
      <div class="row">
        <div class="col-main col-sm-12 col-xs-12">

          <div class="shop-inner">
            <div class="page-title">
              <h2><?php echo $this->pageTitle; ?></h2>
            </div>
            <HR>
            <div class="product-grid-area">

            <?php echo $content; ?>
              
            </div>

          </div>
        </div>

      </div>
    </div>
  </div>
  <!-- Main Container End --> 

<!-- Footer -->
<?php include_once('front/tpl_footer.php');?>
<!-- Asset Footer -->
<?php include_once('front/tpl_asset_footer.php');?>



