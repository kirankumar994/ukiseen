<header id="navigation"> 
	<div class="navbar navbar-inverse navbar-fixed-top" role="banner"> 
		<div class="container"> 
			<div class="col-md-1"></div>
			<div class="top-info col-md-11 col-md-push-2">
				<div id="info_details">
					<ul>
						<li><i class="fa fa-phone"></i>044 2257 8377</li>
						<li><i class="fa fa-envelope"></i>info.ukiseen@gmail.com</li>
					</ul>
				<?php if($this->session->uki_logged_in): ?>
						<a class="lgn" href="<?=base_url('logout');?>">Logout <i class="fa fa-sign-out"></i></a>
						<a class="my-account" href="<?=base_url('my-account/profile');?>">Welcome <?=$this->session->uki_logged_in['user_name'];?></a>
				<?php else: ?>
					<a data-toggle="modal" data-target="#login-modal" href="#" class="lgn"><i class="fa fa-user"></i> &nbsp;Login/Sign Up</a>
				<?php endif; ?>
				</div>
			</div>
				
			<div class="navbar-header col-md-2"> 
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> 
					<span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> 
				</button> 
				<a class="navbar-brand" href="<?=base_url();?>"><h1><img src="<?=base_url('assets/images/logo.png');?>" alt="logo"></h1></a> 
			</div> 
			<div class="collapse navbar-collapse col-md-10"> 
				
				<ul class="nav navbar-nav navbar-right"> 
					<li class="scroll <?=($this->uri->segment(1) == '')?'active':null?>"><a href="<?=base_url();?>">Home</a></li>						
					<li class="scroll dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Participate<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?=base_url('projects');?>">Projects</a></li>
							<li><a href="<?=base_url('discussions');?>">Discussions</a></li>
						
						</ul>
					</li> 
					<li class="scroll <?=($this->uri->segment(1) == 'members')?'active':null?>"><a href="<?=base_url('members');?>">Members</a></li> 
					<li class="scroll <?=($this->uri->segment(1) == 'uk-india-social-innovation-challenge')?'active':null?>"><a href="<?=base_url('uk-india-social-innovation-challenge');?>">UK-India Social Innovation Challenge</a></li> 
					<li class="scroll dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">UKISEEN Conference <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="<?=base_url('international-conference');?>">International Conference</a></li>
							<li><a href="<?=base_url('follow-on-meeting');?>">Follow on Meeting</a></li>
							<li><a href="<?=base_url('meeting-and-seminar');?>">Meeting and Seminar</a></li>
						</ul>
					</li> 
					<li class="scroll"><a href="<?=base_url('seep-network');?>">SEEP Network</a></li> 
					<li class="scroll"><a href="<?=base_url('contact-us');?>">Contact Us</a></li> 
				</ul> 
			</div> 
		</div> 
	</div><!--/navbar--> 
</header>