<!-- Begin Side Navbar -->
<nav class="side-navbar box-scroll sidebar-scroll">
    <!-- Begin Main Navigation -->
    <ul class="list-unstyled">
        <li <?php echo $page=='home'?'class="active"':""?> ><a href="<?php echo base_url('admin/home');?>"><i class="la la-columns"></i><span>Dashboard</span></a></li>       
    </ul>
    <span class="heading">Lisitngs</span>
    <ul class="list-unstyled">
        <!-- <?php $link=array("category","sub-category");?>
        <li <?php echo in_array($page,$link)?'class="active"':""?> >
            <a href="#dropdown-cat" aria-expanded="<?php echo in_array($page,$link)?'true':'false'?>" data-toggle="collapse"><i class="la la-share-alt"></i><span>Category</span></a>
            <ul id="dropdown-cat" class="collapse list-unstyled pt-0 <?php echo in_array($page,$link)?'show':""?> ">
                <li><a <?php echo $page=='category'?'class="active"':""?> href="<?php echo site_url('admin/category');?>">Categories</a></li>
                <li><a <?php echo $page=='sub-category'?'class="active"':""?> href="<?php echo site_url('admin/sub-category');?>">Sub Categories</a></li>
            </ul>
        </li>
        <li><a href="#dropdown-ads" aria-expanded="false" data-toggle="collapse"><i class="la la-list-alt"></i><span>Ads Listings</span></a>
            <ul id="dropdown-ads" class="collapse list-unstyled pt-0">
                <li><a href="#">Unapproved Ads</a></li>
                <li><a href="#">Approved Ads</a></li>
                <li><a href="#">All Ads</a></li>

            </ul>
        </li>
        <li><a href="#dropdown-review" aria-expanded="false" data-toggle="collapse"><i class="la la-star-half-empty"></i><span>Reveiws</span></a>
            <ul id="dropdown-review" class="collapse list-unstyled pt-0">
                <li><a href="#">Unapproved Reviews</a></li>
                <li><a href="#">Approved Reviews</a></li>
                <li><a href="#">All Reviews</a></li>
            </ul>
        </li>
        <li><a href="<?php echo base_url('admin/home');?>"><i class="la la-columns"></i><span>Menus</span></a></li>           -->
    </ul> 
    <span class="heading">Custom Fields</span>
    <ul class="list-unstyled">
        <!-- <li <?php echo $page=='cpt'?'class="active"':""?> >
            <a href="#dropdown-custom" <?php echo $page=='cpt'?'aria-expanded="true"':'aria-expanded="false"'?> data-toggle="collapse"><i class="la la-th-large"></i><span>Custom Fields</span></a>
            <ul id="dropdown-custom" class="collapse list-unstyled pt-0 <?php echo $page=='custom'?'show':''?>">
                <li><a <?php echo $page=='cpt'?'class="active"':""?> href="<?php echo site_url('admin/custom');?>">Custom Fields</a></li>
            </ul>
        </li> -->
        <?php $cpt = array('cpt','taxonomy');?>
        <li <?php echo in_array($page,$cpt)?'class="active"':""?> >
            <a href="#dropdown-cpt" <?php echo in_array($page,$cpt)?'aria-expanded="true"':'aria-expanded="false"'?> data-toggle="collapse"><i class="la la-th-large"></i><span>Custom Post Type</span></a>
            <ul id="dropdown-cpt" class="collapse list-unstyled pt-0 <?php echo in_array($page,$cpt)?'show':''?>">
                <li><a <?php echo $page=='cpt'?'class="active"':""?> href="<?php echo site_url('admin/cpt');?>">Custom Post Types</a></li>
                <li><a <?php echo $page=='taxonomy'?'class="active"':""?> href="<?php echo site_url('admin/cpt/taxonomy');?>">Taxonomy</a></li>
            </ul>
        </li>
        <li <?php echo $page=='acf'?'class="active"':""?> >
            <a href="#dropdown-acf" <?php echo $page=='acf'?'aria-expanded="true"':'aria-expanded="false"'?> data-toggle="collapse"><i class="la la-th-large"></i><span>Advance Custom Field</span></a>
            <ul id="dropdown-acf" class="collapse list-unstyled pt-0 <?php echo $page=='acf'?'show':''?>">
                <li><a <?php echo $page=='acf'?'class="active"':""?> href="<?php echo site_url('admin/acf');?>">Field Groups</a></li>
            </ul>
        </li>
    </ul>
    <span class="heading">Users</span>
    <ul class="list-unstyled">
        <li <?php //echo $page=='custom'?'class="active"':""?> >
            <a href="#dropdown-users" <?php //echo $page=='custom'?'aria-expanded="true"':'aria-expanded="false"'?> data-toggle="collapse"><i class="la la-users"></i><span>User Listing</span></a>
            <ul id="dropdown-users" class="collapse list-unstyled pt-0 <?php //echo $page=='custom'?'show':''?>">
                <li><a <?php //echo $page=='custom'?'class="active"':""?> href="<?php //echo site_url('admin/custom');?>">Verified Users</a></li>
                <li><a <?php //echo $page=='custom'?'class="active"':""?> href="<?php //echo site_url('admin/custom');?>">Unverified Users</a></li>
                <li><a <?php //echo $page=='custom'?'class="active"':""?> href="<?php //echo site_url('admin/custom');?>">All Users</a></li>
            </ul>
        </li>
    </ul>
    <!-- End Main Navigation -->
</nav>
<!-- End Side Navbar -->
