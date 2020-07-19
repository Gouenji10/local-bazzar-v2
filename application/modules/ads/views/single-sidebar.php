<?php $ads_details = unserialize($single['additional_info']);$single_content = $ads_details['content'];?>
<aside class="sidebar-widget-area">
    <div class="listing-single-sidebar">
        <div class="price">
            <span class="price-amount amount">
                <span class="price-currencySymbol"><i class="la la-rupee"></i>    </span>
                <?php echo $single_content['price'];?>
                <?php if($single_content['price_negotiable'] == 'Yes'){
                    echo '<small>Price Negotiable</small>';
                }else{
                    echo '<small>Fixed Price</small>';
                }?>
                
            </span>
        </div>
        <div class="seller-info widget">
            <h3 class="widgettitle">Seller Information</h3>
            <div class="info-box">
                <div class="author"> 
                    <img class="store-thumbnail" src="https://www.radiustheme.com/demo/wordpress/themes/classima/wp-content/uploads/2019/08/logo4-1-180x135.jpg" alt="RadiusTheme">
                    <h4 class="name">
                        <a href="#">Sanjay Chaudhary</a>
                    </h4>
                </div>
                <div class="location box-item clearfix"> 
                    <i class="la la-map-marker" aria-hidden="true"></i>
                    <div class="box-item-text">
                        <div><?php echo $single_content['address'].','.$single_content['city'];?> </div>
                        <div><?php echo $single_content['district'].','. $single_content['zone'];?></div>
                    </div>
                </div>
                <div class="store box-item clearfix"> 
                    <i class="la la-users" aria-hidden="true"></i>
                    <a class="box-item-text" href="<?php echo base_url('proifle/user/'.$single['user_id']);?>">View Profile</a>
                </div>
                <div class="phone">
                    <div class="rtcl-contact-reveal-wrapper reveal-phone" >
                        <div class="numbers"><?php echo $single_content['contact'];?></div> 
                        <small class="text-muted">Click to reveal phone number</small>
                    </div>
                </div>
                <div class="media email"> 
                    <a data-toggle="modal" data-target="#mail-to-seller" href="#">
                        <i class="ion ion-email-unread" aria-hidden="true"></i>Email to Seller
                    </a>
                </div>
            </div>
        </div>
        <div class="ad-after-sidebar">
            <a href="#" target="_blank" rel="nofollow">
                <img src="https://www.radiustheme.com/demo/wordpress/themes/classima/wp-content/uploads/2019/10/ads3.png" class="attachment-full size-full" alt="" srcset="https://www.radiustheme.com/demo/wordpress/themes/classima/wp-content/uploads/2019/10/ads3.png 280w, https://www.radiustheme.com/demo/wordpress/themes/classima/wp-content/uploads/2019/10/ads3-196x300.png 196w, https://www.radiustheme.com/demo/wordpress/themes/classima/wp-content/uploads/2019/10/ads3-91x140.png 91w" sizes="(max-width: 280px) 100vw, 280px" width="280" height="429">
            </a>
        </div>
        <div class="modal fade" id="mail-to-seller" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header"> 
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                            <span aria-hidden="true">×</span> 
                        </button>
                    </div>
                    <div class="modal-body" data-hide="0">
                        <form id="rtcl-contact-form" class="form-vertical" novalidate="novalidate">
                            <div class="form-group"> 
                                <input type="text" class="form-control" id="rtcl-contact-name" placeholder="Name *" required="">
                            </div>
                            <div class="form-group"> 
                                <input type="email" class="form-control" id="rtcl-contact-email" placeholder="Email*" required="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="rtcl-contact-message" rows="3" placeholder="Message*" required=""></textarea>
                            </div>
                            <div id="rtcl-contact-g-recaptcha"></div>
                            <p id="rtcl-contact-message-display"></p> 
                            <button type="submit" class="btn btn-primary">Submit </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>