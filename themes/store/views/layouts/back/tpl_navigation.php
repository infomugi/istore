            <header class="header header-fixed navbar">
                <div class="brand">
                    <a href="<?php echo $url;?>site/javascript:;" class="fa fa-bars off-left visible-xs" data-toggle="off-canvas" data-move="ltr"></a>
                    <a href="<?php echo $url;?>site/dashboard" class="navbar-brand text-white">
                        <i class="fa fa-stop mg-r-sm"></i>
                        <span class="heading-font">
                           <?php echo CHtml::encode(Yii::app()->name); ?>
                        </span>
                    </a>
                </div>
                <ul class="nav navbar-nav navbar-right off-right">
                    <li class="hidden-xs">
                        <a href="#">
                            <?PHP echo CHtml::encode(YII::app()->user->record->fullname); ?>
                        </a>
                    </li>
                    <li class="notifications dropdown hidden-xs">
                        <a href="<?php echo $url;?>site/dashboard/javascript:;" data-toggle="dropdown">
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
                                        <a href="<?php echo $url;?>site/dashboard/javascript:;" class="mg-r-xs">mark as read</a>&#8226;
                                        <a href="<?php echo $url;?>site/dashboard/javascript:;" class="fa fa-cog mg-l-xs"></a>
                                    </small>
                                </div>
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <a href="#;">
                                            <span class="pull-left mg-t-xs mg-r-md">
                                                <img src="<?php echo $url;?>site/dashboard/img/face4.jpg" class="avatar avatar-sm img-circle" alt="">
                                            </span>
                                            <div class="m-body show pd-t-xs">
                                                <span>Dean Winchester</span>
                                                <span>Posted on to your wall</span>
                                                <small>2 mins ago</small>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="list-group-item">
                                        <a href="<?php echo $url;?>site/dashboard/javascript:;">
                                            <span class="pull-left mg-t-xs mg-r-md">
                                                <img src="<?php echo $url;?>site/dashboard/img/face3.jpg" class="avatar avatar-sm img-circle" alt="">
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
                                    <a href="<?php echo $url;?>site/dashboard/javascript:;">See all notifications</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="quickmenu">
                        <a href="<?php echo $url;?>site/dashboard/javascript:;" data-toggle="dropdown">
                            <img src="<?php echo $url;?>site/dashboard/img/avatar.jpg" class="avatar pull-left img-circle" alt="user" title="user">
                            <i class="caret mg-l-xs hidden-xs no-margin"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right mg-r-xs">
                            <li>
                                <a href="<?php echo $url;?>site/dashboard/javascript:;">
                                    <div class="pd-t-sm">
                                        <?PHP echo CHtml::encode(YII::app()->user->record->email); ?>
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
                                <a href="<?php echo $url;?>site/setting">Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="<?php echo $url;?>site/logout">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </header>