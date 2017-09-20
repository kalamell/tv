
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   ข้อมูลการจอง
    <small>ข้อมูลการจอง</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
    <li class=""><a href="<?=site_url('backend');?>">ข้อมูลการจอง</a></li>
    <li class="active">ข้อมูลการจอง</li>
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
                  <h3 class="box-title">ข้อมูลการจอง</h3>

                </div><!-- /.box-header -->
                <?=form_open('backend/booking/do_save');?>
                <input type="hidden" name="booking_id" value="<?=$r->booking_id;?>">
                        <div class="box-body">
<?php
$room_name = unserialize($r->room_name);
?>
                  <div class="form-group">
                    <label for="bank_name">ห้อง</label>
                    <input type="text" name="bank_name" class="form-control" id="bank_name" readonly="readonly" value="<?=$room_name['th'];?>" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="check_in">วันที่เข้าพัก</label>
                    <input type="text" name="check_in" class="form-control" id="check_in" readonly="readonly" value="<?=date('d M Y', strtotime($r->check_in));?>" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="check_out">วันที่ออก</label>
                    <input type="text" name="check_out" class="form-control" id="check_out" readonly="readonly" value="<?=date('d M Y', strtotime($r->check_out));?>" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="name">ผู้พัก</label>
                    <input type="text" name="name" class="form-control" id="name" value="<?=$r->name;?>" readonly="readonly" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="mobile">เบอร์ติดต่อ</label>
                    <input type="text" name="mobile" class="form-control" id="mobile" value="<?=$r->mobile;?>" readonly="readonly" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" name="email" class="form-control" id="email" value="<?=$r->email;?>" readonly="readonly" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="parent">ผู้เข้าพัก ผู้ใหญ่</label>
                    <input type="text" name="parent" class="form-control" id="parent" value="<?=$r->parent;?>" readonly="readonly" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="child">ผู้เข้าพัก เด็ก</label>
                    <input type="text" name="child" class="form-control" id="child" value="<?=$r->child;?>" readonly="readonly" placeholder="">
                  </div>


                  <div class="form-group">
                    <label for="child">หมายเหตุเพิ่มเติม</label>
                    <textarea class="form-control" readonly="readonly" placeholder=""><?=$r->remark;?></textarea>
                  </div>


                  <div class="form-group">
                    <label for="child">สถานะ</label>
                    <select name="booking_status" class="form-control" id="">
                      <option value="pending" <?=$r->booking_status=='pending'?' selected':'';?>>จอง ยังไม่ยืนยัน</option>
                      <option value="active" <?=$r->booking_status=='active'?' selected':'';?>>จองเรียบร้อย</option>
                      <option value="cancel" <?=$r->booking_status=='cancel'?' selected':'';?>>ยกเลิกการจอง</option>
                    </select>
                  </div>






                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <?=form_close();?>

              </div>
            </div>
          </div>
        </section>
