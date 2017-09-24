

        <!-- Content nameer (Page header) -->
        <section class="content-header">
          <h1>
           ทัวร์
            <small>จัดการทัวร์</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="<?=site_url('backend');?>"><i class="fa fa-dashboard"></i> หน้าหลัก</a></li>
            <li class=""><a href="<?=site_url('backend/room');?>">จัดการทัวร์</a></li>
            <li class="active">จัดการทัวร์</li>
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
                  <h3 class="box-title">จัดการ ทัวร์</h3>
                </div><!-- /.box-header -->

                    <?=form_open_multipart('backend/room/do_save');?>
                  <div class="box-body">

                  <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#other" aria-controls="other" role="tab" data-toggle="tab">ข้อมูลหลัก</a></li>
                    <li role="presentation" class=""><a href="#th" aria-controls="th" role="tab" data-toggle="tab">ไทย</a></li>
                    <li role="presentation"><a href="#en" aria-controls="en" role="tab" data-toggle="tab">อังกฤษ</a></li>
                    <li role="presentation"><a href="#promotion" aria-controls="en" role="tab" data-toggle="tab">Promotion</a></li>
                  </ul>
                   <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="other" style="padding-top: 10px;">

                     <div class="form-group col-md-6">
                      <label for="room_no">เลขที่อ้างอิง</label>
                      <input type="text" name="room_no" class="form-control" id="room_no" placeholder="" value="">
                     </div>
                     <div class="form-group col-md-6">
                        <label for="category_id">ประเภท</label>
                        <select type="text" name="category_id" class="form-control" id="category_id" placeholder="">
                          <option value="">ประเภท</option>
                          <?php foreach($category as $cat):
                          $lang = unserialize($cat->category_name);

                          ?>
                            <option value="<?=$cat->category_id;?>"><?=$lang['th'];?></option>
                          <?php endforeach;?>
                        </select>
                      </div>

                      <div class="form-group col-md-6">
                         <label for="country_id">ประเทศ</label>
                         <select type="text" name="country_id" class="form-control" id="country_id" placeholder="">
                           <option value="">ประเทศ</option>
                           <?php foreach($countries as $c):

                           ?>
                             <option value="<?=$c->num_code;?>"><?=$c->nationality;?></option>
                           <?php endforeach;?>
                         </select>
                       </div>

                      <div class="form-group col-md-6">
                        <label for="room_price">ราคา</label>
                        <input type="text" name="room_price" class="form-control" id="room_price" placeholder="" value="">
                      </div>


                      <div class="form-group col-md-6">
                        <label for="link">Link affiliate</label>
                        <input type="text" name="link" class="form-control" id="link" placeholder="" value="">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="star">ดาว</label>
                        <input type="text" name="star" class="form-control" id="star" placeholder="" value="">
                      </div>

                      <div class="form-group col-md-6">
                        <label for="room_status">หมวดหมู่</label>
                        <input type="radio" name="deal" class="" value="hot"> Hot Deals
                        <input type="radio" name="deal" class="" value="hotel"> Hotel Deals
                      </div>



                      <div class="form-group col-md-6">
                        <label for="room_status">สถานะ</label>
                        <input type="radio" name="room_status" checked class="" value="Y"> แสดงผล
                        <input type="radio" name="room_status" class="" value="N"> ปิดแสดงผล
                      </div>

                      <div class="form-group col-md-6">
                        <label for="room_image">ภาพ</label>
                        <input type="file" name="room_image" class="form-control" id="room_image" placeholder="" value="">
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="th" style="padding-top: 10px;">


                      <div class="form-group col-md-8">
                        <label for="room_name">ชื่อ ทัวร์</label>
                        <input type="text" name="room_name[th]" class="form-control" id="room_name" placeholder="" value="">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="room_short">คำโปรย</label>
                        <textarea type="text" name="room_short[th]" class="form-control" id="room_short" placeholder=""></textarea>
                      </div>





                      <div class="form-group col-md-12">
                        <label for="room_description">ข้อมูล</label>
                        <textarea name="room_description[th]" class="form-control detail" id="room_description" placeholder="" rows="10"></textarea>
                      </div>




                      <div class="form-group col-md-12">
                        <label for="seo_title">SEO TITLE</label>
                        <input type="text" name="seo_title[th]" class="form-control" id="seo_title" placeholder="" value="">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="seo_keywords">SEO KEYWORDS</label>
                        <textarea name="seo_keywords[th]" class="form-control" rows="5"></textarea>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="seo_description">SEO DESCRIPTION</label>
                        <textarea name="seo_description[th]" class="form-control" rows="5"></textarea>
                      </div>


                    </div>
                    <div role="tabpanel" class="tab-pane" id="en" style="padding-top: 10px;">

                      <div class="form-group col-md-8">
                        <label for="room_name">ชื่อ ทัวร์</label>
                        <input type="text" name="room_name[en]" class="form-control" id="room_name" placeholder="" value="">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="room_short">คำโปรย</label>
                        <textarea type="text" name="room_short[en]" class="form-control" id="room_short" placeholder=""></textarea>
                      </div>
                      <div class="form-group col-md-12">
                        <label for="room_description">ข้อมูล</label>
                        <textarea name="room_description[en]" class="form-control detail" id="room_description" placeholder="" rows="10"></textarea>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="seo_title">SEO TITLE</label>
                        <input type="text" name="seo_title[en]" class="form-control" id="seo_title" placeholder="" value="">
                      </div>

                      <div class="form-group col-md-12">
                        <label for="seo_keywords">SEO KEYWORDS</label>
                        <textarea name="seo_keywords[en]" class="form-control" rows="5"></textarea>
                      </div>

                      <div class="form-group col-md-12">
                        <label for="seo_description">SEO DESCRIPTION</label>
                        <textarea name="seo_description[en]" class="form-control" rows="5"></textarea>
                      </div>


                    </div>

                    <div role="tabpanel" class="tab-pane" id="promotion" style="padding-top: 10px;">

                      <table class='table table-striped table-bordered'>
                        <thead>
                            <tr>
                              <td>ราคา</td>
                              <td>วันที่เริ่มต้น</td>
                              <td>วันที่สิ้นสุด</td>
                              <td>จัดการ</td>
                            </tr>
                        </thead>
                        <tbody id='data'>

                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="4" align="right">
                              <a href="#" class='add-promotion btn btn-info btn-sm'><i class="fa fa-plus"> เพิ่ม</i></a>
                            </td>
                          </tr>
                        </tfoot>

                      </table>

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
