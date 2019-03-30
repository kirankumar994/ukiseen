<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
				<?php
				$page = $this->uri->segment(2);
				$picture_url = (trim($user_info->picture_url)!='')?$user_info->picture_url:base_url('assets/images/dummy.png');
				 ?>
					<img src="<?=$picture_url;?>" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						<?=$user_info->fname;?> <?=$user_info->lname;?>
					</div>
				</div>
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="<?=($page == 'profile')?'active':null?>">
							<a href="<?=base_url('my-account/profile');?>">
							<i class="fa fa-user"></i>
							Update Profile </a>
						</li>
						<?php if($user_info->oauth_provider != 'website' && trim($user_info->password) == ''): ?>
							<li class="<?=($page == 'create-password')?'active':null?>">
								<a href="<?=base_url('my-account/create-password');?>">
								<i class="fa fa-key"></i>
								Create Password </a>
							</li>
						<?php else: ?>
							<li class="<?=($page == 'change-password')?'active':null?>">
								<a href="<?=base_url('my-account/change-password');?>">
								<i class="fa fa-key"></i>
								Change Password </a>
							</li>
						<?php endif; ?>
						
						<li>
							<a href="<?=base_url('logout');?>">
							<i class="fa fa-sign-out"></i>
							Logout </a>
						</li>
					</ul>
				</div>
				<!-- END MENU -->
			</div>

