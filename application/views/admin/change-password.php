    <?=load_view('admin/admin-header-top');?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Change Password</h1>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <div class="box-title">
                                <div class="title"></div>
                            </div>
                        </div>
                        <div class="box-body">
                        <?php echo $this->session->flashdata('msg'); ?>
                        <?php echo form_open_multipart('administrator/change-password',array('class'=>'form-horizontal')); ?>
                        <div class="col-md-8">                                   
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Old Password</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" value="" name="password" >
                                    <span class="text-danger"><?php echo form_error('password'); ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">New Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="newpassword" value="" class="form-control">
                                    <span class="text-danger"><?php echo form_error('newpassword'); ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label  class="col-sm-3 control-label">Confirm Password</label>
                                <div class="col-sm-9">
                                    <input type="password" name="confirmpassword" value="" class="form-control">
                                    <span class="text-danger"><?php echo form_error('confirmpassword'); ?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-6 col-sm-9">
                                    <button type="submit" class="btn btn-primary">Save Password</button>
                                </div>
                            </div>
                        </div> <!-- col-md-6 -->
                        </div>
                    </div>
                </div>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?=load_view('admin/admin-footer');?>