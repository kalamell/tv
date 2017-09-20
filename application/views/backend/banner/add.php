

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           ผู้ดูแลระบบ
            <small>จัดการ Banner</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
            <li class=""><a href="<?=site_url('backend/banner');?>">จัดการ Banner</a></li>
            <li class="active">เพิ่มข้อมูล</li>
          </ol>
        </section>


        <!-- Main content -->
        <section class="content">

          <div class="row">
            <!-- left column -->
            <div class="col-sm-offset-2 col-md-offset-2 col-sm-8 col-md-8">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">จัดการ Banner</h3>
                </div><!-- /.box-header -->

      				<?=form_open_multipart('backend/banner/do_save');?>

      				<div class="box-body">
      					<div class="form-group">
                  <label for="banner_head">ชื่อ หัวข้อ</label>
                  <input type="text" name="banner_head" class="form-control" id="banner_head" placeholder="" value="">
                </div>

               <!--  <div class="form-group">
                  <label for="banner_title">หัวข้อย่อย</label>
                  <input type="text" name="banner_title" class="form-control" id="banner_title" placeholder="" value="">
                </div>
 -->
      					<div class="form-group">
                  <label for="banner_description">ข้อความ</label>
                  <textarea name="banner_description" rows="5" class="form-control" id="banner_description" placeholder=""></textarea>
                </div>


                <div class="form-group">
                  <label for="link">Link</label>
                  <input type="text" name="link" class="form-control" id="link" placeholder="" value="">
                </div>

                <div class="form-group">
                  <label for="link">ห้องพัก</label>
                  <select name="room_id" class="form-control">
                  <option value="">- - - ห้องพัก - - - </option>
                  <?php foreach($room as $rm):

                  $r = unserialize($rm->room_name);

                  ?>
                    <option value="<?=$rm->room_id;?>"><?=$r['th'];?></option>
                  <?php endforeach;?>
                  </select>
                </div>



      					<div class="form-group">
                    <label for="banner_image">ภาพ</label>
                    <input type="file" name="banner_image" class="form-control" id="banner_image" placeholder="" >
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
