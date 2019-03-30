    <?=load_view('admin/admin-header-top');?>
    <style type="text/css">
    .comment {
      display: block;
      border: 1px solid #555;
      padding: 10px;
      clear: both;
      float: left;
      width: 100%;
    }
    </style>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Discussions & Comments</h1>
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box box-warning">
                <div class="box-header with-border col-md-6">
                  <h3 class="box-title">Edit Discussion</h3>
                </div>
                <div class="box-header with-border text-right col-md-6">
                  <a href="<?=base_url('administrator/discussion');?>" class="btn btn-info">Back To Discussion List</a>
                </div><!-- /.box-header -->
                <div class="clearfix"></div>
                <?php if($this->session->flashdata('updated')): ?>
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Success!</strong> <?php echo $this->session->flashdata('updated'); ?>
                </div>
                <?php endif; ?>
                <?php echo form_open(base_url('administrator/discussion/'.$discussion->d_id));?>
                <div class="box-body">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Discussion Title</label>
                      <input type="text" class="form-control" name="dis_title" value="<?=$discussion->title;?>">
                      <?php echo form_error('dis_title');?>
                    </div>
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" name="dis_desc" id="summernote"><?=$discussion->body;?></textarea>
                      <?php echo form_error('dis_desc');?>
                    </div>
                    <?php if(sizeof($comments)){ foreach ($comments as $key => $value) {?>
                      <div class="form-group">
                        <label>Comments</label>
                      </div>
                      <div class="form-group comment">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                        <label><?=$value->c_body;?></label><br> <label class="btn btn-danger d_approved" data-status="3" data-id="<?=$value->c_id;?>"><i class="fa fa-trash"></i></label>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                          <label><?=$value->fname;?></label><br>
                          <label><?=$value->c_created_on;?></label>
                        </div>
                      </div>
                    <?php }}?>
                    <!-- input states -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                <?php echo form_close();?>
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?=load_view('admin/admin-footer');?>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>
      <script>
        $(function() {

          $('#summernote').summernote({
                minHeight:300,
            toolbar: [
              ['style', ['bold', 'italic', 'underline']],
              ['font', ['strikethrough', 'superscript', 'subscript']],
              ['para', ['ul', 'ol', 'paragraph']],
            ]
          });
        });
        $(".d_approved").click(function(e) {
          e.preventDefault();
          var id = $(this).attr("data-id");
          var status = $(this).attr("data-status");
          $.ajax({
              type: "POST",
              url: "<?=base_url('administrator/comments-changed');?>",
              data: "id="+id+"&status="+status,
              success: function(result) {
                  location.reload();
              },
              error: function(result) {
                  alert('error');
              }
          });
        });
      </script>