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
<style type="text/css">
.admin {float: left;margin-top: 110px;}
.admin p {font-size: 13px;color: #ff0000;margin-top: 6px;}
.admin-holder {background: #f6f6f6;padding: 10px 30px 30px 30px;width: 400px;margin: 0 auto;}
.admin-holder label { color:#000; }
.admin-holder input { border-radius: 0px; height: 40px;   }
</style>
<section id="seepnet">
<div class="container">
<div class="row">
		<div class="col-md-12 admin">
			<div class="admin-holder">
				<div class="admin_logo text-center"> 
					<h1><img src="<?=base_url('assets/images/logo.png');?>" alt="logo"></h1>
				</div>
				<?=form_open('administrator');?>
				<div class="form-group">
					<label>User Name</label>
					<input type="text" name="uname" class="form-control" placeholder="User Name">
					<?=form_error('uname');?>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" name="upwd" class="form-control" placeholder="Password">
					<?=form_error('upwd');?>
				</div>
				<button type="submit" name="contact_submit" class="slider-btn submit-btn animated fadeIn" value="Submit">Submit</button>
				<?=form_close(); ?>
			</div>
		</div>
</div>
</div>	
</section>
</body>
</html>