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
                    <li><a href="#">Privacy Setting</a></li>
                </ul>
            </div>
        </div>
    </div>    
</div>
<div class="profile-privacy-content profile-content py-5">
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
                            <h2 class="dashbord-title">Privacy Settings</h2>
                        </div>
                        <div class="dashboard-wrapper">
                            <form class="row form-dashboard">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="privacy-box privacysetting">
                                        <div class="dashboardboxtitle">
                                            <h2>Settings</h2>
                                        </div>
                                        <div class="dashboardholder mt-3 pt-3">
                                            <ul>
                                                <li>
                                                    <div class="mb-3">
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox" id="check-1">
                                                            <label for="check-1">Make my phone number  public</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="mb-3">
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox" id="check-2">
                                                            <label for="check-2">I want to receive monthly newsletter</label>
                                                        </div>
                                                    </div>                                                   
                                                </li>
                                                <li>
                                                    <div class="mb-3">
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox" id="check-3">
                                                            <label for="check-3">I want to receive e-mail notifications of offers/messages</label>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="mb-3">
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox" id="check-4">
                                                            <label for="check-4">I want to receive e-mail alerts about new listings</label>
                                                        </div>
                                                    </div>                                                    
                                                </li>
                                                <li>
                                                    <div class="mb-3">
                                                        <div class="styled-checkbox">
                                                            <input type="checkbox" name="checkbox" id="check-5">
                                                            <label for="check-5">Enable offers/messages option in all my ads Post</label>
                                                        </div>
                                                    </div>

                                                </li>
                                            </ul>
                                            <button class="btn global-btn pull-right" type="submit">Update</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                                    <div class="privacy-box deleteaccount">
                                        <div class="dashboardboxtitle">
                                            <h2>Delete Account</h2>
                                        </div>
                                        <div class="dashboardholder">
                                            <div class="form-group mb-5">                                                
                                                <label class="form-control-label d-flex justify-content-lg-start mt-3">Reason t delete your account:</label>
                                                <textarea class="form-control" placeholder="Type your reason here ..." required=""></textarea>
                                                <div class="invalid-feedback">
                                                    Please enter a custom message
                                                </div>
                                            </div>
                                            <button class="btn global-btn pull-right" type="button">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </form>    
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>