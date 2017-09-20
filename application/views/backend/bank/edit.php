
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   ธนาคาร
    <small>จัดการข้อมูลธนาคาร</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
    <li class=""><a href="<?=site_url('backend/bank');?>">จัดการข้อมูลธนาคาร</a></li>
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
                  <h3 class="box-title">จัดการข้อมูลธนาคาร</h3>

                </div><!-- /.box-header -->
                <?=form_open('backend/bank/do_edit');?>
                        <div class="box-body">
                  <input type="hidden" name="bank_id" value="<?=$r->bank_id;?>">
                  <div class="form-group">
                    <label for="bank_name">ชื่อธนาคาร</label>
                    <input type="text" name="bank_name" class="form-control" value="<?=$r->bank_name;?>" id="bank_name" placeholder="">
                  </div>

                  <div class="form-group">
                    <label for="bank_code">เลขที่บัญชี</label>
                    <input type="text" name="bank_code" class="form-control"  value="<?=$r->bank_code;?>" id="bank_code" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="bank_branch">สาขา</label>
                    <input type="text" name="bank_branch" class="form-control"  value="<?=$r->bank_branch;?>" id="bank_branch" placeholder="">
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
