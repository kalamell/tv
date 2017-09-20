
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
   ข้อมูลผู้ติดต่อ
    <small>จัดการข้อมูลข้อมูลผู้ติดต่อ</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
    <li class="active">จัดการข้อมูลข้อมูลผู้ติดต่อ</li>
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
          <h3 class="box-title">จัดการข้อมูลข้อมูลผู้ติดต่อ</h3>
        </div><!-- /.box-header -->

                <div class="box-body">
          <table class="table table-bordered table-striped">
            <thead>
              <tr>
                <td>เรื่อง</td>
                <td>ชื่อข้อมูลผู้ติดต่อ</td>
                <td>วันที่</td>
              </tr>
            </thead>
            <tbody>
              <?php
              if (count($rs)==0) {
                echo '<tr><td colspan="3"> - - ไม่มีข้อมูล - - </td></tr>';
              } else {
                  foreach ($rs as $r) {
                    ?>
                    <tr>
                      <td><?=$r->subject;?></td>
                      <td><?=$r->name."<br>".$r->mobile.'<br>'.$r->email;?></td>
                      <td><?=$r->create_date;?></td>

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
