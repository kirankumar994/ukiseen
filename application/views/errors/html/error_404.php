<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="The UK-India Social Entrepreneurship Education Network aims to promote collaboration and best practice in social entrepreneurship teaching between UK and Indian universities.">
	<meta name="keywords" content="" /> 
	<?php 
$new['title'] = '404 Page Not Found | Ukiseen.org'; 
echo load_view('header-link',$new);
?>
</head><!--/head-->
<style type="text/css">
	#page-404 h2{font-size: 100px;}
	#page-404 p{font-size: 30px;}
	.a-btn {
		width: 200px;
	    height: 40px;
	    margin-bottom: 10px;
	    padding-left: 25px;
	    padding-right: 25px;
	    background-color: #2ea4dd;
	    border: 1px solid #2ea4dd;
	    border-radius: 0px;
	    display: inline-block;
	    text-align: center;
	    color: #fff;
	    line-height: 38px;
	    margin-top: 25px;
	    font-size: 16px;
	}
	.a-btn i { font-size: 25px; margin-right: 5px; }
	.a-btn:hover { border-color:#2ea4dd; background: #fff; color: #2ea4dd }
</style>
<body>
	<?=load_view('preloader');?>
	<?=load_view('header');?>

	<section id="page-404">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>404</h2>
					<p>Oops!!! Page your looking is not found</p>
					<a class="a-btn" href="<?=base_url();?>"><i class="fa fa-home"></i> Back to Home</a>
					<a class="a-btn" href="<?=base_url('contact-us');?>"><i class="fa fa-envelope"></i> Contact us</a>
				</div>
			</div>
		</div>	
	</section>

<!--/#about-us-->
	<div class="clearfix"></div>
	

						 <!--/#contact--> 

	<?=load_view('footer-script');?>
	
</body>
</html>