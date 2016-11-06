<!doctype html>
<html class="no-js" lang="">
<head>
    <?php
    $baseUrl = Yii::app()->theme->baseUrl; 
    $url = Yii::app()->baseUrl; 
    $cs = Yii::app()->getClientScript();
    Yii::app()->clientScript->registerCoreScript('jquery');
    ?>

    <meta charset="utf-8">
    <meta name="description" content="Flat, Clean, Responsive, admin template built with bootstrap 3">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">

    <title><?php echo CHtml::encode($this->pageTitle); ?> - <?php echo CHtml::encode(Yii::app()->name); ?></title>

    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/vendor/offline/theme.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/vendor/pace/theme.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/panel.css">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/skins/palette.10.css" id="skin">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/fonts/style.1.css" id="font">
    <link rel="stylesheet" href="<?php echo $baseUrl;?>/backend/css/main.css">


    <!--[if lt IE 9]>
        <script src="<?php echo $baseUrl;?>/backend/https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <script src="<?php echo $baseUrl;?>/backend/vendor/modernizr.js"></script>

    </head>

    <body>
        <div class="app">

            <header class="header header-fixed navbar">
                <div class="brand">
                    <a href="<?php echo $baseUrl;?>/backend/javascript:;" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>
                    <a href="<?php echo $baseUrl;?>/backend/index.html" class="navbar-brand text-white">
                        <i class="fa fa-stop mg-r-sm"></i>
                        <span class="heading-font">
                            KupaKupi <b>Store</b>
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right off-right">
                    <li class="hidden-xs">
                        <a href="<?php echo $baseUrl;?>/backend/javascript:;">
                            +Gerald Theodore Morris
                        </a>
                    </li>
                    <li class="notifications dropdown hidden-xs">
                        <a href="<?php echo $baseUrl;?>/backend/javascript:;" data-toggle="dropdown">
                            <i class="fa fa-bell"></i>
                            <div class="badge badge-top bg-danger animated flash">3</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right animated slideInRight">
                            <div class="panel bg-white no-border no-margin">
                                <div class="panel-heading no-radius">
                                    <small>
                                        <b>Notifications</b>
                                    </small>
                                    <small class="pull-right">
                                        <a href="<?php echo $baseUrl;?>/backend/javascript:;" class="mg-r-xs">mark as read</a>&#8226;
                                        <a href="<?php echo $baseUrl;?>/backend/javascript:;" class="fa fa-cog mg-l-xs"></a>
                                    </small>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="#;">
                                            <span class="pull-left mg-t-xs mg-r-md">
                                                <img src="<?php echo $baseUrl;?>/backend/img/face4.jpg" class="avatar avatar-sm img-circle" alt="">
                                            </span>
                                            <div class="m-body show pd-t-xs">
                                                <span>Dean Winchester</span>
                                                <span>Posted on to your wall</span>
                                                <small>2 mins ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="<?php echo $baseUrl;?>/backend/javascript:;">
                                            <span class="pull-left mg-t-xs mg-r-md">
                                                <img src="<?php echo $baseUrl;?>/backend/img/face3.jpg" class="avatar avatar-sm img-circle" alt="">
                                            </span>
                                            <div class="m-body show pd-t-xs">
                                                <span>Application</span>
                                                <span>Where is my workspace widget</span>
                                                <small>5 days ago</small>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                                <div class="panel-footer no-border">
                                    <a href="<?php echo $baseUrl;?>/backend/javascript:;">See all notifications</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="quickmenu">
                        <a href="<?php echo $baseUrl;?>/backend/javascript:;" data-toggle="dropdown">
                            <img src="<?php echo $baseUrl;?>/backend/img/avatar.jpg" class="avatar pull-left img-circle" alt="user" title="user">
                            <i class="caret mg-l-xs hidden-xs no-margin"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                            <li>
                                <a href="<?php echo $baseUrl;?>/backend/javascript:;">
                                    <div class="pd-t-sm">
                                        gerald@morris.com
                                        <br>
                                        <small class="text-muted">4.2 MB of 51.25 GB used</small>
                                    </div>
                                    <div class="progress progress-xs no-radius no-margin mg-b-sm">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $baseUrl;?>/backend/profile.html">Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $baseUrl;?>/backend/signin.html">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </header>

            <section class="layout">

                <aside class="sidebar canvas-left">

                    <nav class="main-navigation">
                        <ul>
                            <li>
                                <a href="<?php echo $url;?>/index.php?r=site/">
                                    <i class="fa fa-dashboard"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown active show-on-hover">
                                <a href="<?php echo $url;?>/backend/javascript:;" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                    <span>Product</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>/index.php?r=product/create">
                                            <span>Add</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>/index.php?r=product/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown active show-on-hover">
                                <a href="<?php echo $url;?>/backend/javascript:;" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                    <span>Category</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>/index.php?r=category/create">
                                            <span>Add</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>/index.php?r=category/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>    
                            <li class="dropdown active show-on-hover">
                                <a href="<?php echo $url;?>/backend/javascript:;" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                    <span>Sub Category</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>/index.php?r=categorysub/create">
                                            <span>Add</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>/index.php?r=categorysub/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> 

                            <li class="dropdown active show-on-hover">
                                <a href="<?php echo $url;?>/backend/javascript:;" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                    <span>Transaction</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>/index.php?r=user/create">
                                            <span>New</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>/index.php?r=user/admin">
                                            <span>Pay</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>/index.php?r=user/admin">
                                            <span>Send</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </li>  

                            <li class="dropdown active show-on-hover">
                                <a href="<?php echo $url;?>/backend/javascript:;" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                    <span>Account</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>/index.php?r=user/create">
                                            <span>Add</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>/index.php?r=user/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>                                                                                

                        </ul>
                    </nav>


                    <footer>
                        <div class="footer-toolbar pull-left">
                            <a href="<?php echo $baseUrl;?>/backend/javascript:;" class="pull-left help">
                                <i class="fa fa-question-circle"></i>
                            </a>
                            <a href="<?php echo $baseUrl;?>/backend/javascript:;" class="toggle-sidebar pull-right hidden-xs">
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </div>
                    </footer>

                </aside>


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

        <script src="<?php echo $baseUrl;?>/backend/bootstrap/js/bootstrap.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/jquery.easing.min.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/jquery.placeholder.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/fastclick.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/offline/offline.min.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/vendor/pace/pace.min.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/js/off-canvas.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/js/main.js"></script>
        <script src="<?php echo $baseUrl;?>/backend/js/panel.js"></script>

        </html>
