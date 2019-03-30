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
					<h2 class="title-one">Reset Password</h2>
				</div>
				<div class="col-md-6 col-md-push-3">
					<div class="contact-holder">
						<?=form_open(current_url(),array('id' => 'enquiry-form'));?>
						<div class="form-group">
							<label>Password*</label>
							<input type="password" name="for_pwd" required class="form-control" placeholder="Enter your new password">
							<?=form_error('for_pwd');?>
						</div>
						<div class="form-group">
							<label>Confirm Password*</label>
							<input type="password" name="for_cpwd" required class="form-control" placeholder="Re-type your password ">
							<?=form_error('for_cpwd');?>
						</div>
						<p class="text-center">
						<button type="submit" name="contact_submit" class="slider-btn submit-btn animated fadeIn" value="Submit">Reset Password</button>
						</p>
						<?=form_close(); ?>
					</div>
				</div>
			</div>
		</div>	
	</section>

	<?=load_view('footer-script');?>
</body>

</html>