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
	.discussion thead { background: #2ea4dd; color:#fff; }
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
		<h2 class="title-one">New Discussions</h2>
	</div>
	<div class="row">
		<?=form_open('new-discussion');?>
		<div class="col-md-12">
		<?php if($this->session->flashdata('insert_success')): ?>
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Success!</strong> <?php echo $this->session->flashdata('insert_success');?>
        </div>
        <?php endif; ?>

			<div class="form-group">
				<label>Discussion Title</label>
				<input type="text" autocomplete="off" value="<?=set_value('dis_title');?>" name="dis_title" class="form-control">
				<?php echo form_error('dis_title');?>
			</div>			
			<div class="form-group">
				<label>Description</label>
				<?php echo form_error('dis_desc');?>
				<textarea name="dis_desc" id="summernote"><?=set_value('dis_desc');?></textarea>
			</div>
			<button type="submit" class="btn btn-success modal-login-btn btn-inverse"><i class="fa fa-save"></i> Start Discussion</button>
		</div>
		<?=form_close();?>
	</div>
</div>
</div>
</section>

<?=load_view('footer-script');?>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
<script>
      $(function() {
          //$('#summernote').summernote({minHeight:300,});

          $('#summernote').summernote({
          	minHeight:300,
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