
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           ธนาคาร
            <small>จัดการข้อมูลธนาคาร</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
            <li class="active">จัดการข้อมูลธนาคาร</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">

          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">จัดการข้อมูลธนาคาร</h3>
                  <div class="box-tools">
                    <a href="<?=site_url('backend/bank/add');?>" class="btn btn-sm btn-info"> เพิ่มข้อมูล</a>
                  </div>
                </div><!-- /.box-header -->

                        <div class="box-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <td>ชื่อธนาคาร</td>
                        <td>เลขที่บัญชี</td>
                        <td>สาขา</td>
                        <td width="150">Tools</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (count($rs)==0) {
                        echo '<tr><td colspan="3"> - - ไม่มีข้อมูล - - </td></tr>';
                      } else {
                          foreach ($rs as $r) {
                            ?>
                            <tr>
                              <td><?=$r->bank_name;?></td>
                              <td><?=$r->bank_code;?></td>
                              <td><?=$r->bank_branch;?></td>
                              <td>
                                <a class="btn btn-sm btn-info" href="<?=site_url('backend/bank/edit/'.$r->bank_id);?>">Edit</a>
                                <a class="btn btn-sm btn-default" href="<?=site_url('backend/bank/delete/'.$r->bank_id);?>" onclick="javascript:return confirm('คุณต้องการลบหรือไม่ ?')">Delete</a>
                              </td>
                            </tr>
                            <?php
                          }

                      }
                      ?>
                    </tbody>

                  </table>


                </div>
              </div>
            </div>
          </div>
        </section>
