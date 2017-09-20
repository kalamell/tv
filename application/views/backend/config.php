
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           ข้อมูลเว็บไซต์
            <small>ตั้งค่าข้อมูลเว็บไซต์</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
            <li class="active">ตั้งค่าข้อมูลเว็บไซต์</li>
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
                  <h3 class="box-title">ตั้งค่าเว็บไซต์</h3>
                </div><!-- /.box-header -->

				<?=form_open_multipart('backend/config/save');?>

				<div class="box-body">


        <!-- Nav tabs -->
      <ul class="nav nav-tabs" role="tablist">
     
        <li role="presentation" class="active"><a href="#th" aria-controls="th" role="tab" data-toggle="tab">ไทย</a></li>
        <li role="presentation"><a href="#en" aria-controls="en" role="tab" data-toggle="tab">อังกฤษ</a></li>
         <li role="presentation" class=""><a href="#other" aria-controls="other" role="tab" data-toggle="tab">ทั่วไป</a></li>
      </ul>

      <!-- Tab panes -->
      <?php 
      $title = unserialize($r->title);
      $description = unserialize($r->description);
      $keywords = unserialize($r->keywords);
      $footer = unserialize($r->footer);
      $address = unserialize($r->address);
      $slogan = unserialize($r->slogan);

      ?>
      <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="th" style="padding-top: 10px;">
          <div class="form-group">
            <label for="title">ชื่อเว็บไซต์</label>
            <input type="text" name="title[th]" class="form-control" id="title" placeholder="ชื่อเว็บไซต์" value="<?=$title['th'];?>">
          </div>

          <div class="form-group">
            <label for="description">รายละเอียดเว็บไซต์</label>
            <textarea name="description[th]" rows="5" class="form-control" id="description" placeholder="รายละเอียดเว็บไซต์"><?=$description['th'];?></textarea>
          </div>

          <div class="form-group">
            <label for="keywords">Keywords</label>
            <textarea name="keywords[th]" rows="5" class="form-control" id="keywords" placeholder="keywords"><?=$keywords['th'];?></textarea>
          </div>

          <div class="form-group">
            <label for="footer">Footer</label>
            <textarea name="footer[th]" rows="5" class="form-control" id="footer" placeholder="footer"><?=$footer['th'];?></textarea>
          </div>


          <div class="form-group">
            <label for="address">address</label>
            <textarea name="address[th]" class="form-control" id="address"><?=$address['th'];?></textarea>
          </div>

          <div class="form-group">
            <label for="slogan">slogan</label>
            <textarea name="slogan[th]" class="form-control" id="slogan"><?=$slogan['th'];?></textarea>
          </div>
        </div>


        <div role="tabpanel" class="tab-pane" id="en"  style="padding-top: 10px;">
          <div class="form-group">
            <label for="title">ชื่อเว็บไซต์</label>
            <input type="text" name="title[en]" class="form-control" id="title" placeholder="ชื่อเว็บไซต์" value="<?=$title['en'];?>">
          </div>

          <div class="form-group">
            <label for="description">รายละเอียดเว็บไซต์</label>
            <textarea name="description[en]" rows="5" class="form-control" id="description" placeholder="รายละเอียดเว็บไซต์"><?=$description['en'];?></textarea>
          </div>

          <div class="form-group">
            <label for="keywords">Keywords</label>
            <textarea name="keywords[en]" rows="5" class="form-control" id="keywords" placeholder="keywords"><?=$keywords['en'];?></textarea>
          </div>

          <div class="form-group">
            <label for="footer">Footer</label>
            <textarea name="footer[en]" rows="5" class="form-control" id="footer" placeholder="footer"><?=$footer['en'];?></textarea>
          </div>

           <div class="form-group">
            <label for="address">address</label>
            <textarea name="address[en]" class="form-control" id="address"><?=$address['en'];?></textarea>
          </div>

          <div class="form-group">
            <label for="slogan">slogan</label>
            <textarea name="slogan[en]" class="form-control" id="slogan"><?=$slogan['en'];?></textarea>
          </div>
        </div>
        <div role="tabpanel" class="tab-pane" id="other"  style="padding-top: 10px;">
          

          <div class="form-group">
            <label for="mobile">เบอร์ติดต่อ</label>
            <input type="text" name="mobile" class="form-control" id="mobile" placeholder="เบอร์ติดต่อ" value="<?=$r->mobile;?>">
          </div>

          <div class="form-group">
            <label for="line">Line URL</label>
            <input type="line" name="line" class="form-control" id="line" placeholder="line" value="<?=$r->line;?>">
          </div>

          <div class="form-group">
            <label for="facebook">Facebook Url</label>
            <input type="text" name="facebook" class="form-control" id="facebook" placeholder="facebook" value="<?=$r->facebook;?>">
          </div>

          <div class="form-group">
            <label for="ig">Instragram URL</label>
            <input type="text" name="ig" class="form-control" id="ig" placeholder="ig" value="<?=$r->ig;?>">
          </div>


          <div class="form-group">
            <label for="google">Google Plus URL</label>
            <input type="text" name="google" class="form-control" id="google" placeholder="google" value="<?=$r->google;?>">
          </div>

          <div class="form-group">
            <label for="twitter">Twitter URL</label>
            <input type="text" name="twitter" class="form-control" id="twitter" placeholder="twitter" value="<?=$r->twitter;?>">
          </div>


          <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="email" value="<?=$r->email;?>">
          </div>


          <div class="form-group">
            <label for="email">Paypal Email</label>
            <input type="email" name="paypal_email" class="form-control" id="paypal_email" placeholder="Paypal Email Account" value="<?=$r->paypal_email;?>">
          </div>


          <div class="form-group">
            <label for="latitude">latitude</label>
            <input type="latitude" name="latitude" class="form-control" id="latitude" placeholder="latitude" value="<?=$r->latitude;?>">
          </div>
          <div class="form-group">
            <label for="longtitude">longtitude</label>
            <input type="longtitude" name="longtitude" class="form-control" id="longtitude" placeholder="longtitude" value="<?=$r->longtitude;?>">
          </div>

          <div class="form-group">
                      <label for="logo">Logo </label>
            <?php if ($r->logo!=''):?>
            <p class="text-margin"><img class="img-thumbnail" src="<?=base_url('public/upload/'.$r->logo);?>" style="height: 50px;"></p>
            <?php endif;?>
                      <input type="file" name="logo" class="form-control" id="logo" placeholder="Logo" >
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
        </section><!-- /.content -->

