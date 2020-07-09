<div class="container">
        <div class="row">
            <h1 class="text-center w-100 title-with-bar">Popular Category</h1>
        </div>
        <div class="row mt-5">
            <div class="category-carousel owl-carousel owl-theme">
                <?php foreach($categories as $category):?>
                        <div class="category-item">
                            <div class="icon">
                                <i class="<?php echo $category['icon'];?>"></i>
                            </div>
                            <div class="services-content">
                                <h3><a href="<?php echo base_url('cat/'.$category['slug']);?>"> <?php echo $category['title'];?> </a> </h3>
                                <p>0 Ads</p>
                            </div>
                        </div>                                                    
                <?php endforeach;?>
            </div>            
        </div>
    </div>