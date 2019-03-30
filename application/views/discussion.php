    <?=load_view('admin/admin-header-top');?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>Discussions</h1>          
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Waiting for approval discussion</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped discussion">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>User Name</th>
                        <th>Added On</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($discussion as $key => $value) {
                      if($value->active == 2){?>
                      <tr>
                        <td><?=$value->title;?></td>
                        <td><?=$value->fname;?></td>
                        <td><?=date('d M, Y h:ia',strtotime($value->created_on));?></td>
                        <td><a href="<?=base_url('administrator/discussion/'.$value->d_id);?>" class="btn btn-info"><i class="fa fa-edit"></i></a> <button class="btn btn-warning d_approved" data-status="1" data-id="<?=$value->d_id;?>">Approve</button></td>
                      </tr>
                    <?php }}?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Title</th>
                        <th>User Name</th>
                        <th>Added On</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Approved Discussions</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table class="table table-bordered table-striped discussion">
                    <thead>
                      <tr>
                        <th>Title</th>
                        <th>User Name</th>
                        <th>Added On</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($discussion as $key => $value) {
                      if($value->active == 1){?>
                      <tr>
                        <td><?=$value->title;?></td>
                        <td><?=$value->fname;?></td>
                        <td><?=date('d M, Y h:ia',strtotime($value->created_on));?></td>
                        <td><a href="<?=base_url('administrator/discussion/'.$value->d_id);?>" class="btn btn-info"><i class="fa fa-edit"></i></a> <button class="btn btn-danger d_approved" data-status="3" data-id="<?=$value->d_id;?>"><i class="fa fa-trash"></i></button></td>
                      </tr>
                    <?php }}?>
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Title</th>
                        <th>User Name</th>
                        <th>Added On</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?=load_view('admin/admin-footer');?>
      <script type="text/javascript">
      $(".d_approved").click(function(e) {
        e.preventDefault();
        var id = $(this).attr("data-id");
        var status = $(this).attr("data-status");
        $.ajax({
            type: "POST",
            url: "<?=base_url('administrator/status-changed');?>",
            data: "id="+id+"&status="+status,
            success: function(result) {
                //console.log(result);
                location.reload();
            },
            error: function(result) {
                alert('error');
            }
        });
      });
      // $(".delete").click(function(e) {
      //   e.preventDefault();
      //   var id = $(this).attr("data-id");        
      //   $.ajax({
      //       type: "POST",
      //       url: "<?=base_url('administrator/remove-discussion');?>",
      //       data: "id="+id,
      //       success: function(result) {
      //           // console.log(result);
      //           location.reload();
      //       },
      //       error: function(result) {
      //           alert('error');
      //       }
      //   });
      // });
      </script>