
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           ห้องพัก
            <small>จัดการ ห้องพัก</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
            <li class="active">จัดการ ห้องพัก</li>
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
                  <h3 class="box-title">จัดการ room</h3>
                  <div class="box-tools">
                    <a href="<?=site_url('backend/room/add');?>" class="btn btn-sm btn-info"> เพิ่มข้อมูล</a>
                  </div>
                </div><!-- /.box-header -->

                        <div class="box-body">
                  <table class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <td>ชื่อห้อง</td>
                        <td>เลขที่ห้อง</td>
                        <td width="300">ภาพ room</td>
                        <td>ประเภทห้อง</td>
                        <td>Gallery</td>
                        <td>แสดงผล</td>
                        <td width="150">Tools</td>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      if (count($rs)==0) {
                        echo '<tr><td colspan="7"> - - ไม่มีข้อมูล - - </td></tr>';

                      } else {
                          foreach ($rs as $r) {
                            $room_name = unserialize($r->room_name);
                            ?>
                            <tr>
                              <td><?=$room_name['th'];?></td>
                              <td><?=$r->room_no;?></td>
                              <td><img src="<?=base_url();?>public/upload/room/<?=$r->room_image;?>" class="img-responsive"/></td>
                              <td><?php 
                              $cat = unserialize($r->category_name); echo $cat['th'];?></td>
                              <td><a class="btn btn-sm btn-default" href="<?=site_url('backend/room/gallery/'.$r->room_id);?>">Gallery</a></td>
                              <td><?=$r->room_status;?></td>

                              <td>
                                <a class="btn btn-sm btn-info" href="<?=site_url('backend/room/edit/'.$r->room_id);?>">Edit</a>
                                <a class="btn btn-sm btn-default" href="<?=site_url('backend/room/delete/'.$r->room_id);?>" onclick="javascript:return confirm('คุณต้องการลบหรือไม่ ?')">Delete</a>
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
