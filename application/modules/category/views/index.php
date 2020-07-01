<div class="container">
        <div class="row">
            <h1 class="text-center w-100">Popular Category</h1>
        </div>
        <div class="row mt-5">
            <?php foreach($categories as $category):?>
                <div class="col-md-4">
                    <div class="widget widget-12 has-shadow">
                        <a href="<?php echo base_url('cat/'.$category['slug']);?>">
                            <div class="widget-body">
                                <div class="media">
                                    <div class="align-self-center ml-3 mr-3">
                                        <i class="<?php echo $category['icon'];?>"></i>
                                    </div>
                                    <div class="media-body align-self-center">
                                        <div class="title"><?php echo $category['title'];?></div>
                                        <div class="number">0 Ads</div>
                                    </div>
                                </div>
                            </div>
                        </a>                        
                    </div>
                </div>            
            <?php endforeach;?>
        </div>
    </div>