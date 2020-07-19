<div class="breadcrumb-box">
    <div class="background-overlay  py-5">
        <div class="container">
            <div class="title">
                <h1>Post an Ad</h1>
            </div>
            <div class="site-breadcrumbs">
                <ul>
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="#">Post an Ad</a></li>
                </ul>
            </div>
        </div>
    </div>    
</div>

 <!-- End Page Header -->
<div class="ad-information-row">
    <div class="container">        
            <?php if($this->ion_auth->logged_in()):?>
                <form method="POST" action="<?php echo base_url('ads/save_ads');?>" enctype="multipart/form-data" class="needs-validation" novalidate>
                    <div class="row flex-row">
                        <div class="col-md-7">
                            <div class="ad-information">
                                <div class="title mb-5">
                                    <h3>Ad Information</h3>
                                </div>
                                <div class="content">                                
                                    <div class="form-group row">                                                    
                                        <div class="col-xl-6 category-select">
                                            <label class="form-control-label">Category<span class="text-danger ml-2">*</span></label>
                                            <?php 
                                                $categories = modules::load('category')->get_catgeories();
                                                $categories = array('0' => 'Select Category') + $categories;
                                                echo form_dropdown('category',$categories,'',['class'=>'custom-select form-control', 'required'=>'']);
                                            ?>
                                        </div>
                                        <div class="col-xl-6  mb-3 sub-category-select">
                                            <label class="form-control-label">Sub Category<span class="text-danger ml-2">*</span></label>
                                            <select name="sub_category" class="custom-select form-control">
                                                <option value="">Select Sub Category</option>
                                            </select>
                                        </div>
                                    </div>
                                    <?php apply_hook('basic_information');?>
                                    <?php apply_hook('global_information');?>
                                    <div class="sub-category-content"></div>
                                    <?php apply_hook('general_information');?>
                                    <div class="form-group row mb-5">
                                        <div class="col-xl-12 mb-3">
                                            <label class="form-control-label">Upload Images<span class="text-danger ml-2">*</span></label>                                
                                            <div class="ads-gallery"></div>
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="contact-information">
                                <div class="title mb-5">
                                    <h3>Contact Information</h3>
                                </div>
                                <div class="content">                                
                                    <div class="form-group row">                                                
                                        <div class="col-xl-12">
                                            <label class="form-control-label">This Ad Belongs To:</label>
                                            <div class="row mt-1 mb-4 ad_person">
                                                <div class="col-md-6">
                                                    <div class="styled-radio">
                                                        <input type="radio" name="radio" id="rad-1" value="me">
                                                        <label for="rad-1">Me</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="styled-radio">
                                                        <input type="radio" name="radio" id="rad-2" checked="" value="else">
                                                        <label for="rad-2">Someone Else</label>
                                                    </div>
                                                </div>                                
                                            </div>
                                        </div>
                                    </div>
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
                                            <label class="form-control-label">City<span class="text-danger ml-2">*</span></label>
                                            <input type="text" name="city" class="form-control" required>
                                            <div class="invalid-feedback">
                                                    City cannot be empty.
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
                                    <div class="form-group row mb-3">
                                        <div class="col-lg-12">                                
                                            <div class="custom-control custom-checkbox styled-checkbox col-md-12 col-lg-12 mb-2">
                                                <input class="custom-control-input" type="checkbox" name="" id="terms">
                                                <label class="custom-control-descfeedback" for="terms">I agree to all <a href="javascript:void(0);">Terms of Use &amp; Posting Rules</a></label>														
                                            </div>                            
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4 mt-5 text-right submit-row">
                                        <div class="col-xl-12">
                                            <input type="submit" value="Submit" class="btn global-btn" id="ad_submit">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            <?php else:?>
                <div class="col-md-12">
                    <div class="alert alert-danger-bordered alert-lg square" role="alert">
                        <i class="ti ti-face-sad mr-2"></i>
                        <strong>Hey!</strong> It seems you are not logged In. If you have an account please <a href="#" data-toggle="modal" data-target="#login"> Log In</a> else please <a href="#" data-toggle="modal" data-target="#register"> Register</a>
                    </div>
                </div>
            <?php endif;?>
         </div>           
     </div>    
</div>