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
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
<?=load_view('header-link');?>
<style type="text/css">
	#discussion_container { border:1px solid #2ea4dd; padding: 10px 25px; margin-bottom: 20px; }
	.comment_holder { border: 1px solid ; padding: 10px 25px; margin-bottom: 5px; }
	.comment-form { margin-top: 20px; }
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
		<h2 class="title-one">Discussion</h2>
	</div>
<?php if($this->session->uki_logged_in): ?>
	<div class="text-right pull-right">
		<a class="btn btn-success modal-login-btn btn-inverse" href="#quick-replay"><i class="fa fa-reply"></i> Reply to this thread</a>
	</div>
<?php else: ?>	
	<div class="text-right pull-right">
		<a class="btn btn-success modal-login-btn btn-inverse" data-toggle="modal" data-target="#login-modal"><i class="fa fa-reply"></i> Reply to this thread</a>
	</div>
<?php endif; ?>
	<a class="btn btn-success modal-login-btn btn-inverse" href="<?=base_url('discussions');?>"><i class="fa fa-long-arrow-left"></i> Back to Discussion</a>
	<div class="clearfix"></div>
	<?php if($this->session->flashdata('insert_success')): ?>
    <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> <?php echo $this->session->flashdata('insert_success');?>
    </div>
    <?php endif; ?>
	<div class="row">
		<div class="col-md-12">
		<div id="discussion_container">
		<p class="pull-right">Posted : <?=date('M d, Y',strtotime($record->created_on));?></p>
			<h3><?=$record->title;?></h3>
			<div id="discussion_body">
				<?=$record->body;?>
			</div>
			<hr>
			<p>Created by <a href="#"><?=$record->fname;?> <?=$record->lname;?></a></p>
		</div>
		</div>
	</div>
	
	<?php if(sizeof($comments)): foreach($comments as $com): 
	$picture_url = (trim($com->picture_url)!='')?$com->picture_url:base_url('assets/images/dummy.png'); ?>
	<div class="comment_holder">
		<div class="row">
			<div class="col-md-2">
				<img width="80px" height="80px" src="<?=$picture_url;?>">
				<p><strong><?=$com->fname;?></strong></p>
			</div>
			<div class="col-md-9">
				<?=$com->c_body;?>
			</div>
			<div class="clearfix"></div>
				<p class="text-right"><?=date('M d, Y', strtotime($com->c_created_on));?></p>
		</div>
	</div>
	<?php endforeach; endif; ?>

	<?php if($this->session->uki_logged_in): ?>
	<div class="comment-form">
		<div class="panel panel-default">
		  <div id="quick-replay" class="panel-heading">Quick Replay</div>
		  <div class="panel-body">
		  	<div class="row">
		  		<div class="col-md-12">
		  		<?=form_open(current_url());?>
		  			<textarea id="summernote" required name="comment_content" class="form-control" placeholder="Enter your comments here"></textarea>
		  			<button class="btn btn-success modal-login-btn btn-inverse" type="submit" name="comment_submit" value="Post Quick Reply"><i class="fa fa-save"></i> Post Quick Reply</button>
		  		<?=form_close();?>
		  		</div>
		  	</div>
		  </div>
		</div>
	</div>
	<?php endif; ?>
</div>
</div>
</section>

<?=load_view('footer-script');?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script>
      $(function() {
          $('#summernote').summernote({
          	minHeight:200,
			toolbar: [
				['style', ['bold', 'italic', 'underline']],
				['font', ['strikethrough', 'superscript', 'subscript']],
				['para', ['ul', 'ol', 'paragraph']],
			]
		});
      });
  </script>
</body>

</html>