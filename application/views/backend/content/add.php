

        <!-- Content nameer (Page header) -->
        <section class="content-header">
          <h1>
            Content
            <small>จัดการ Content</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
            <li class=""><a href="<?=site_url('backend/content');?>">จัดการ Content</a></li>
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
                  <h3 class="box-title">จัดการ  Content</h3>
                </div><!-- /.box-header -->

                    <?=form_open_multipart('backend/content/do_save');?>
                  <div class="box-body">

                  <ul class="nav nav-tabs" role="tablist">     
                    <li role="presentation" class="active"><a href="#th" aria-controls="th" role="tab" data-toggle="tab">ไทย</a></li>
                    <li role="presentation"><a href="#en" aria-controls="en" role="tab" data-toggle="tab">อังกฤษ</a></li>
                  </ul>
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="th" style="padding-top: 10px;">

                      <div class="form-group col-md-8">
                        <label for="content_name">ชื่อ  Content</label>
                        <input type="text" name="content_name[th]" class="form-control" id="content_name" placeholder="" value="">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="content_short">คำโปรย</label>
                        <textarea type="text" name="content_short[th]" class="form-control" id="content_short" placeholder=""></textarea>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="content_description">ข้อมูล</label>
                        <textarea name="content_description[th]" class="form-control detail" id="content_description" placeholder="" rows="10"></textarea>
                      </div>


                    </div>

                    <div role="tabpanel" class="tab-pane" id="en" style="padding-top: 10px;">

                      <div class="form-group col-md-8">
                        <label for="content_name">ชื่อ  Content</label>
                        <input type="text" name="content_name[en]" class="form-control" id="content_name" placeholder="" value="">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="content_short">คำโปรย</label>
                        <textarea type="text" name="content_short[en]" class="form-control" id="content_short" placeholder=""></textarea>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="content_description">ข้อมูล</label>
                        <textarea name="content_description[en]" class="form-control detail" id="content_description" placeholder="" rows="10"></textarea>
                      </div>



                    </div>


                  </div>





                    

                    <div class="form-group col-md-6">
                      <label for="content_path">ภาพประกอบ ( 990 x 540 )</label>
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
