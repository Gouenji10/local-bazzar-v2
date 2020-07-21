<!doctype html>
<html lang="en">
	<head>
		<title><?php echo $template['title'];?></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap 3.1 core css -->
		<?php echo css('base/bootstrap.min.css'); ?>
		<?php echo css('base/elisyam.min.css'); ?>
		<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet"> 
		<?php echo css('owl-carousel/owl.carousel.min.css');?>
		<?php echo css('owl-carousel/owl.theme.min.css');?>
		<?php echo css('ambiance/jquery.ambiance.css');?>
		<?php echo css('main.min.css');?>
	</head>
	<body>
		<?php echo $this->template->load_view('partials/header'); ?>
		<?php echo $template['body']; ?>
		<?php echo $this->template->load_view('partials/footer'); ?>
	</body>
</html>
