    <?php include_once('back/tpl_asset_header.php');?>

        <div class="app">

        <?php include_once('back/tpl_navigation.php');?>

            <section class="layout">

            <?php include_once('back/tpl_sidebar.php');?>

                <section class="main-content">
                    <div class="content-wrap">
                        <div class="row mg-b">
                            <div class="col-xs-6">
                                <h3 class="no-margin"><?php echo $this->pageTitle; ?></h3>
                                <small>Welcome back, <?PHP YII::app()->user->name; ?></small>
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="javascript:;" class="fa fa-flash pull-right pd-sm toggle-sidebar" data-toggle="off-canvas" data-move="rtl">
                                    <span class="badge bg-danger animated flash">6</span>
                                </a>
                            </div>
                        </div>                    

                        <?php echo $content; ?>

                    </div>
                </section>
            </section>
        </div>

    <?php include_once('back/tpl_asset_footer.php');?>
