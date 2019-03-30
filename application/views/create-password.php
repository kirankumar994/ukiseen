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
	.profile {
  margin: 20px 0;
}

/* Profile sidebar */
.profile-sidebar {
  padding: 20px 0 10px 0;
  background: #F1F3FA;
}

.profile-userpic img {
  float: none;
  margin: 0 auto;
  width: 50%;
  height: 50%;
  -webkit-border-radius: 50% !important;
  -moz-border-radius: 50% !important;
  border-radius: 50% !important;
}

.profile-usertitle {
  text-align: center;
  margin-top: 20px;
}

.profile-usertitle-name {
  color: #5a7391;
  font-size: 16px;
  font-weight: 600;
  margin-bottom: 7px;
}

.profile-usermenu {
  margin-top: 30px;
}

.profile-usermenu ul li {
  border-bottom: 1px solid #f0f4f7;
}

.profile-usermenu ul li:last-child {
  border-bottom: none;
}

.profile-usermenu ul li a {
  color: #333;
  font-size: 14px;
  font-weight: 400;
}

.profile-usermenu ul li a i {
  margin-right: 8px;
  font-size: 14px;
}

.profile-usermenu ul li a:hover {
  background-color: #fafcfd;
  color: #5b9bd1;
}

.profile-usermenu ul li.active {
  border-bottom: none;
}

.profile-usermenu ul li.active a {
  color: #5b9bd1;
  background-color: #f6f9fb;
  border-left: 2px solid #5b9bd1;
  margin-left: -2px;
}

/* Profile Content */
.profile-content {
  padding: 20px;
  background: #F1F3FA;
  min-height: 460px;
}
	</style>
	<section id="seepnet" class="light-grey">
		

			<div class="container">
    <div class="row profile">
		<div class="col-md-3">
				<?=load_view('user-sidebar');?>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
            <div class="col-md-12 text-center">
					<h3 class="title">Update Profile</h3>
					<hr>
				</div>
			<?=form_open_multipart(current_url());?>
			<div class="row">
			   	<div class="col-md-6 col-md-push-3">
			   	
				   	<div class="form-group">
				   		<label>New Password*</label>
	              		<input type="password" autocomplete="off" id="u_new" name="u_new" placeholder="Enter your new password" class="form-control login-field">
	              		<?=form_error('u_new');?>
	            	</div>

	            	<div class="form-group">
				   		<label>Confirm Password*</label>
	              		<input type="password" autocomplete="off" id="u_cnew" name="u_cnew" placeholder="Re-Enter your password" class="form-control login-field">
	              		<?=form_error('u_cnew');?>
	            	</div>
			   	</div>
			</div>
<hr>
			<p class="text-center">
				<button type="submit" name="profile_submit" class="slider-btn submit-btn animated fadeIn" value="Submit">Create Password</button>
			</p>

			<?=form_close();?>

            </div>
		</div>
	</div>
</div>
	</section>

	<?=load_view('footer-script');?>
</body>

</html>