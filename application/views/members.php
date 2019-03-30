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
<style type="text/css">
	.table img { width: 80px; height: 80px; }
</style>
</head><!--/head-->

<body>
<?=load_view('preloader');?>
<?=load_view('header');?>
<style type="text/css"></style>
<section id="seepnet" class="light-grey">
<div class="container">
	<div class="row">
	<div class="col-md-12 text-center">
		<h2 class="title-one">Members</h2>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table class="table table-hover">
				<thead>
					<tr>
						<th>Avatar</th>
						<th>Username</th>
						<th>Joined</th>
						<th class="text-center">Last Visit</th>
						<th class="text-center">Post Count</th>
						<th class="text-center">Thread Count</th>
					</tr>
				</thead>
				<tbody>
				<?php if(sizeof($members)): foreach($members as $mem): 
				$picture_url = (trim($mem->picture_url)!='')?$mem->picture_url:base_url('assets/images/dummy.png');
				?>
					<tr>
						<td valign="center"><img width="80px" height="80px" src="<?=$picture_url;?>"></td>
						<td valign="center"><a href="#"><?=$mem->fname;?> <?=$mem->lname;?></a></td>
						<td valign="center"><?=date('M d, Y',strtotime($mem->created));?></td>
						<td class="text-center" valign="center"><?=(trim($mem->date_time)!='')?relative_time(strtotime($mem->date_time)):null;?></td>
						<td class="text-center" valign="center"><?=$mem->dis_count;?></td>
						<td class="text-center" valign="center"><?=$mem->com_count;?></td>
					</tr>
				<?php endforeach; else: ?>
					<tr>
						<td colspan="6" class="text-center"><strong>No User Found</strong></td>
					</tr>
				<?php endif;?>
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</section>

<?=load_view('footer-script');?>
</body>

</html>