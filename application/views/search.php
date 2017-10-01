
<div class="placetop">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-box">
                    <h6>BOOK NOW</h6>
                    <div class="book">

                        <div class="tab-content">
                            <div class="tab-pane active" id="tour">
                                <?php echo form_open('main/do_search', array());?>
                                    <div class="form-group">
                                        <h2><?php echo line('where');?></h2>
                                        <label><?php echo line('destination');?></label>
                                        <input name="s" class="form-control" value="" placeholder="" type="text">
                                    </div>
                                    <div class="form-group">
                                        <h2><?php echo line('when');?></h2>
                                        <div class="date">
                                            <label><?php echo line('from');?></label>

                                            <input name="from_date" class="form-control" value="" placeholder="dd/mm/yy" type="text">
                                            <button type="button" class="calender"><i class="fa fa-calendar-o" aria-hidden="true"></i></button>
                                        </div>
                                    </div>
                                    <div class="date form-group">
                                        <label><?php echo line('to');?></label>
                                        <input name="to_date" class="form-control" value="" placeholder="dd/mm/yy" type="text">
                                        <button type="button" class="calender"><i class="fa fa-calendar-o" aria-hidden="true"></i></button>
                                    </div>
                                    <div class="form-group">
                                        <label><?php echo line('category');?></label>
                                        <select class="selectpicker form-control" name= "category_id">
                                                                            <option value=""><?php echo line('choose');?></option>
                                                                            <?php $category = get_category();?>
                                                                            <?php foreach($category as $cat):
                                                                            $lang_cat = unserialize($cat->category_name);
                                                                            ?>
                                                                                <option value="<?php echo $cat->category_id;?>"><?php echo $lang_cat[lang()];?></option>
                                                                            <?php endforeach;?>
                                                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label><?php echo line('max budget');?></label>
                                        <input name="price" class="form-control" value="" placeholder="" type="text">
                                    </div>
                                    <div class="text-center">
                                        <button class="btn-primary" type="button">Proceed</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>



            </div>

            <div class="col-sm-9 mainpage">

                <div class="row tour">
                    <?php foreach($rooms as $rm):
                    $lang = lang();
                    $name  =unserialize($rm->room_name);
                    $short_name = unserialize($rm->room_short);

                    ?>
                    <div class="product-layout product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="product-thumb" onclick="top.location.href='<?php echo getLink($rm->room_id);?>';">
                            <div class="image">
                                <a href="<?php echo getLink($rm->room_id);?>"><img src="<?=base_url();?>public/upload/tour/<?=$rm->room_image;?>" alt="<?php echo $name[$lang];?>" title="<?php echo $name[$lang];?>" class="img-responsive" /></a>
                                <div class="hoverbox">
                                    <div class="icon_plus" aria-hidden="true"></div>
                                </div>
                                <div class="matter">
                                    <p><?php echo $name[$lang];?>  <span><?=$rm->room_price;?> <?php echo line('bath');?></span></p>
                                </div>
                            </div>
                            <div class="caption">
                                <div class="inner">
                                    <h4><?php echo $name[$lang];?>  </h4>
                                    <div class="rate">
                                        <span>HOT DEALS</span>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="matter">
                                        <p><?php echo $name[$lang];?>    <span><?=$rm->room_price;?> <?php echo line('bath');?></span></p>
                                    </div>
                                    <p><?php echo $short_name[$lang];?></p>
                                </div>
                                <div class="text-left">
                                    <button type="button" onclick="top.location.href='<?php echo getLink($rm->room_id);?>'"><?php echo line('book now');?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                    <button type="button" onclick="top.location.href='<?php echo getLink($rm->room_id);?>';"><?php echo line('view more');?>  <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- main container end here -->