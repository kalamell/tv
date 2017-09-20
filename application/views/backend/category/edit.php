
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    ประเภททัวร์
    <small>จัดการข้อมูล ประเภททัวร์</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
    <li class=""><a href="<?=site_url('backend/category');?>">จัดการข้อมูล ประเภททัวร์</a></li>
    <li class="active">เพิ่มข้อมูล</li>
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
                  <h3 class="box-title">จัดการข้อมูล ประเภททัวร์</h3>

                </div><!-- /.box-header -->
                <?=form_open('backend/category/do_edit');?>
                <input type="hidden" name="category_id" value="<?=$r->category_id;?>">

                <?php 
                $cat = unserialize($r->category_name);
                $detail = unserialize($r->category_detail);
                ?>
                <div class="box-body">

                  <ul class="nav nav-tabs" role="tablist">     
                    <li role="presentation" class="active"><a href="#th" aria-controls="th" role="tab" data-toggle="tab">ไทย</a></li>
                    <li role="presentation"><a href="#en" aria-controls="en" role="tab" data-toggle="tab">อังกฤษ</a></li>
                  </ul>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="th" style="padding-top: 10px;">

                     <div class="form-group">
                        <label for="category_name">ชื่อ ประเภททัวร์</label>
                        <input type="text" name="category_name[th]" class="form-control" id="category_name" value="<?=$cat['th'];?>" placeholder="">
                      </div>

                      <div class="form-group">
                        <label for="category_detail">ข้อความเพิ่มเติม</label>
                        <textarea name="category_detail[th]" class="form-control" id="category_detail" placeholder=""><?=$detail['th'];?></textarea>
                      </div>


                    </div>
                     <div role="tabpanel" class="tab-pane" id="en" style="padding-top: 10px;">
                      <div class="form-group">
                        <label for="category_name">ชื่อ ประเภททัวร์</label>
                        <input type="text" name="category_name[en]" class="form-control" id="category_name" value="<?=$cat['en'];?>" placeholder="">
                      </div>

                      <div class="form-group">
                        <label for="category_detail">ข้อความเพิ่มเติม</label>
                        <textarea name="category_detail[en]" class="form-control" id="category_detail" placeholder=""><?=$detail['en'];?></textarea>
                      </div>

                    </div>
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
