
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   ภาษา
    <small>จัดการภาษา</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
    <li class="active">จัดการภาษา</li>
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
          <h3 class="box-title">จัดการภาษา</h3>
          <div class="">
            <?=form_open('backend/language/add');?>
            <div class="row">
              <div class="col-md-3">
                <input type="text" name="name" class="form-control" value="" placeholder="ชื่อเรียก">
              </div>
              <div class="col-md-3">
                <input type="text" name="data[th]" class="form-control" value="" placeholder="ภาษาไทย">
              </div>
              <div class="col-md-3">
                <input type="text" name="data[en]" class="form-control" value="" placeholder="ภาษาอังกฤษ">
              </div>
              <div class="col-md-3">
                <button name="save" class="btn btn-info">เพิ่มข้อมูล</button>
              </div>
            </div>

            <?=form_close();?>

          </div>
        </div><!-- /.box-header -->

        <div class="box-body">
        <?=form_open('backend/language/update');?>
        <p><button type="submit" name="save" class="btn btn-info">Update</button></p>
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <td>ชื่อ</td>
                <td>ภาษาไทย</td>
                <td>ภาษาอังกฤษ</td>
                <td width="150">Tools</td>
              </tr>
            </thead>
            <tbody>
              <?php
              if (count($rs)==0) {
                echo '<tr><td colspan="4"> - - ไม่มีข้อมูล - - </td></tr>';
              } else {
                  foreach ($rs as $r) {
                    $data = unserialize($r->data);
                    ?>
                    <tr>
                      <td><input type="text" class="form-control" name="name[<?=$r->id;?>]" value="<?=$r->name;?>" /></td>
                     <td><input type="text" class="form-control" name="data[<?=$r->id;?>][th]" value="<?=$data['th'];?>" /></td>
                     <td><input type="text" class="form-control" name="data[<?=$r->id;?>][en]" value="<?=$data['en'];?>" /></td>
                      <td>
                         <a class="btn btn-sm btn-default" href="<?=site_url('backend/language/delete/'.$r->id);?>" onclick="javascript:return confirm('คุณต้องการลบหรือไม่ ?')">Delete</a>
                      </td>
                    </tr>
                    <?php
                  }

              }
              ?>
            </tbody>

          </table>
          <?=form_close();?>


        </div>
      </div>
    </div>
  </div>
</section>
