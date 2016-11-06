    <?php include_once('back/tpl_asset_header.php');?>

        <div class="app">

        <?php include_once('back/tpl_navigation.php');?>

            <section class="layout">

            <?php include_once('back/tpl_sidebar.php');?>

                <section class="main-content">

                    <div class="content-wrap">
                        <div class="row">

                            <div class="col-md-12">

                                <section class="panel chat-box no-border">
                                    <div class="panel-heading">
                                        <?php echo $this->pageTitle; ?>
                                    </div>
                                    <div class="panel-body">

                                        <?php echo $content; ?>

                                    </div>
                                </section>

                            </div>
                        </div>
                    </div>

                </section>
            </section>
        </div>

    <?php include_once('back/tpl_asset_footer.php');?>
