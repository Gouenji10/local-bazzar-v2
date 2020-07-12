<section class="hero-section">
    <div class="background-overlay">
        <div class="here-content">
            <h1 class="hero-title">Welcome to The Largest <span>Marketplace</span></h1>
            <p>Buy and sell everything from used cars to mobile phones and computers, or search for property, jobs and more</p>
        </div>
    </div>
</section>

<section class="search-section">
    <div class="container"> 
        <div class="row">
            <div class="col-md-3 ss-col">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="la la-map-marker"></i>
                        </span>
                        <input type="text" placeholder="Enter Location..." class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-3 ss-col">
                <div class="form-group select-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="la la-tags"></i>
                        </span>
                        <?php 
                            // $categories = modules::load('category')->get_catgeories();
                            // $categories = array('0' => 'Select Category') + $categories;
                            //echo form_dropdown('category',$categories,'',['class'=>'custom-select form-control', 'required'=>'']);
                        ?>                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 ss-col">
                <div class="form-group">
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="la la-text-width"></i>
                        </span>
                        <input type="text" placeholder="Enter Keywords..." class="form-control">
                    </div>
                </div>
            </div>
            <div class="col-md-2 ss-col">
                <button type="button" class="btn btn-primary  btn-square btn-lg">
                    <i class="la la-search"></i>Search
                </button>
            </div>
        </div>
    </div>
</section>

<section class="featured-section">
    <div class="container pt-5">
        <div class="row gutters-20  pt-5">
            <div class="col-xl-9 col-lg-8">
                <div class="heading-layout2 mb-5">
                    <h2 class="heading-title">Latest Ads</h2>
                </div>
                <div class="product-box-layout">
                    <div class="item-img">
                        <a href="single-product1.html" ><img src="http://localhost/localbazzar/themes/frontend/img/product/product9.jpg" alt="product" ></a>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title"><a href="single-product1.html">HD 27 inch Mac 1 year used only</a></h3>
                        <ul class="entry-meta">
                            <li><i class="la la-map-marker"></i>Port Chester, New York</li>
                            <li><i class="la la-tag"></i> <a href="#">Electronics</a></li>
                            <li><i class="la la-calendar-check-o"></i> 3 months ago</li>
                            <li><i class="la la-eye"></i> 125 Views</li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, tempor incididunt
                            ut labore et dolore magna aliqua. In eu mi bibendum…</p>
                        <div class="item-price">$2,500</div>
                    </div>
                </div>                
            </div>
            <div class="col-xl-3 col-lg-4 sidebar-widget-area sidebar-space-sm">
                <div class="heading-layout2 mb-5">
                    <h2 class="heading-title">Popular Stores</h2>
                </div>
                <div class="widget-bottom-margin widget-store">
                    <div class="store-list px-2 py-4">
                        <div class="store-logo">
                            <a href="store-detail.html"><img src="http://localhost/localbazzar/themes/frontend/img/product/store1.png" alt="store"></a>
                        </div>
                        <div class="store-content">
                            <h3 class="item-title"><a href="store-detail.html">Vix Fashion</a></h3>
                            <div class="store-establish">Since 2019</div>
                            <div class="item-count">1 Ad</div>
                        </div>
                    </div>                    
                </div>
                <div class="widget-bottom-margin widget-banner">
                    <a href="#">
                        <img src="http://localhost/localbazzar/themes/frontend/img/product/widget-banner.png" alt="banner">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="category-section">
    <?php add_action('homepage_category','get_all_category',array('category','hompage_category'),array());?>    
</section>

<section class="info-section">
	<div class="container">
		<div class="row">
		    <div class="col-lg-6">
		        <div class="process-box-layout1">
		            <h3 class="item-title">Placing Ads Has Never Been Easier!</h3>
		            <div class="item-content">
		                <ul>
		                    <li><i class="la la-check"></i> Submit your Ads</li>
		                    <li><i class="la la-check"></i> Promote your Ads</li>
		                    <li><i class="la la-check"></i> Save favorite Ads</li>
		                    <li><i class="la la-check"></i> Share on Social Media</li>
		                    <li><i class="la la-check"></i> And more...</li>
		                </ul>
		            </div>
		            <div class="item-btn">
                    <button class="btn btn-danger mr-1 mb-2" data-toggle="modal" data-target="#register"> <i class="la la-user"></i> Register Now</button>
		            </div>
		        </div>
		    </div>
		</div>
	</div>
</section>

