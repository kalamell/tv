
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           ผู้ดูแลระบบ
            <small>จัดการ Banner</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
            <li class="active">จัดการ Banner</li>
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
                  <h3 class="box-title">จัดการ Banner</h3>
                  <div class="box-tools">
                    <a href="<?=site_url('backend/banner/add');?>" class="btn btn-sm btn-info"> เพิ่มข้อมูล</a>
                  </div>
                </div><!-- /.box-header -->

				        <div class="box-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <td>ชื่อ</td>
                        <td width="300">ภาพ Banner</td>
                        <td>Link</td>
                        <td width="150">Tools</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (count($rs)==0) {
                        echo '<tr><td colspan="4"> - - ไม่มีข้อมูล - - </td></tr>';

                      } else {
                          foreach ($rs as $r) {
                            ?>
                            <tr>
                              <td><?=$r->banner_head;?></td>
                              <td><img src="<?=base_url('public/upload/banner/'.$r->banner_image);?>" class="img-responsive"></td>
                              <td><?=$r->link;?></td>

                              <td>
                                <a class="btn btn-sm btn-info" href="<?=site_url('backend/banner/edit/'.$r->banner_id);?>">Edit</a>
                                <a class="btn btn-sm btn-default" href="<?=site_url('backend/banner/delete/'.$r->banner_id);?>" onclick="javascript:return confirm('คุณต้องการลบหรือไม่ ?')">Delete</a>
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
