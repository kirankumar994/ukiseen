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
	<?=load_view('header-link');?>
</head><!--/head-->
<style type="text/css">
	#main-carousel .carousel-inner p {margin-bottom: 118px;}
</style>
<body>
	<?=load_view('preloader');?>
	<?=load_view('header');?>

	<section id="home">
		<div class="home-pattern"></div>
		<div id="main-carousel" class="carousel slide" data-ride="carousel"> 
			<ol class="carousel-indicators">
				<li data-target="#main-carousel" data-slide-to="0" class="active"></li>
				<li data-target="#main-carousel" data-slide-to="1"></li>
				<li data-target="#main-carousel" data-slide-to="2"></li>
			</ol><!--/.carousel-indicators--> 
			<div class="carousel-inner">
				<div class="item active" style="background-image: url(<?=base_url('assets/images/slider/banner1.jpg');?>)"> 
					<div class="carousel-caption"> 
						<div> 
							<h2 class="heading animated bounceInDown">Welcome</h2> 
							<p class="animated bounceInUp">Uk - India Social Entrepreneurship Education Network</p> 
							<a class="btn btn-default slider-btn animated fadeIn" href="<?=base_url('uk-india-social-innovation-challenge');?>">Get Started</a> 
						</div> 
					</div> 
				</div>
				<div class="item" style="background-image: url(<?=base_url('assets/images/slider/banner2.jpg');?>)"> 
					<div class="carousel-caption">
						<div> 
							<h2 class="heading animated bounceInDown">&nbsp;</h2> 
							<p class="animated bounceInUp">&nbsp;</p>
							
							<a class="btn btn-default slider-btn animated fadeIn" href="<?=base_url('uk-india-social-innovation-challenge');?>">Guidelines</a> 
						</div> 
					</div>
				</div> 
				<div class="item" style="background-image: url(<?=base_url('assets/images/slider/banner3.jpg');?>)"> 
					<div class="carousel-caption"> 
						<div> 
							<h2 class="heading animated bounceInRight">UKISEEN FOLLOW ON MEETING</h2> 
							<p class="animated bounceInLeft">January 11<sup>th</sup> 2017 at IIT Madras</p> 
							<a class="btn btn-default slider-btn animated fadeIn" target="_blank" href="<?=base_url('assets/pdf/schedule.pdf');?>">Schedule</a> 
						</div> 
					</div> 
				</div>
		</div><!--/.carousel-inner-->

		<a class="carousel-left member-carousel-control hidden-xs" href="#main-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
		<a class="carousel-right member-carousel-control hidden-xs" href="#main-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
	</div> 

</section><!--/#home-->

<section id="about-us">
	<div class="container">
		<div class="text-center">
			<div class="col-sm-8 col-sm-offset-2">
				<h2 class="title-one">About Us</h2>
				
			</div>
		</div>
		<div class="about-us">
			<div class="row">
				<div class="col-sm-8">
					<!-- <h3>Why Choose Us?</h3> -->
					<br>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="about">
							<div class="media">
								<div class="media-body">
								<h4>About the UK India Social Entrepreneurship Education Network</h4>
									<p>The UK-India Social Entrepreneurship Education Network aims to promote collaboration and best practice in social entrepreneurship teaching between UK and Indian universities. As a peer-led network of practitioners, academics and educators from universities across the two countries, UKISEEN uses the latest in digital technology and social media to provide a platform for knowledge transfer and resource sharing, leading to the establishment of high quality social entrepreneurship teaching and learning.</p>

<p>The network benefits both institutions which are new to social entrepreneurship teaching and those with established social entrepreneurship programmes.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<!-- <h3>Events</h3> -->
					<br>
					<div class="tab-content">
						<div class="tab-pane fade in active" id="about">
							<div class="media">
								<div class="media-body">
								<h4 class="text-center">EVENTS</h4>
									<p>What role are women playing in growing a more social economy? To what extent do Indian Social Enterprises address issues about gender equity? <a href="https://www.facebook.com/csieiitm/" target="_blank">CSIE</a> calls for all social enterprise founders and leaders in India to take the survey and share their views</p>
									<a href="https://www.surveymonkey.co.uk/r/soc_ent_women_India" class="btn btn-success modal-login-btn" target="_blank">Start Survey</a>
									<p>For further details, please visit <a href="http://csie.iitm.ac.in/social_enterprises_women_empowerment.html" target="_blank">here</a></p>
								</div>
							</div>
						</div>
					</div>

					<?php if('philip' == 'hide'): ?>
					<div class="news-event">
					<li class="nws news-item">
							<div class="lft col-md-2 col-sm-2 col-xs-2">
								<div class="row">
									<span class="dte">11</span><br/>
									<p style="padding-top:12px;">JAN</p>
								</div>
							</div>
							<div class="rgt col-md-10 col-sm-10 col-xs-10">
								<div class="row">
									<a href="#" class="rgt_tle">UKISEEN follow on meeting</a><br/>
									<p>Venue : Hall 3, ICSR Building, IIT Madras</p>
								</div>
							</div>
						</li>
						
						
						<li class="nws nws1">
							<div class="lft col-md-2 col-sm-2 col-xs-2">
								<div class="row">
									<span class="dte">17</span><br/>
									<p style="padding-top:12px;">JAN</p>
								</div>
							</div>
							<div class="rgt col-md-10 col-sm-10 col-xs-10">
								<div class="row">
									<a href="#" class="rgt_tle">Launch of UK Inida Social Innovation Challenge</a><br/>
									<p>Theme : Clean Water &amp; Sanitation</p>
									
								</div>
							</div>
						</li>
						</div>
					<?php endif; ?>
						
						<!-- <a href="#" class="vw_more">View More ></a> -->
						
					</div>
				</div>
			</div>
		</div>
	</section><!--/#about-us-->
	<div class="clearfix"></div>
	

						<section id="contact" style="background: #fff">
							
							<div class="container" style="height: 150px;background-size: cover; background: url(<?=base_url('assets/images/partner-logo.jpg');?>); width: 100%; background-repeat: no-repeat; background-position: center center;">
								<div class="contact-details">
									<!-- <div class="pattern"></div> -->
									<div class="row text-center clearfix">
										<!-- <img src="<?=base_url('assets/images/partner-logo.jpg');?>"> -->
										</div>
									</div>
								</div> 
							</section> <!--/#contact--> 

	<?=load_view('footer-script');?>
	<script src="<?=base_url('assets/js/jquery.bootstrap.newsbox.min.js');?>" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$(".news-event").bootstrapNews({
	            newsPerPage: 4,
	            autoplay: true,
				pauseOnHover: true,
				navigation: false,
	            direction: 'up',
	            newsTickerInterval: 2500,
	            onToDo: function () {
	                //console.log(this);
	            }
	        });
		})
	</script>
</body>
</html>