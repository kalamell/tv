
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Promotion
            <small>จัดการ Promotion</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
            <li class="active">จัดการ Promotion</li>
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
                  <h3 class="box-title">จัดการ Content</h3>
                  <div class="box-tools">
                    <a href="<?=site_url('backend/promotion/add');?>" class="btn btn-sm btn-info"> เพิ่มข้อมูล</a>
                  </div>
                </div><!-- /.box-header -->

                        <div class="box-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <td>ชื่อ Promotion</td>
                        <th>Package ที่เกี่ยวข้อง</th>
                        <td>วันที่</td>
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
                              <td><?=$r->content_name;?>
                                <?php if($r->content_path !=''):?>
                                  <img src="<?php echo base_url();?>public/upload/content/<?php echo $r->content_path;?>" class='img-responsive' alt="">
                                <?php endif;?>
                              </td>
                              <td>
                                <?php
                                if ($r->room_id!=null) {
                                  $room_name = unserialize($r->room_name);
                                  echo $room_name['th'];
                                } else {
                                  echo '-';
                                }
                                ?>
                              </td>
                              <td><?=$r->create_date;?></td>

                              <td>
                                <a class="btn btn-sm btn-info" href="<?=site_url('backend/promotion/edit/'.$r->content_id);?>">Edit</a>
                                <a class="btn btn-sm btn-default" href="<?=site_url('backend/promotion/delete/'.$r->content_id);?>" onclick="javascript:return confirm('คุณต้องการลบหรือไม่ ?')">Delete</a>
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
