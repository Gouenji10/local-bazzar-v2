<div class="breadcrumb-box">
    <div class="background-overlay  py-5">
        <div class="container">
            <div class="title">
                <h1><?php echo $single['title'];?></h1>
            </div>
            <div class="site-breadcrumbs">
                <ul>
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="#">Ads</a></li>
                    <li><a href="#"><?php echo $single['title'];?></a></li>
                </ul>
            </div>
        </div>
    </div>    
</div>
<?php $ads_details = unserialize($single['additional_info']);$single_ads = $ads_details['content'];?>
<div class="single-ad mt-5">
    <div class="container">
        <div class="row flex-row">
            <div class="col-lg-9 col-md-9 col-xs-12 col-sm-12">
                <div class="main-content">
                    <div class="box-container">
                        <div class="ad_slider_container">
                            <div class="slider slider-for">
                                <?php foreach($ads_details['images'] as $image):?>
                                    <div>
                                        <?php echo "<img src='".base_url('uploads/ads')."/".date('Y', strtotime($single['created_at']))."/".date('m', strtotime($single['created_at']))."/".$image."'>";?>
                                    </div>
                                <?php endforeach;?>
                            </div>
                            <div class="slider slider-nav">
                                <?php foreach($ads_details['images'] as $image):?>
                                    <div>
                                        <?php echo "<img src='".base_url('uploads/ads')."/".date('Y', strtotime($single['created_at']))."/".date('m', strtotime($single['created_at']))."/".$image."'>";?>
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <div class="single-listing-meta-wrap">
                            <ul class="single-listing-meta">
                                <li><i class="la la-clock-o" aria-hidden="true"></i><?php echo date('F d, Y',strtotime($single['created_at']));?></li>
                                <li><i class="la la-map-marker" aria-hidden="true"></i> <?php echo $single_ads['address'].', '.$single_ads['city'].', ',$single_ads['district'];?></li>
                            </ul>
                            <div class="listing-badge-wrap"> 
                                <span class="badge top-badge badge-warning">Urgent</span>
                            </div>
                        </div>
                        <div class="content-area">
                            <div class="row">
                                <div class="col-12 col-md-12">
                                    <h3 class="specs-title">Overview</h3>
                                    <div class="overview-fields clearfix">
                                        <ul>
                                            <li> 
                                                <span class="label">Category: </span> 
                                                <span class="title"><?php $category = modules::load('category')->get_single_category($single['category']);echo $category['title'];?></span>
                                            </li>
                                            <li> 
                                                <span class="label">Type: </span> 
                                                <span class="title"><?php $sub_category = modules::load('category')->get_single_sub_category($single['sub_category']);echo $sub_category['title'];?></span>
                                            </li>
                                            
                                            <li> 
                                                <span class="label">Condition : </span> 
                                                <span class="title"><?php echo $single_ads['condition'];?></span>
                                            </li>
                                            
                                            <li> 
                                                <span class="label">Warranty: </span> 
                                                <span class="title"><?php echo $single_ads['warranty_type'];?></span>
                                            </li>
                                            <li> 
                                                <span class="label">Home Delivery: </span> 
                                                <span class="title"><?php echo $single_ads['home_delivery'];?></span>
                                            </li>
                                            <?php if(isset($single_ads['used_duration'])):?>
                                                <li> 
                                                    <span class="label">Used Duration: </span> 
                                                    <span class="title"><?php echo $single_ads['used_duration'];?></span>
                                                </li>
                                            <?php endif;?>  
                                            <?php if(isset($single_ads['Registered_Zone'])):?>  
                                                <li> 
                                                    <span class="label">Registered Zone: </span> 
                                                    <span class="title"><?php echo $single_ads['Registered_Zone'];?></span>
                                                </li>
                                            <?php endif;?>
                                            <?php if(isset($single_ads['lot_no'])):?>
                                            
                                                <li> 
                                                    <span class="label">Lot No: </span> 
                                                    <span class="title"><?php echo $single_ads['lot_no'];?></span>
                                                </li>
                                            <?php endif;?>
                                            <?php if(isset($single_ads['Engine_CC'])):?>
                                                <li> 
                                                    <span class="label">Engine CC: </span> 
                                                    <span class="title"><?php echo $single_ads['Engine_CC'];?></span>
                                                </li>
                                            <?php endif;?>
                                            <?php if(isset($single_ads['Make_Year'])):?>
                                                <li> 
                                                    <span class="label">Made In: </span> 
                                                    <span class="title"><?php echo $single_ads['Make_Year'];?></span>
                                                </li>
                                            <?php endif;?>
                                            <?php if(isset($single_ads['Mileage_(km_/_l)'])):?>
                                                <li> 
                                                    <span class="label">Mileage Km/ltr: </span> 
                                                    <span class="title"><?php echo $single_ads['Mileage_(km_/_l)'];?></span>
                                                </li>
                                            <?php endif;?>
                                            <?php if(isset($single_ads['Kilometers'])):?>
                                                <li> 
                                                    <span class="label">Ran Upto: </span> 
                                                    <span class="title"><?php echo $single_ads['Kilometers'];?> km</span>
                                                </li>
                                            <?php endif;?>
                                        </ul>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="listing-action">
                            <ul class="single-listing-action">
                                <li>
                                    <i class="la la-eye"></i>1,555 views
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="rtcl-require-login">
                                        <i class="la la-heart-o"></i>
                                        <span class="favourite-label">Add to Favourites</span>
                                    </a>
                                </li>
                                <li> 
                                    <a href="javascript:void(0)" class="rtcl-require-login">
                                        <i class="la la-warning"></i>Report Abuse
                                    </a>
                                </li>                                        
                            </ul>
                        </div>
                        <div class="specs">
                            <?php if(isset($single_ads['Features'])):?>
                                <h3 class="specs-title">Features:</h3>
                                <ul class="spec-items clearfix list-col-2">
                                    <?php 
                                        foreach($single_ads['Features'] as $feature){
                                            echo "<li>".$feature."</li>";
                                        }                                    
                                    ?>
                                                                        
                                </ul>
                            <?php endif;?>
                        </div>
                        <div class="description">
                            <h3 class="desc-title">Description</h3>
                            <p><?php echo $single_ads['description'];?></p>
                        </div>
                    </div>            
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="single-sidebar-widget">
                    <?php apply_hook('single_sidebar');?>
                </div>                
            </div>
        </div>
    </div>
</div>




