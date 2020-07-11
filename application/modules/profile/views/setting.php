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
                    <li><a href="#">Setting</a></li>
                </ul>
            </div>
        </div>
    </div>    
</div>

<div class="profile-setting-content profile-content py-5">
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
                            <h2 class="dashbord-title">Account Setting</h2>
                        </div>
                        <div class="dashboard-wrapper">
                            <form class="row form-dashboard">
                                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                                    <div class="privacy-box deleteaccount">
                                        <div class="dashboardboxtitle">
                                            <h2>Contact Information</h2>
                                        </div>
                                        <div class="dashboardholder">
                                            <div class="form-group row">
                                                <div class="col-xl-12 mb-3">
                                                    <label class="form-control-label">Address<span class="text-danger ml-2">*</span></label>
                                                    <input type="text" name="address" class="form-control" required>
                                                    <div class="invalid-feedback">
                                                            Address cannot be empty.
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xl-12 mb-3">
                                                    <label class="form-control-label">Zone<span class="text-danger ml-2">*</span></label>
                                                    <?php 
                                                        $zones = modules::load('ads')->get_zones();            
                                                        array_unshift($zones, "Select Zone");
                                                        echo form_dropdown('zone',$zones,'',['class'=>'custom-select form-control custom-zone']);
                                                    ?>                                            
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xl-12 mb-3">
                                                    <label class="form-control-label">City<span class="text-danger ml-2">*</span></label>
                                                    <input type="text" name="city" class="form-control" required>
                                                    <div class="invalid-feedback">
                                                            City cannot be empty.
                                                        </div>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xl-12 mb-3 district">
                                                    <label class="form-control-label">District<span class="text-danger ml-2">*</span></label>                                            
                                                    <select name="district" class="custom-select form-control">
                                                        <option value="0">Select District</option>
                                                    </select>                                                                                    
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-xl-12 mb-3">
                                                    <label class="form-control-label">Contact No<span class="text-danger ml-2">*</span></label>
                                                    <input type="text" name="contact" class="form-control" required>
                                                    <div class="invalid-feedback">
                                                        Contact no cannot be empty.
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn global-btn pull-right" type="button">Submit</button>
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