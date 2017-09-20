
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           ผู้ดูแลระบบ
            <small>จัดการข้อมูลผู้ดูแลระบบ</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
            <li class=""><a href="<?=site_url('backend/admin');?>">จัดการข้อมูลผู้ดูแลระบบ</a></li>
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
                  <h3 class="box-title">จัดการข้อมูลผู้ดูแลระบบ</h3>
                  
                </div><!-- /.box-header -->
                <?=form_open('backend/admin/do_save');?>
				        <div class="box-body">

                  <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder="Username">
                  </div>

                  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" name="password" class="form-control" id="password" placeholder="Password">
                  </div>

                  <div class="form-group">
                    <label for="name">ชื่อ</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="ชื่อ">
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
