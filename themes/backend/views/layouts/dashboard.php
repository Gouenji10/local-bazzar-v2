
<!DOCTYPE html>
<html>
    <head>
        <title>Local Bazar|| Dashboard</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <?php echo css('base/bootstrap.min.css');?>
        <?php echo css('base/elisyam-1.5.min.css');?>
        <?php echo css('animate/animate.min.css');?>
        <?php apply_hook('admin_header');?>
    </head>
    <body id="page-top">
        <!-- loader -->
        <div id="preloader">
            <div class="canvas">
                <img src="assets/img/logo.png" alt="logo" class="loader-logo">
                <div class="spinner"></div>   
            </div>
        </div>
        <div class="page">
            <?php echo $this->template->load_view('partials/header'); ?>
            <!-- Begin Page Content -->
            <div class="page-content d-flex align-items-stretch">
                <!-- Sidebar -->
                <div class="default-sidebar">
                    <?php echo $this->template->load_view('partials/sidebar');?>
                </div>
                <!-- End Sidebar -->
                <!-- Content -->
                <div class="content-inner">
                    <?php echo $template['body']; ?>                
                </div>
                <!-- End Content -->
            </div>
            <!-- End Page -->
        </div>
        <?php echo $this->template->load_view('partials/footer'); ?>
    </body>
</html>
    