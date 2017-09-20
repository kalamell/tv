
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
  <?php 
  $room_name = unserialize($r->room_name);?>
   ห้องพัก <?=$room_name['th'];?>
    <small>จัดการ แกลอรี่ ห้องพัก <?=$room_name['th'];?> </small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
    <li class=""><a href="<?=site_url('backend/room');?>">จัดการ ห้องพัก</a></li>
    <li class='active'>แกลอรี่ห้องพัก <?=$room_name['th'];?> </li>
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
          <h3 class="box-title">จัดการ แกลอรี่ห้อง <?=$room_name['th'];?></h3>
          <div class="box-tools">
            <?=form_open_multipart('backend/room/do_gallery', array('class' => 'form-inline'));?>
            <input type="hidden" name="room_id" value="<?=$r->room_id;?>">
            <input type="file" name="gallery_path" class="form-control"> ขนาด 548 x 452 &nbsp;<button type="submit" class="btn btn-info">Upload</button>
            <?=form_close();?>
          </div>
        </div><!-- /.box-header -->

                <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <td>ภาพ</td>

                <td width="150">Tools</td>
              </tr>
            </thead>
            <tbody>
              <?php
              if (count($gallery)==0) {
                echo '<tr><td colspan="7"> - - ไม่มีข้อมูล - - </td></tr>';

              } else {
                  foreach ($gallery as $g) {
                    ?>
                    <tr>
                      <td><img src="<?=base_url();?>public/upload/room/<?=$g->gallery_path;?>" class="img-responsive" /></td>
                      <td>
                        <a class="btn btn-sm btn-default" href="<?=site_url('backend/room/delete_gallery/'.$g->room_id.'/'.$g->gallery_id);?>" onclick="javascript:return confirm('คุณต้องการลบหรือไม่ ?')">Delete</a>
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
