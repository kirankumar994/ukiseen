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
	#blog{ vertical-align: middle; padding: 135px 0px 150px;}
	#blog h2{font-size: 45px;}
	.a-btn {
		width: 180px;
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
	    line-height: 40px;
	    margin-top: 25px;
	    font-size: 16px;
	}
	.a-btn:hover { border-color:#2ea4dd; background: #fff; color: #2ea4dd }
</style>
</head><!--/head-->
<body>
	<?=load_view('preloader');?>
	<?=load_view('header');?>
<section id="blog"> 
	<div class="container">
		<div class="row text-center clearfix">
			<h2><?=$topicTitle;?></h2>
			<h3><?=$content;?></h3>
			<a class="a-btn" href="<?=base_url();?>">Back to Home</a>
		</div> 
	</div> 
</section>

	<?=load_view('footer-script');?>
</body>
</html>