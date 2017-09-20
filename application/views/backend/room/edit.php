

        <!-- Content nameer (Page header) -->
        <section class="content-header">
          <h1>
           ห้องพัก
            <small>จัดการห้องพัก</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
            <li class=""><a href="<?=site_url('backend/room');?>">จัดการห้องพัก</a></li>
            <li class="active">จัดการห้องพัก</li>
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
                  <h3 class="box-title">จัดการ ห้องพัก</h3>
                </div><!-- /.box-header -->

                    <?=form_open_multipart('backend/room/do_edit');?>

                    <input type="hidden" name="room_id" value="<?=$r->room_id;?>">


                  <div class="box-body">

                  <ul class="nav nav-tabs" role="tablist">     
                  <li role="presentation" class="active"><a href="#other" aria-controls="other" role="tab" data-toggle="tab">ข้อมูลหลัก</a></li>
                    <li role="presentation" class=""><a href="#th" aria-controls="th" role="tab" data-toggle="tab">ไทย</a></li>
                    <li role="presentation"><a href="#en" aria-controls="en" role="tab" data-toggle="tab">อังกฤษ</a></li>
                  </ul>
                   <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="other" style="padding-top: 10px;">
                     
                     <div class="form-group col-md-6">
                      <label for="room_no">เลขห้องพัก</label>
                      <input type="text" name="room_no" class="form-control" id="room_no" placeholder="" value="<?=$r->room_no;?>">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="category_id">ประเภทห้องพัก</label>
                        <select type="text" name="category_id" class="form-control" id="category_id" placeholder="">
                          <option value="">ประเภทห้อง</option>
                          <?php foreach($category as $cat):
                          $lang = unserialize($cat->category_name);

                          ?>
                            <option value="<?=$cat->category_id;?>" <?=$cat->category_id==$r->category_id?' selected':'';?>><?=$lang['th'];?></option>
                          <?php endforeach;?>
                        </select>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="room_price">ราคา</label>
                        <input type="text" name="room_price" class="form-control" id="room_price" placeholder="" value="<?=$r->room_price;?>">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="room_total">จำนวนที่พักได้</label>
                        <input type="text" name="room_total" class="form-control" id="room_total" placeholder="" value="<?=$r->room_total;?>">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="room_status">สถานะ</label>
                        <input type="radio" name="room_status" <?=$r->room_status=='Y'?'checked':'';?> class="" value="Y"> แสดงผล
                        <input type="radio" name="room_status"  <?=$r->room_status=='N'?'checked':'';?> class="" value="N"> ปิดแสดงผล
                      </div>

                      <div class="form-group col-md-6">
                      <label for="room_image">ภาพห้อง ( 270 x 228 )</label>
                       <?php if ($r->room_image!=''):?>
                        <img src="<?=base_url();?>public/upload/room/<?=$r->room_image;?>" style="width: 300px;" alt="">
                      <?php endif;?>

                      <input type="file" name="room_image" class="form-control" id="room_image" placeholder="" value="">
                    </div>




                    </div>

                    <?php 
                    $room_name = unserialize($r->room_name);
                    $room_short = unserialize($r->room_short);
                    $room_description = unserialize($r->room_description);
                    $seo_title = unserialize($r->seo_title);
                    $seo_keywords = unserialize($r->seo_keywords);
                    $seo_description = unserialize($r->seo_description);
                    ?>
                    <div role="tabpanel" class="tab-pane" id="th" style="padding-top: 10px;">


                      <div class="form-group col-md-8">
                        <label for="room_name">ชื่อ ห้องพัก</label>
                        <input type="text" name="room_name[th]" class="form-control" id="room_name" placeholder="" value="<?=$room_name['th'];?>">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="room_short">คำโปรย</label>
                        <textarea type="text" name="room_short[th]" class="form-control" id="room_short" placeholder=""><?=$room_short['th'];?></textarea>
                      </div>


                      

                     
                      <div class="form-group col-md-12">
                        <label for="room_description">ข้อมูล</label>
                        <textarea name="room_description[th]" class="form-control detail" id="room_description" placeholder="" rows="10"><?php echo $room_description['th'];?></textarea>
                      </div>

                      


                      <div class="form-group col-md-12">
                        <label for="seo_title">SEO TITLE</label>
                        <input type="text" name="seo_title[th]" class="form-control" id="seo_title" placeholder="" value="<?=$seo_title['th'];?>">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="seo_keywords">SEO KEYWORDS</label>
                        <textarea name="seo_keywords[th]" class="form-control" rows="5"><?=$seo_keywords['th'];?></textarea>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="seo_description">SEO DESCRIPTION</label>
                        <textarea name="seo_description[th]" class="form-control" rows="5"><?=$seo_description['th'];?></textarea>
                      </div>


                    </div>
                    <div role="tabpanel" class="tab-pane" id="en" style="padding-top: 10px;">

                      <div class="form-group col-md-8">
                        <label for="room_name">ชื่อ ห้องพัก</label>
                        <input type="text" name="room_name[en]" class="form-control" id="room_name" placeholder="" value="<?=$room_name['en'];?>">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="room_short">คำโปรย</label>
                        <textarea type="text" name="room_short[en]" class="form-control" id="room_short" placeholder=""><?=$room_short['en'];?></textarea>
                      </div>


                      

                     
                      <div class="form-group col-md-12">
                        <label for="room_description">ข้อมูล</label>
                        <textarea name="room_description[en]" class="form-control detail" id="room_description" placeholder="" rows="10"><?=$room_description['en'];?></textarea>
                      </div>

                      


                      <div class="form-group col-md-12">
                        <label for="seo_title">SEO TITLE</label>
                        <input type="text" name="seo_title[en]" class="form-control" id="seo_title" placeholder="" value="<?=$seo_title['en'];?>">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="seo_keywords">SEO KEYWORDS</label>
                        <textarea name="seo_keywords[en]" class="form-control" rows="5"><?=$seo_keywords['en'];?></textarea>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="seo_description">SEO DESCRIPTION</label>
                        <textarea name="seo_description[en]" class="form-control" rows="5"><?=$seo_description['en'];?></textarea>
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
