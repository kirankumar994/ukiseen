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
</head><!--/head-->
<body>
	<?=load_view('preloader');?>
	<?=load_view('header');?>

<section id="blog"> 
						<div class="container">
							<div class="row text-center clearfix">
								<div class="col-sm-8 col-sm-offset-2">
									<h2 class="title-one">Top 3 projects in the UK-India Social Innovation Challenge:</h2>
								</div>
							</div> 
							<div class="row">
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="<?=base_url('assets/images/projects/project9.jpg');?>" alt="" />
										<h2>ABCD Egg </h2>
										
										<div class="blog-content">
											<p>A BCD egg reduces the risk of using unsafe drinking water: Boil Check Drink!...</p>
										</div>
										
										<a href="<?=base_url('projects/abcd-egg');?>" class="btn btn-primary">Read More</a>
									</div>
									
								</div>
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="<?=base_url('assets/images/projects/project11.jpg');?>" alt="" />
										<h2>JuaMaji</h2>
										
										<div class="blog-content">
											<p>Enactus Southampton project providing communities in Kenya and Malawi...</p>
										</div>
										
										<a href="<?=base_url('projects/juamaji');?>" class="btn btn-primary">Read More</a>
									</div>
									
								</div>
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="<?=base_url('assets/images/projects/project10.jpg');?>" alt="" />
										<h2>Providing "defluridated" water</h2>
										
										<div class="blog-content">
											<p>Providing defluoridated water for villages affected by fluorine contaminated water...</p>
										</div>
										
										<a href="<?=base_url('projects/defluridated');?>" class="btn btn-primary">Read More</a>
									</div>
									
								</div>
								</div> 
							</div> 
						</section>

	<?=load_view('footer-script');?>
</body>
</html>