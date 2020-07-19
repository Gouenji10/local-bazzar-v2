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
                                <li><i class="la la-clock-o" aria-hidden="true"></i>July 18, 2019 12:20 pm</li>
                                <li><i class="la la-map-marker" aria-hidden="true"></i>Abilene, Kansas</li>
                            </ul>
                            <div class="listing-badge-wrap"> 
                                <span class="badge top-badge badge-warning">Top</span>
                            </div>
                        </div>
                        <div class="content-area">
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <div class="rtin-content">
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. In eu mi bibendum neque egestas congue quisque. At urna condimentum mattis pellentesque id nibh tortor. Aliquam eleifend mi in nulla posuere. Sed sed risus pretium quam vulputate. Sit amet dictum sit amet justo donec enim diam vulputate. Condimentum lacinia quis vel eros donec ac odio. Amet mauris commodo quis imperdiet massa tincidunt nunc pulvinar sapien. Id interdum velit laoreet id. Enim diam vulputate ut pharetra sit. Dictum sit amet justo donec enim diam vulputate. Vestibulum mattis ullamcorper velit sed ullamcorper morbi tincidunt ornare massa.</p><p>Molestie a iaculis at erat pellentesque. Augue interdum velit euismod in. Aliquam id diam maecenas ultricies mi eget mauris pharetra et. Orci sagittis eu volutpat odio facilisis. Euismod nisi porta lorem mollis. Viverra accumsan in nisl nisi. Porttitor eget dolor morbi non arcu risus quis. Magna fringilla urna porttitor rhoncus dolor purus. Eget mi proin sed libero. Vitae justo eget magna fermentum iaculis eu non diam. Leo vel fringilla est ullamcorper eget nulla. Faucibus ornare suspendisse sed nisi lacus sed. Semper risus in hendrerit gravida rutrum. Urna cursus eget nunc scelerisque viverra mauris in. Fermentum posuere urna nec tincidunt.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4">
                                    <h3 class="specs-title">Overview</h3>
                                    <div class="custom-fields clearfix">
                                        <ul>
                                            <li> 
                                                <span class="label">Device Type : </span> 
                                                <span class="title">Laptop</span>
                                            </li>
                                            <li> 
                                                <span class="label">Condition : </span> 
                                                <span class="title">New</span>
                                            </li>
                                            <li> 
                                                <span class="label">Model : </span> 
                                                <span class="title">ZX-4356</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="list-group list-group-flush single-listing-action">
                                        <li class="list-group-item icon-common">
                                            <i class="la la-eye"></i>1,555 views
                                        </li>
                                        <li class="list-group-item icon-common" id="rtcl-favourites">
                                            <a href="javascript:void(0)" class="rtcl-require-login">
                                                <i class="la la-heart-o"></i>
                                                <span class="favourite-label">Add to Favourites</span>
                                            </a>
                                        </li>
                                        <li class="list-group-item icon-common"> 
                                            <a href="javascript:void(0)" class="rtcl-require-login">
                                                <i class="la la-warning"></i>Report Abuse
                                            </a>
                                        </li>
                                        <li class="list-group-item sidebar-social">
                                            <div class="share-label icon-common">
                                                <i class="la ti-sharethis" aria-hidden="true"></i>Share this Ad:
                                            </div> 
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.radiustheme.com/demo/wordpress/themes/classima/listing/ultrabook-2018-core-i7-with-16-gb-ramn/" target="_blank" rel="nofollow">
                                                <i class="ti ti-facebook"></i>
                                            </a> 
                                            <a href="https://twitter.com/intent/tweet?text=Ultrabook%25202018%2520core%2520i7%2520with%252016%2520GB%2520RAM&amp;url=https://www.radiustheme.com/demo/wordpress/themes/classima/listing/ultrabook-2018-core-i7-with-16-gb-ramn/" target="_blank" rel="nofollow">
                                                <i class="ti ti-twitter"></i>
                                            </a> 
                                            <a href="https://plus.google.com/share?url=https://www.radiustheme.com/demo/wordpress/themes/classima/listing/ultrabook-2018-core-i7-with-16-gb-ramn/" target="_blank" rel="nofollow">
                                                <i class="ti ti-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="specs">
                            <h3 class="specs-title">Features:</h3>
                            <ul class="spec-items clearfix list-col-2">
                                <li>256GB PCI flash storage</li>
                                <li>2.7 GHz dual-core Intel Core i5 processor</li>
                                <li>Turbo Boost up to 3.1GHz</li>
                                <li>Intel Iris Graphics 6100</li>
                                <li>8GB memory (up from 4GB in 2013 model)</li>
                                <li>10 hour battery life</li>
                                <li>13.3" Retina Display</li>
                                <li>Intact Box</li>
                                <li>1 Year international warranty</li>
                            </ul>
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




