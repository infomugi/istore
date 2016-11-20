                <aside class="sidebar canvas-left">

                    <nav class="main-navigation">
                        <ul>
                            <li>
                                <a href="<?php echo $url;?>site/dashboard">
                                    <i class="fa fa-dashboard"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>
                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-ellipsis-h"></i>
                                    <span>Product</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>product/create">
                                            <span>Add</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>product/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-tags"></i>
                                    <span>Category</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>category/create">
                                            <span>Add</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>category/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>    
                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-ticket"></i>
                                    <span>Tag</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>tag/create">
                                            <span>Add</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>tag/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>
                                </ul>
                            </li> 

                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-dollar"></i>
                                    <span>Transaksi</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>transaction/listconfirmation">
                                            <span>Konfirmasi Order</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>transaction/listverification">
                                            <span>Verifikasi Order</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>transaction/listshipping">
                                            <span>Shipping</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>transaction/listsuccess">
                                            <span>Order Terkirim</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </li>  

                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-comments"></i>
                                    <span>Testimony</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>review/index">
                                            <span>Approve</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>review/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>                                
                                </ul>
                            </li>      

                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-bold"></i>
                                    <span>Bank</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>bank/create">
                                            <span>New</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>bank/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>                                
                                </ul>
                            </li>                                                       

                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                    <span>Setting</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>slide/index">
                                            <span>Slide</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>setting/index">
                                            <span>Site</span>
                                        </a>
                                    </li>                                
                                </ul>
                            </li>     

                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-cog"></i>
                                    <span>Master</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>provinces/admin">
                                            <span>Provinsi</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>regencies/admin">
                                            <span>Kabupaten / Kota</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>districts/admin">
                                            <span>Kecamatan</span>
                                        </a>
                                    </li>  

                                    <li>
                                        <a href="<?php echo $url;?>villages/admin">
                                            <span>Desa / Kelurahan</span>
                                        </a>
                                    </li>                                          
                                </ul>
                            </li>                                                                                      

                            <li class="dropdown active show-on-hover">
                                <a href="#" data-toggle="dropdown">
                                    <i class="fa fa-user"></i>
                                    <span>Account</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo $url;?>user/create">
                                            <span>Add</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>user/admin">
                                            <span>Manage</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="<?php echo $url;?>division/admin">
                                            <span>Division</span>
                                        </a>
                                    </li>                                    
                                </ul>
                            </li>                                                                                

                        </ul>
                    </nav>


                    <footer>
                        <div class="footer-toolbar pull-left">
                            <a href="<?php echo $baseUrl;?>/backend/javascript:;" class="toggle-sidebar pull-right hidden-xs">
                                <i class="fa fa-angle-left"></i>
                            </a>
                        </div>
                    </footer>

                </aside>