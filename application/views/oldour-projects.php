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
									<h2 class="title-one">Our Projects</h2>
									<p class="blog-heading">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
								</div>
							</div> 
							<div class="row">
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="<?=base_url('assets/images/projects/project8.jpg');?>" alt="" />
										<h2>Project Title</h2>
										
										<div class="blog-content">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
										</div>
										
										<a href="#" class="btn btn-primary">Read More</a>
									</div>
									
								</div>
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="<?=base_url('assets/images/projects/project2.jpg');?>" alt="" />
										<h2>Project Title</h2>
										
										<div class="blog-content">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
										</div>
										
										<a href="#" class="btn btn-primary">Read More</a>
									</div>
									
								</div>
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="<?=base_url('assets/images/projects/project1.jpg');?>" alt="" />
										<h2>Project Title</h2>
										
										<div class="blog-content">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
										</div>
										
										<a href="#" class="btn btn-primary">Read More</a>
									</div>
									
								</div>
								<div class="col-sm-4">
									<div class="single-blog">
										<img src="<?=base_url('assets/images/projects/project4.jpg');?>" alt="" />
										<h2>Project Title</h2>
										
										<div class="blog-content">
											<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
										</div>
									<!--<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-four">Read More</a></div>-->
										<a href="#" class="btn btn-primary">Read More</a></div>
										
									</div>
									<div class="col-sm-4">
										<div class="single-blog">
											<img src="<?=base_url('assets/images/projects/project5.jpg');?>" alt="" />
											<h2>Project Title</h2>
											
											<div class="blog-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
											</div>
											<!--<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-six">Read More</a>-->
											<a href="#" class="btn btn-primary">Read More</a>
										</div>
										
									</div>

									<div class="col-sm-4">
										<div class="single-blog">
											<img src="<?=base_url('assets/images/projects/project7.jpg');?>" alt="" />
											<h2>Project Title</h2>
											
											<div class="blog-content">
												<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat.</p>
											</div>
											<!--<a href="" class="btn btn-primary" data-toggle="modal" data-target="#blog-seven">Read More</a>-->
											<a href="#" class="btn btn-primary">Read More</a>
										</div>
										
									</div> 
								</div> 
							</div> 
						</section>

	<?=load_view('footer-script');?>
</body>
</html>