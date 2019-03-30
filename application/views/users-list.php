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
                  <h3 class="box-title">Users</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tbody><tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Reg Type</th>
                      <th class="text-center">Registerd<br>Date</th>
                      <th class="text-center">Status</th>
                      <th>Action</th>
                    </tr>
                    <?php if(sizeof($users)): foreach($users as $user): ?>
                    <tr>
                      <td><?=$user->fname;?></td>
                      <td><?=$user->email;?></td>
                      <td><?=ucwords($user->oauth_provider);?></td>
                      <td class="text-center"><?=date('d-m-Y',strtotime($user->created));?></td>
                      <td  class="text-center">
                      <?php if($user->active == 1): ?>
                      <span class="label label-success">Active</span>
                      <?php else: ?>
                      <span class="label label-danger">De-Active</span>
                      <?php endif; ?>
                      </td>
                      <td>
                      <?php if($user->active == 1): ?>
                      <a class="btn btn-danger btn-xs" href="<?=base_url('administrator/users/'.$user->id.'/block');?>">Block User</a>
                      <?php else: ?>
                      <a class="btn btn-success btn-xs" href="<?=base_url('administrator/users/'.$user->id.'/activate');?>">Activate User</a>
                      <?php endif; ?>
                      </td>
                    </tr>
                  <?php endforeach;?>
                  <?php endif;?>
                  </tbody></table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?=load_view('admin/admin-footer');?>