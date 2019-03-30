<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Ukiseen.org Website">
	<meta name="keywords" content="" /> 
	<?=load_view('header-link');?>
<style type="text/css">
	#blog{ vertical-align: middle; padding: 110px 0px 110px;}
</style>
</head><!--/head-->
<body>
	<?=load_view('preloader');?>
	<?=load_view('header');?>
<section id="blog"> 
	<div class="container">
		<div class="row text-center clearfix">
		<h2 class="text-info"><i class="fa fa-times-circle-o fa-3x"></i></h2>
			<h3>We can't get access into your LinkedIn profile right now.</h3>
			<h4>Please Try again later.</h4>
			<h4>Want to register new account click <a href="#">Sign Up Now</a></h4>
			<h4>
				<a href="<?=base_url('contact-us');?>" class="submit-btn animated fadeIn">Enquiry</a> | 
				<a href="<?=base_url();?>" class="submit-btn animated fadeIn">Home</a>
			</h4>
		</div> 
	</div> 
</section>

	<?=load_view('footer-script');?>
</body>
</html>