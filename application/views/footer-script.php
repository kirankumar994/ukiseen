<footer id="footer"> 
	<div class="container"> 
	<div class="col-md-6">
		<div class="text-left"> 
			<p>Copyright &copy; 2016 - <a href="<?=base_url();?>">UKISEEN</a> | All Rights Reserved.</p> 
		</div> 
	</div>
	<div class="col-md-6">
		<div class="text-right social-holder"> 
			<ul class="social-network social-circle">
	            <li><a href="https://www.facebook.com/Uk-India-Social-Entrepreneurship-in-Education-Network-Conference-1969314646627275/" target="_blank" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
	            <li><a href="https://twitter.com/ukiseen" target="_blank" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
	            <li><a href="https://www.linkedin.com/groups/8513153" target="_blank" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
	        </ul>
			<!-- <p>
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-linkedin"></i></a>
				<a href=""><i class="fa fa-twitter"></i></a>
			</p>  -->
		</div> 
	</div>
	</div> 
</footer>
<?php if(!$this->session->uki_logged_in): ?>
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header login_modal_header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h2 class="modal-title" id="myModalLabel">Login to Your Account</h2>
      		</div>
      		<div class="modal-body login-modal">
      			<br/>
      			<div class="clearfix"></div>
      			<div id='social-icons-conatainer'>
      			<?=form_open('',array('id' => 'login-form'));?>
	        		<div class='modal-body-left'>
	        		<div class="login-response"></div>
	        			<div class="form-group">
		              		<input type="text" autocomplete="off" id="login_username" name="login_username" placeholder="Enter your username" value="" class="form-control login-field">
		              		<i class="fa fa-user login-field-icon"></i>
		            	</div>

		            	<div class="form-group">
		            	  	<input type="password" autocomplete="off" id="login_pass" name="login_pass" placeholder="Enter your password" value="" class="form-control login-field">
		              		<i class="fa fa-lock login-field-icon"></i>
		            	</div>

		            	<button type="submit" name="login_btn" id="login_btn" value="login" class="btn btn-success modal-login-btn">Login</button>
		            	<!-- <a href="#" class="btn btn-success modal-login-btn">Login</a> -->
		            	<a href="#" id="lost-pass-btn" class="login-link text-center">Lost your password?</a>
	        		</div>
	        	<?=form_close();?>

	        		<div class='modal-body-right'>
	        			<div class="modal-social-icons">
	        				<a href="<?=base_url('social/auth/linkedin');?>" class="btn btn-default linkedin"> <i class="fa fa-linkedin modal-icons"></i> Sign In with Linkedin </a>
	        			</div> 
	        		</div>	
	        		<div id='center-line'> OR </div>
	        	</div>																												
        		<div class="clearfix"></div>

        		<div class="form-group modal-register-btn">
        			<button class="btn btn-default" id="open-register"> New User Please Register</button>
        			<!-- <a data-toggle="modal" data-target="#login-modal" href="#" class="lgn"><i class="fa fa-user"></i> &nbsp;Login/Sign Up</a> -->
        		</div>
      		</div>
      		<div class="clearfix"></div>
      		<div class="modal-footer login_modal_footer">
      		</div>
    	</div>
  	</div>
</div>

<div class="modal fade" id="forgot-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header login_modal_header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h2 class="modal-title" id="myModalLabel">Reset Password Request</h2>
      		</div>
      		<div class="modal-body login-modal">
      			<div class="clearfix"></div>
				<div class="forgot-response"></div>
      			<div id='social-icons-conatainer'>
      				<?=form_open('',array('id' => 'forgot-form'));?>
		            	<div class="form-group">
		              		<input type="email" autocomplete="off" id="forgot_email" name="forgot_email" placeholder="Enter your email" value="" class="form-control login-field">
		              		<i class="fa fa-envelope login-field-icon"></i>
		            	</div>
		            	<div class="col-md-6 p-0">
		            		<button type="submit" id="forgot-btn" class="btn btn-success modal-register">Reset Password</button>
		            	</div>
		            	<div class="col-md-6 p-0 text-right">
		            		
		            	</div>
	            	<?=form_close();?>
	        	</div>
        		<div class="clearfix"></div>
      		</div>
      		<div class="clearfix"></div>
      		<div class="modal-footer login_modal_footer">
      		</div>
    	</div>
  	</div>
</div>

