<?php

defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="">
	<meta name="keywords" content="" /> 
	<?=load_view('header-link');?>
</head><!--/head-->

<body>
	<?=load_view('preloader');?>
	<?=load_view('header');?>
	<style type="text/css">
		.contact-holder{
			background: #fff;
			padding: 30px 50px 50px 50px;
			margin-top: 20px;
		}
		.address-div { margin-top: 20px; }
		.light-grey{ background-color: #f6f6f6; }
		.contact-holder label { color:#000; }
		.contact-holder input { border-radius: 0px; height: 40px;   }
		.contact-holder textarea { border-radius: 0px; height: 100px; resize: none;}
		.contact-holder h3 { margin-top:0px; color:#0176ae; }
		.contact-holder h3 span { color:#2ea4dd; }
		.contact-address1 ul { margin-bottom: 30px; }
		.contact-address1 ul li{ margin-bottom: 5px; line-height: 25px; }
	</style>
	<section id="seepnet" class="light-grey">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2 class="title-one">Contact us</h2>
				</div>
				<div class="col-md-6">
					<div class="contact-holder">
						<h3 class="text-center"><span>Quick</span> Enquiry</h3> 
						<?=form_open('contact-us',array('id' => 'enquiry-form'));?>
						<div class="form-group">
							<label>First Name*</label>
							<input type="text" name="fname" required value="<?=set_value('fname');?>" class="form-control" placeholder="First Name">
							<?=form_error('fname');?>
						</div>
						<div class="form-group">
							<label>Email ID*</label>
							<input type="email" name="email" required value="<?=set_value('email');?>" class="form-control" placeholder="Email ID">
							<?=form_error('email');?>
						</div>
						<div class="form-group">
							<label>Subject*</label>
							<input type="text" name="subject" required value="<?=set_value('subject');?>" class="form-control" placeholder="Subject">
							<?=form_error('subject');?>
						</div>
						<div class="form-group">
							<label>Message</label>
							<textarea name="message" class="form-control" placeholder="Message"></textarea>
						</div>
						<button type="submit" name="contact_submit" class="slider-btn submit-btn animated fadeIn" value="Submit">Submit</button>
						<?=form_close(); ?>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row address-div">
						<div class="col-md-12">
							<div class="contact-address1">
								<h3><span>Contact</span> Info</h3> 
								<ul class="fa-ul">
									<li><i class="fa-li fa fa-map-marker"></i>Centre for Social Innovation &amp; Entrepreneurship<br>IIT Madras, <br>Chennai, India</li>
									<li><i class="fa-li fa fa-envelope"></i>csie@iitm.ac.in</li>
								</ul>

								<ul class="fa-ul">
									<li><i class="fa-li fa fa-map-marker"></i>Social Impact Lab,<br>University of Sounthampton,<br>Southampton, UK</li>
									<li><i class="fa-li fa fa-envelope"></i>P.Pathak@soton.ac.uk </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</section>

	<?=load_view('footer-script');?>
</body>

</html>