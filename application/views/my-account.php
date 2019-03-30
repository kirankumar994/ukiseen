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
			   	
			   	<?php if($this->session->flashdata('profile_success')): ?>
		        <div class="alert alert-success">
		            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		            <strong>Success!</strong> <?=$this->session->flashdata('profile_success');?>
		        </div>
		        <?php endif; ?>

			   	<?php if($this->session->flashdata('upload_error')): ?>
		        <div class="alert alert-danger">
		            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		            <strong>Failed!</strong> <?=$this->session->flashdata('upload_error');?>
		        </div>
		        <?php endif; ?>
				   	<div class="form-group">
				   		<label>First Name*</label>
	              		<input type="text" autocomplete="off" id="u_firstname" name="u_firstname" placeholder="Enter your first name" value="<?=$user_info->fname;?>" class="form-control login-field">
	              		<?=form_error('u_firstname');?>
	            	</div>
			   	
				   	<div class="form-group">
				   		<label>Last Name*</label>
	              		<input type="text" autocomplete="off" id="u_lastname" name="u_lastname" placeholder="Enter your last name" value="<?=$user_info->lname;?>" class="form-control login-field">
	              		<?=form_error('u_lastname');?>
	            	</div>

				   	<div class="form-group">
				   		<label>Linkedin URL</label>
	              		<input type="text" autocomplete="off" id="u_linkedin" name="u_linkedin" placeholder="Enter your Linkedin URL" value="<?=$user_info->profile_url;?>" class="form-control login-field">
	            	</div>

				   	<div class="form-group">
				   		<label>Upload Profile Image</label>
				   		<input type="hidden" name="old_image" value="<?=$user_info->picture_url;?>">
	              		<input type="file" name="pro_image" >
	              		<p class="help-block">Max File Size : 100kb</p>
	            	</div>
			   	</div>
			</div>
<hr>
			<p class="text-center">
				<button type="submit" name="profile_submit" class="slider-btn submit-btn animated fadeIn" value="Submit">Update Profile</button>
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