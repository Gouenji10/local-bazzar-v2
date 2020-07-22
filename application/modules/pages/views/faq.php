<div class="breadcrumb-box">
    <div class="background-overlay  py-5">
        <div class="container">
            <div class="title">
                <h1>FAQ</h1>
            </div>
            <div class="site-breadcrumbs">
                <ul>
                    <li><a href="<?php echo base_url();?>">Home</a></li>
                    <li><a href="#">FAQ</a></li>
                </ul>
            </div>
        </div>
    </div>    
</div>
<div class="faq-wrapper" style="background:#fff;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12">
                <div id="accordion-icon-left" class="accordion-icon icon-01">
                    <!-- Begin Widget -->
                    <div class="widget">
                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <h2>Frequently Asked Questions</h2>
                        </div>

                        <?php
                            $i=1; 
                            foreach($faqs as $faq){
                            ?>
                            <a class="card-header d-flex align-items-center collapsed" data-toggle="collapse" href="#IconLeftCollapse<?php echo $i;?>" aria-expanded="false">
                                <div class="card-title"><?php echo $faq['question'];?></div>
                            </a>
                            <div id="IconLeftCollapse<?php echo $i;?>" class="card-body pt-0 collapse" data-parent="#accordion-icon-left" style="">
                                <p><?php echo $faq['answer'];?></p>
                            </div>
                            <?php
                            $i++;
                        }?>                        
                    </div>
                    <!-- End Widget -->
                </div>
            </div>
        </div>
    </div>
</div>