<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header login_modal_header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        		<h2 class="modal-title" id="myModalLabel">Sign Up On UKISEEN</h2>
      		</div>
      		<div class="modal-body login-modal">
      			<div class="clearfix"></div>
				<div class="ajax-response"></div>
      			<div id='social-icons-conatainer'>
      				<?=form_open('',array('id' => 'register-form'));?>
	        			<div class="form-group">
		              		<input type="text" autocomplete="off" id="reg_firstname" name="reg_firstname" for="firstname" placeholder="Enter your first name" value="" class="form-control login-field">
		              		<i class="fa fa-user login-field-icon"></i>
		            	</div>

		            	<div class="form-group">
		              		<input type="text" autocomplete="off" id="reg_lastname" name="reg_lastname" placeholder="Enter your last name" value="" class="form-control login-field">
		              		<i class="fa fa-user login-field-icon"></i>
		            	</div>

		            	<div class="form-group">
		              		<input type="email" autocomplete="off" id="reg_email" name="reg_email" placeholder="Enter your email" value="" class="form-control login-field">
		              		<i class="fa fa-envelope login-field-icon"></i>
		            	</div>

		            	<div class="form-group">
		            	  	<input type="password" autocomplete="off" id="reg_password" name="reg_password" placeholder="Enter your password" maxlength="8" value="" class="form-control login-field">
		              		<i class="fa fa-lock login-field-icon"></i>
		            	</div>
		            	<div class="col-md-6 p-0">
		            		<button type="submit" id="register-btn" class="btn btn-success modal-register">Register</button>
		            	</div>
		            	<div class="col-md-6 p-0 text-right">
		            		
		            	</div>
	            	<?=form_close();?>
	        	</div>
        		<div class="clearfix"></div>
      		</div>
      		<div class="clearfix"></div>
      		<div class="modal-footer login_modal_footer">
      		</div>
    	</div>
  	</div>
</div>
<?php endif; ?>

<script type="text/javascript" src="<?=base_url('assets/js/jquery.js');?>"></script> 
<script type="text/javascript" src="<?=base_url('assets/js/bootstrap.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/smoothscroll.js');?>"></script> 
<script type="text/javascript" src="<?=base_url('assets/js/jquery.isotope.min.js');?>"></script>
<script type="text/javascript" src="<?=base_url('assets/js/jquery.prettyPhoto.js');?>"></script> 
<script type="text/javascript" src="<?=base_url('assets/js/jquery.parallax.js');?>"></script> 
<script type="text/javascript" src="http://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?=base_url('assets/js/main.js');?>"></script>

<?php if(!$this->session->uki_logged_in): ?>
<script type="text/javascript">
$(document).ready(function(){
	$("#open-register").click(function(){
		$("#login-modal").modal('hide');
		$("#register-modal").modal('show');
	});

	$("#lost-pass-btn").click(function(){
		$("#login-modal").modal('hide');
		$("#forgot-modal").modal('show');
	});

	$("#forgot-form").submit(function(e){
		e.preventDefault();
		$(".forgot-response").html('');
		if($(this).valid())
		{
			$("#forgot-btn").attr('disabled','disabled').html('Please Wait...');
			var email = $("#forgot_email").val();
			$.post(site_url+"forgot-password", {email:email} ,function(data){
	          	console.log(data);
				var obj = $.parseJSON(data);
	          	if(obj.status == 'false')
	          	{
				  $(".forgot-response").html(obj.msg);
	          	}
	          	else if(obj.status == 'true')
	          	{
				  $(".forgot-response").html(obj.msg);
				  $("#forgot-form").hide();
	          	}
			}) .done(function() {
			    $("#forgot-btn").removeAttr('disabled').html('Reset Password');
			  });
		}
	});	

	$("#login-form").submit(function(e){
		e.preventDefault();
		if($(this).valid())
		{
			var dataString = $(this).serialize();
			$(".login-response").text('');
			$.ajax({
	          type: "POST",
	          url: site_url+"login",
	          data: dataString,
	          dataType:'text',
	          beforeSend:function(){ $("#login_btn").attr('disabled','disabled').html('Please Wait...'); },
	          success: function(data)
	          {
	          	//console.log(data);
	          	var obj = $.parseJSON(data);
	          	console.log(obj);
	          	if(obj.status == 'false')
	          	{
				  $(".login-response").html(obj.errors);
	          	}
	          	else if(obj.status == 'true')
	          	{
				  location.reload();
	          	}
	          },
	          complete:function(){ $("#login_btn").removeAttr('disabled').html('Login'); },
	          error:function(a,b,c) {
				console.log(c);
	          }
	        });
		}
	});

    $("#register-form").submit(function(e){
		e.preventDefault();
		if($(this).valid())
		{
			var dataString = $(this).serialize();
			$(".ajax-response").text('');
			$.ajax({
	          type: "POST",
	          url: site_url+"register",
	          data: dataString,
	          dataType:'text',
	          beforeSend:function(){ $("#register-btn").attr('disabled','disabled').html('Please Wait...'); },
	          success: function(data)
	          {
	          	//console.log(data);
	          	var obj = $.parseJSON(data);
	          	console.log(obj);
	          	if(obj.status == 'false')
	          	{
				  $(".ajax-response").html(obj.errors);
	          	}
	          	else if(obj.status == 'true')
	          	{
				  $(".ajax-response").html(obj.msg);
				  $("#register-form").hide();
				  $('#register-form')[0].reset();
	          	}
	          },
	          complete:function(){ $("#register-btn").removeAttr('disabled').html('Register'); },
	          error:function(a,b,c) {
				console.log(c);
	          }
	        });
		}
    });

});
</script>
<?php endif; ?>