<section class="work-section">
    <div class="container">
        <div class="heading-layout1">
            <h1 class="heading-title text-center title-with-bar">How it Works</h1>
        </div>
        <div class="row gutters-20">
            <hr>
            <div class="col-lg-3 col-sm-6">
                <div class="process-box-layout2">
                    <div class="item-icon">
                        <i class="la la-user-plus"></i>
                    </div>
                    <div class="item-content text-center">
                        <h3 class="item-title">Create Account</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="process-box-layout2">
                    <div class="item-icon">
                        <i class="ti ti-pencil-alt"></i>
                    </div>
                    <div class="item-content text-center">
                        <h3 class="item-title">Post your Ad</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="process-box-layout2">
                    <div class="item-icon">
                        <i class="la la-bullhorn"></i>
                    </div>
                    <div class="item-content text-center">
                        <h3 class="item-title">Get Offers</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="process-box-layout2">
                    <div class="item-icon">
                        <i class="la la-rupee"></i>
                    </div>
                    <div class="item-content text-center">
                        <h3 class="item-title">Sell Your Item</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="counter-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="counter-box-layout1">
                    <div class="item-icon">
                        <i class="la la-gift"></i>
                    </div>
                    <div class="item-content">
                        <div class="counter-number">
                            <span class="counter">5000</span>
                            <span>+</span>
                        </div>
                        <div class="item-title">Published Ads</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="counter-box-layout1">
                    <div class="item-icon">
                        <i class="la la-users"></i>
                    </div>
                    <div class="item-content">
                        <div class="counter-number">
                            <span class="counter">3265</span>
                            <span>+</span>
                        </div>
                        <div class="item-title">Registered Users</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <div class="counter-box-layout1">
                    <div class="item-icon">
                        <i class="la la-user-plus"></i>
                    </div>
                    <div class="item-content">
                        <div class="counter-number">
                            <span class="counter">2000</span>
                            <span>+</span>
                        </div>
                        <div class="item-title">Verified Users</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="most-viewed-section pt-5">
    <div class="container">
        <div class="heading-layout1 pt-3 pb-5">
            <h2 class="heading-title">Most Popular Ads</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-box-layout1">
                    <div class="item-img">
                        <a href="single-product1.html" bis_size="{&quot;x&quot;:88,&quot;y&quot;:4065,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:88,&quot;abs_y&quot;:4065}"><img src="http://localhost/localbazzar/themes/frontend/img/product/product1.jpg" alt="Product" bis_size="{&quot;x&quot;:88,&quot;y&quot;:4065,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:88,&quot;abs_y&quot;:4065}" bis_id="bn_iqi43hyl8vpbibnd5ipk11"></a>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title"><a href="single-product1.html">HD 27 inch Mac 1 year used only</a></h3>
                        <ul class="entry-meta">
                            <li><i class="fa fa-clock-o"></i>3 months ago</li>
                            <li><i class="fa fa-map-marker"></i>Port Chester, New York</li>
                        </ul>
                        <div class="item-price">
                            <span class="currency-symbol">$</span>
                            2,500
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-box-layout1">
                    <div class="item-img">
                        <a href="single-product1.html" bis_size="{&quot;x&quot;:390,&quot;y&quot;:4065,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:390,&quot;abs_y&quot;:4065}"><img src="http://localhost/localbazzar/themes/frontend/img/product/product2.jpg" alt="Product" bis_size="{&quot;x&quot;:390,&quot;y&quot;:4065,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:390,&quot;abs_y&quot;:4065}" bis_id="bn_xb4z8an0o2aelfsifu09gr"></a>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title"><a href="single-product1.html">New Banded Smart Watch from China</a></h3>
                        <ul class="entry-meta">
                            <li><i class="fa fa-clock-o"></i>3 months ago</li>
                            <li><i class="fa fa-map-marker"></i>Kansas, Emporia</li>
                        </ul>
                        <div class="item-price">
                            <span class="currency-symbol">$</span>
                            47
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-box-layout1">
                    <div class="item-img">
                        <a href="single-product1.html" class="item-trending" bis_size="{&quot;x&quot;:693,&quot;y&quot;:4065,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:693,&quot;abs_y&quot;:4065}"><img src="http://localhost/localbazzar/themes/frontend/img/product/product3.jpg" alt="Product" bis_size="{&quot;x&quot;:693,&quot;y&quot;:4065,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:693,&quot;abs_y&quot;:4065}" bis_id="bn_xkh3gor9mugxcz457g1dmi"></a>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title"><a href="single-product1.html">High quality brand new headphone</a></h3>
                        <ul class="entry-meta">
                            <li><i class="fa fa-clock-o"></i>3 months ago</li>
                            <li><i class="fa fa-map-marker"></i>New York, Mineola</li>
                        </ul>
                        <div class="item-price">
                            <span class="currency-symbol">$</span>
                            15
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-box-layout1">
                    <div class="item-img">
                        <a href="single-product1.html" bis_size="{&quot;x&quot;:995,&quot;y&quot;:4065,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:995,&quot;abs_y&quot;:4065}"><img src="http://localhost/localbazzar/themes/frontend/img/product/product4.jpg" alt="Product" bis_size="{&quot;x&quot;:995,&quot;y&quot;:4065,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:995,&quot;abs_y&quot;:4065}" bis_id="bn_5we5tv718lw8jd2xdi9987"></a>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title"><a href="single-product1.html">Running shoes imported from china</a></h3>
                        <ul class="entry-meta">
                            <li><i class="fa fa-clock-o"></i>3 months ago</li>
                            <li><i class="fa fa-map-marker"></i>California, Bakersfield</li>
                        </ul>
                        <div class="item-price">
                            <span class="currency-symbol">$</span>
                            36
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-box-layout1">
                    <div class="item-img">
                        <a href="single-product1.html" bis_size="{&quot;x&quot;:88,&quot;y&quot;:4473,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:88,&quot;abs_y&quot;:4473}"><img src="http://localhost/localbazzar/themes/frontend/img/product/product5.jpg" alt="Product" bis_size="{&quot;x&quot;:88,&quot;y&quot;:4473,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:88,&quot;abs_y&quot;:4473}" bis_id="bn_jocamp67v9avcebfx4h4li"></a>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title"><a href="single-product1.html">Team Jersey available in reasonable price</a></h3>
                        <ul class="entry-meta">
                            <li><i class="fa fa-clock-o"></i>4 months ago</li>
                            <li><i class="fa fa-map-marker"></i>New Jersey, Bloomfield</li>
                        </ul>
                        <div class="item-price">
                            <span class="currency-symbol">$</span>
                            90
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-box-layout1">
                    <div class="item-img">
                        <a href="single-product1.html" bis_size="{&quot;x&quot;:390,&quot;y&quot;:4473,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:390,&quot;abs_y&quot;:4473}"><img src="http://localhost/localbazzar/themes/frontend/img/product/product6.jpg" alt="Product" bis_size="{&quot;x&quot;:390,&quot;y&quot;:4473,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:390,&quot;abs_y&quot;:4473}" bis_id="bn_hger2v3vzdm5fxwu2jf1yh"></a>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title"><a href="single-product1.html">Export quality bag pack wholesale min 100 pcs</a></h3>
                        <ul class="entry-meta">
                            <li><i class="fa fa-clock-o"></i>4 months ago</li>
                            <li><i class="fa fa-map-marker"></i>Louisiana, Bogalusa</li>
                        </ul>
                        <div class="item-price">
                            <span class="currency-symbol">$</span>
                            180
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-box-layout1">
                    <div class="item-img">
                        <a href="single-product1.html" bis_size="{&quot;x&quot;:693,&quot;y&quot;:4473,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:693,&quot;abs_y&quot;:4473}"><img src="http://localhost/localbazzar/themes/frontend/img/product/product7.jpg" alt="Product" bis_size="{&quot;x&quot;:693,&quot;y&quot;:4473,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:693,&quot;abs_y&quot;:4473}" bis_id="bn_yght2kxra0cl5vnnzhm8nj"></a>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title"><a href="single-product1.html">Ultrabook 2018 core i7 with 16 GB RAM</a></h3>
                        <ul class="entry-meta">
                            <li><i class="fa fa-clock-o"></i>4 months ago</li>
                            <li><i class="fa fa-map-marker"></i>Kansas, Abilene</li>
                        </ul>
                        <div class="item-price">
                            <span class="currency-symbol">$</span>
                            1,300
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="product-box-layout1">
                    <div class="item-img">
                        <a href="single-product1.html" bis_size="{&quot;x&quot;:995,&quot;y&quot;:4473,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:995,&quot;abs_y&quot;:4473}"><img src="http://localhost/localbazzar/themes/frontend/img/product/product8.jpg" alt="Product" bis_size="{&quot;x&quot;:995,&quot;y&quot;:4473,&quot;w&quot;:272,&quot;h&quot;:193,&quot;abs_x&quot;:995,&quot;abs_y&quot;:4473}" bis_id="bn_zfayh7hd4n11ck9kg9cm88"></a>
                    </div>
                    <div class="item-content">
                        <h3 class="item-title"><a href="single-product1.html">Toy Bundle Export Quality form China wholesale</a></h3>
                        <ul class="entry-meta">
                            <li><i class="fa fa-clock-o"></i>4 months ago</li>
                            <li><i class="fa fa-map-marker"></i>New York, Brooklyn</li>
                        </ul>
                        <div class="item-price">
                            <span class="currency-symbol">$</span>
                            230
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>