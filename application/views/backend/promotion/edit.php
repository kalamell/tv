

<!-- Content nameer (Page header) -->
<section class="content-header">
  <h1>
    Promotion
    <small>จัดการ Promotion</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
    <li class=""><a href="<?=site_url('backend/promotion');?>">จัดการ Promotion</a></li>
    <li class="active">จัดการ Content</li>
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

            <?=form_open_multipart('backend/promotion/do_edit');?>
            <input type="hidden" name="content_id" value="<?=$r->content_id;?>">
          <div class="box-body">




            <div class="form-group col-md-8">
              <label for="content_name">ชื่อ  Promotion</label>
              <input type="text" name="content_name" class="form-control" id="content_name" placeholder="" value="<?=$r->content_name;?>">
            </div>

            <div class="form-group col-md-12">
              <label for="content_short">คำโปรย</label>
              <textarea type="text" name="content_short" class="form-control" id="content_short" placeholder=""><?=$r->content_short;?></textarea>
            </div>

            <div class="form-group col-md-12">
              <label for="content_description">ข้อมูล</label>
              <textarea name="content_description" class="form-control detail" id="content_description" placeholder="" rows="10"><?=$r->content_description;?></textarea>
            </div>

            <div class="form-group col-md-6">
              <label for="content_path">ภาพประกอบ ( 990 x 540 )</label>
              <br>
              <?php
              if ($r->content_path!=''):
              ?>
            <img src="<?=base_url();?>public/upload/content/<?=$r->content_path;?>" style="height: 100px;" />

          <?php endif;?>
              <input type="file" name="content_path" class="form-control" id="content_path" placeholder="" value="">
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
