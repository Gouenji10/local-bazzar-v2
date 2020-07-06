<div class="ads-post-header py-5">
    <div class="container">
        <div class="title">
            <h1>Post an Ad</h1>
        </div>
    </div>
</div>

 <!-- End Page Header -->
 <div class="row flex-row">
    <div class="col-xl-12">
        <!-- Form -->
        <div class="widget mb-0">
            <div class="widget-body">
                <div class="row flex-row justify-content-center">
                    <div class="col-xl-10">
                        <form class="" method="POST" action="<?php echo base_url('ads/save_ads');?>" id="post_ads" enctype="multipart/form-data" >
                            <div id="ad-form-content">
                                <div class="form-group row mb-5">                                                    
                                    <div class="col-xl-6 category-select">
                                        <label class="form-control-label">Category<span class="text-danger ml-2">*</span></label>
                                        <?php 
                                            $categories = modules::load('category')->get_catgeories();
                                            $categories = array('0' => 'Select Category') + $categories;
                                            echo form_dropdown('category',$categories,'',['class'=>'custom-select form-control', 'required'=>'']);
                                        ?>
                                    </div>
                                    <div class="col-xl-6 sub-category-select">
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

                                



                                <div class="form-group row mb-5">
                                    <div class="col-xl-6 mb-3">
                                        <label class="form-control-label">Address<span class="text-danger ml-2">*</span></label>
                                        <input type="text" name="address" class="form-control" required>
                                        <div class="invalid-feedback">
											 Address cannot be empty.
										 </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <label class="form-control-label">Zone<span class="text-danger ml-2">*</span></label>
                                        <?php 
                                            $zones = modules::load('ads')->get_zones();            
                                            array_unshift($zones, "Select Zone");
                                            echo form_dropdown('zone',$zones,'',['class'=>'custom-select form-control custom-zone']);
                                        ?>                                            
                                    </div>
                                </div>
                                
                                
                                <div class="form-group row mb-3">
                                    <div class="col-xl-4 mb-3">
                                        <label class="form-control-label">City<span class="text-danger ml-2">*</span></label>
                                        <input type="text" name="city" class="form-control" required>
                                        <div class="invalid-feedback">
											 City cannot be empty.
										 </div>
                                    </div>
                                    <div class="col-xl-4 mb-5 district">
                                        <label class="form-control-label">District<span class="text-danger ml-2">*</span></label>                                            
                                        <select name="district" class="custom-select form-control">
                                            <option value="0">Select District</option>
                                        </select>                                                                                    
                                    </div>
                                    <div class="col-xl-4">
                                        <label class="form-control-label">Contact No<span class="text-danger ml-2">*</span></label>
                                        <input type="text" name="contact" class="form-control" required>
                                        <div class="invalid-feedback">
											Contact no cannot be empty.
										 </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-4 mt-5 text-right submit-row">
                                    <div class="col-xl-12">
                                        <input type="submit" value="Submit" class="btn btn-primary" id="ad_submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form -->
    </div>
</div>
<!-- End Row -->