<div class="sidebar-box">                    
    <div class="user">
        <figure>
            <a href="#"><img src="<?php echo img('user/chibi.png',true);?>" alt=""></a>
        </figure>
        <div class="usercontent">
            <h3>Hello <?php //echo $user['first_name'];?>!</h3>
        </div>
    </div>
    <nav class="navdashboard">
        <ul>
            <li><a href="<?php echo base_url('profile');?>"><i class="ti ti-dashboard"></i><span>Dashboard</span></a></li>
            <li><a href="<?php echo base_url('profile/setting');?>"><i class="ti ti-settings"></i><span>Profile Settings</span></a></li>
            <li><a href="#"><i class="ti ti-server"></i>  <span>My Ads</span></a></li>
            <li><a href="#"><i class="ti ti-email"></i><span>Offers/Messages</span></a></li>
            <!-- <li><a href="#"><i class="ti ti-wallet"></i><span>Payments</span></a></li> -->
            <!-- <li><a href="#"><i class="ti ti-heart"></i><span>My Favourites</span></a></li> -->
            <li><a href="<?php echo base_url('profile/privacy_setting');?>"><i class="ti ti-star"></i><span>Account Settings</span></a></li>
            <li><a href="#"><i class="ti ti-lock"></i><span>Logout</span></a></li>
        </ul>
    </nav>
</div>  