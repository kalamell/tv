

        <!-- Content nameer (Page header) -->
        <section class="content-header">
          <h1>
            Promotion
            <small>จัดการ Promotion</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
            <li class=""><a href="<?=site_url('backend/promotion');?>">จัดการ Promotion</a></li>
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
                  <h3 class="box-title">จัดการ  Promotion</h3>
                </div><!-- /.box-header -->

                    <?=form_open_multipart('backend/promotion/do_save');?>
                  <div class="box-body">




                    <div class="form-group col-md-8">
                      <label for="content_name">ชื่อ  Promotion</label>
                      <input type="text" name="content_name" class="form-control" id="content_name" placeholder="" value="">
                    </div>

                    <div class="form-group col-md-6">
                       <label for="room_id">Tour</label>
                       <select type="text" name="room_id" class="form-control" id="room_id" placeholder="">
                         <option value="">เลือก Tour ที่ต้องการ</option>
                         <?php foreach($rs as $_r):
                         $lang = unserialize($_r->room_name);

                         ?>
                           <option value="<?=$_r->room_id;?>"><?=$lang['th'];?></option>
                         <?php endforeach;?>
                       </select>
                     </div>

                    <div class="form-group col-md-12">
                      <label for="content_short">คำโปรย</label>
                      <textarea type="text" name="content_short" class="form-control" id="content_short" placeholder=""></textarea>
                    </div>

                    <div class="form-group col-md-12">
                      <label for="content_description">ข้อมูล</label>
                      <textarea name="content_description" class="form-control detail" id="content_description" placeholder="" rows="10"></textarea>
                    </div>

                    <div class="form-group col-md-6">
                      <label for="content_path">ภาพประกอบ ( 370 x 154 )</label>
                      <input type="file" name="content_path" class="form-control" id="content_path" placeholder="" value="">
                    </div>

                    <div class="checkbox col-md-6">
                        <label>
                          <input type="checkbox" name="recommend" value="1"> Best Package
                        </label>
                      </div>



                  </div><!-- /.box-body -->

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <?=form_close();?>
                </div>
            </div>
        </div>
        </section><!-- /.content -->
