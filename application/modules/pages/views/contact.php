<div class="breadcrumb-box">
    <div class="background-overlay  py-5">
        <div class="container">
            <div class="title">
                <h1>Contact</h1>
            </div>
            <div class="site-breadcrumbs">
                <ul>
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>
        </div>
    </div>    
</div>

<div class="contact-wrapper pt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                <div class="title"><h2>Send Us A Message</h2></div>
                <form action="" class="mt-5">
                    <?php apply_hook('contact_form');?>
                    <div class="form-group row mb-4 mt-5 text-left submit-row">
                        <div class="col-xl-12">
                            <input type="submit" value="Submit" class="btn global-btn" id="ad_submit">
                        </div>
                    </div>
                </form>
                
            </div>
            <div class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                <div class="title"><h2>Information</h2></div>
                <div class="contact-text mt-5 pt-4">
                    <ul>
                        <li>
                            <i class="la la-paper-plane" aria-hidden="true"></i> 
                            PO Box 16122 Collins Street West Victoria 8007 Australia
                        </li>
                        <li>
                            <i class="ion ion-speakerphone" aria-hidden="true"></i> 
                            <a href="tel:+1238884444"> +1238884444</a>
                        </li>
                        <li>
                            <i class="ion ion-email-unread" aria-hidden="true"></i> 
                            <a href="mailto:info@example.com">info@example.com</a>
                        </li>
                        <li>
                            <i class="la la-fax" aria-hidden="true"></i> +1234657890
                        </li>
                    </ul>
                    <p class="small">
                        We do not buy or sell any product listed on the site. You must contact the seller direcly on their phone number shown in the product page. So kindly DO NOT CALL US if you want to buy any product.
                    </p>
                </div>
                                    
            </div>
        </div>
    </div>
</div>