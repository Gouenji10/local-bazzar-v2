<div class="off-sidebar from-right">
    <div class="off-sidebar-container">
    	<header class="off-sidebar-header">
			<div class="pl-3"><h2><strong>New <?php echo $input_fields['title'];?></strong></h2></div>            
		    <a href="#off-canvas" class="off-sidebar-close"></a>
		</header>
		<hr>
		<div class="off-sidebar-content offcanvas-scroll auto-scroll">
    		<form class="needs-validation <?php echo strtolower($input_fields['slug']);?>_form_add" novalidate>
				<?php                     
					if(isset($additional)){
						add_action('load_add_fields','add_content_fields',array('home','getFields'),array('input_fields'=>$input_fields['fields'],'additional'=>$additional)); 
					}else{
						add_action('load_add_fields','add_content_fields',array('home','getFields'),array('input_fields'=>$input_fields['fields'])); 
					}
                    
                ?>
				<div class="text-right">
            		<button class="btn btn-gradient-01" type="submit">Submit Form</button>
            		<button class="btn btn-shadow" type="reset">Reset</button>
        		</div>
    		</form>
		</div>
    </div>
    <!-- End Offsidebar Container -->
</div>
<!-- End Offcanvas Sidebar -->
