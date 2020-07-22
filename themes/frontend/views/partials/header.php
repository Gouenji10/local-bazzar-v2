<header class="header" id="main-header">
    <div class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-5 col-xs-12">

                    <ul class="list-inline">
                        <li><i class="ion ion-speakerphone"></i> +977-9864573650</li>
                        <li><i class="ion ion-email-unread"></i> sanjayshuuya@gmail.com</li>
                    </ul>

                </div>
                <div class="col-lg-5 col-md-7 col-xs-12">
                    <div class="roof-social float-right">
                        <a class="facebook" href="#"><i class="ion ion-social-facebook"></i></a>
                        <a class="twitter" href="#"><i class="ion ion-social-twitter"></i></a>
                        <a class="instagram" href="#"><i class="ion ion-social-instagram"></i></a>
                    </div>
                    <div class="header-top-right float-right">
                        <?php if($this->ion_auth->logged_in()):?>
                            <a href="<?php echo base_url('profile');?>"><i class="la la-user"></i> My Account</a> | 
                            <a href="<?php echo base_url('auth/logout');?>"><i class="ti ti-power-off"></i> Log Out</a>
                        <?php else: ?>
                            <a href="#" data-toggle="modal" data-target="#login"><i class="la la-unlock"></i> Log In</a> |
                            <a href="#" data-toggle="modal" data-target="#register"><i class="la la-pencil"></i> Register</a>
                        <?php endif;?>                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar">         
        <!-- Begin Topbar -->
        <div class="navbar-holder d-flex align-items-center align-middle justify-content-between">
            <!-- Begin Logo -->
            <div class="navbar-header">
                <a href="<?php echo base_url();?>" class="navbar-brand">
                    <div class="brand-image brand-big">
                        <img src="assets/img/logo-big.png" alt="logo" class="logo-big">
                    </div>
                    <div class="brand-image brand-small">
                        <img src="assets/img/logo.png" alt="logo" class="logo-small">
                    </div>
                </a>
            </div>
            <!-- End Logo -->
            <!-- Begin Navbar Menu -->
            <ul class="nav-menu">
                <li class="nav-item"><a href="<?php echo base_url();?>">Home</a></li>
                <li class="nav-item"><a href="#">Browse Ads</a></li>
                <li class="nav-item"><a href="<?php echo base_url('about');?>">About</a></li>
                <li class="nav-item"><a href="<?php echo base_url('contact');?>">Contact</a></li>           
                <li class="nav-item"><a href="<?php echo base_url('faq');?>">FAQ</a></li>
                <li class="nav-item"><a href="#">Make a Request</a></li>           
            </ul>
            <ul class="nav-menu pull-right account-menu">
                <li class="nav-item">
                    <button type="button" class="btn">
                        <a href="<?php echo base_url('ads');?>"><i class="la la-pencil-square-o"></i> Post an Ad </a>    
                    </button>
                </li>
            </ul>
            <!-- End Navbar Menu -->
        </div>
        <!-- End Topbar -->
    </nav>
</header>

