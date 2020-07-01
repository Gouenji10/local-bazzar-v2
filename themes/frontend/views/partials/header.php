<header class="header">
    <nav class="navbar fixed-top">         
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
            <ul class="nav-menu pull-right">
                <li class="nav-item"><a href="<?php echo base_url();?>">Home</a></li>
                <li class="nav-item"><a href="#">Browse Ads</a></li>
                <li class="nav-item"><a href="#">About</a></li>
                <li class="nav-item"><a href="#">Contact</a></li>           
                <li class="nav-item"><a href="#">FAQ</a></li>           
            </ul>
            <ul class="nav-menu pull-right account-menu">
                <li class="nav-item"><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
                <li class="nav-item"><a href="#" data-toggle="modal" data-target="#register">Register</a></li>
                <li class="nav-item"><a href="<?php echo base_url('ads');?>"><i class="la la-plus-circle"></i> Post Ad </a></li>
            </ul>
            <!-- End Navbar Menu -->
        </div>
        <!-- End Topbar -->
    </nav>
</header>

