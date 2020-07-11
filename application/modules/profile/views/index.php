<div class="breadcrumb-box">
    <div class="background-overlay  py-5">
        <div class="container">
            <div class="title">
                <h1>Profile</h1>
            </div>
            <div class="site-breadcrumbs">
                <ul>
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="#">Profile</a></li>
                </ul>
            </div>
        </div>
    </div>    
</div>
<div class="profile-content py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- sidebar here -->
                <?php apply_hook('load_profile_sidebar');?>
            </div>
            <div class="col-md-9">
                <div class="page-content">
                    <div class="inner-box">
                        <div class="dashboard-box">
                            <h2 class="dashbord-title">Dashboard</h2>
                        </div>
                        <div class="dashboard-wrapper">
                            <div class="dashboard-sections">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                        <div class="dashboardbox">
                                            <div class="icon"><i class="ti ti-write"></i></div>
                                            <div class="contentbox">
                                                <h2><a href="#">Total Ad Posted</a></h2>
                                                <h3>480 Add Posted</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                        <div class="dashboardbox">
                                            <div class="icon"><i class="ti ti-files"></i></div>
                                            <div class="contentbox">
                                                <h2><a href="#">Featured Ads</a></h2>
                                                <h3>80 Add Posted</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
                                        <div class="dashboardbox">
                                            <div class="icon"><i class="ti ti-comment-alt"></i></div>
                                            <div class="contentbox">
                                                <h2><a href="#">Offers / Messages</a></h2>
                                                <h3>2040 Messages</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="user-verification mt-3">
                                <div class="row d-flex align-items-center">
                                    <div class="col-md-12">
                                        <div class="icon text-center">
                                            <i class="ti ti-face-sad mr-2"></i>
                                        </div>
                                        <div class="content">
                                            <div class="alert alert-danger-bordered alert-lg square" role="alert">
                                                <strong>Hey!</strong> It seems your phone number is not verified yet. Click <a href="#" data-toggle="modal" data-target="#verifyModal">here</a> to verify.
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
<div class="modal fade" id="verifyModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>                
            <div class="modal-body">
                <div class="alert alert-success-bordered alert-lg square" role="alert">
                    <strong>Hey!</strong> <br>Please send a message with code <strong>####</strong> with your 
                    registered phone in +977-9864573650 to verify your account. 
                </div>
            </div>
        </div>
    </div>
</div>