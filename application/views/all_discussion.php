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
	.discussion thead { background: #2ea4dd; color:#fff; }
	.topic-title { font-size: 15px;font-weight: 800;color: #0176ae; }
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
		<h2 class="title-one">Discussions</h2>
	</div>
	<div class="row">
		<div class="col-md-12">
	<br>
	<?php if($this->session->uki_logged_in): ?>
		<a href="<?=base_url('new-discussion');?>" class="pull-right btn btn-success modal-login-btn btn-inverse"><i class="fa fa-plus"></i> Start New Discussion</a>
	<?php endif; ?>
			<table class="table table-hover discussion">
				<thead>
					<tr>
						<th>Topics</th>
						<th class="text-right">Post Info</th>
						<th class="text-center">Last Post</th>
					</tr>
				</thead>
				<tbody>
				<?php if(sizeof($discussions)): foreach($discussions as $discussion): ?>
					<tr>
						<td>
						<a class="topic-title" href="<?=base_url('discussion/'.$discussion->d_id.'/'.url_title($discussion->title));?>"><?=$discussion->title;?></a>
						<br>Created by <a href="#"><?=$discussion->fname;?> <?=$discussion->lname;?></a></td>
						<td class="text-right" valign="center"><?=(trim($discussion->count_rep)!='')?$discussion->count_rep:0;?> Replies<br><?=(trim($discussion->views)!='')?$discussion->views:0;?> Views</td>
						<td class="text-center"><?php
						if(trim($discussion->last_post!=''))
							echo date('M d, Y',strtotime($discussion->last_post));
						else
							echo date('M d, Y',strtotime($discussion->created_on));
						?></td>
					</tr>
				<?php endforeach; else: ?>
					<tr>
						<td colspan="4" class="text-center"><strong>No discussion found</strong></td>
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