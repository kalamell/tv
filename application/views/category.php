
<!-- breadcrumb start here -->
<div class="bread-crumb">
    <div class="container">
        <h2><?php echo line('category');?></h2>
        <ul class="list-inline">
            <li><a href="<?php echo site_url();?>"><?php echo line('home');?></a></li>
            <li><a href="<?php echo site_url('category');?>"><?php echo line('category');?></a></li>
        </ul>
    </div>
</div>
<!-- breadcrumb end here -->

<!-- main container start here -->
<div class="placetop">
    <div class="container">
        <div class="row">
            <div class="col-sm-3">

                <div class="left-box">
                    <h6><?php echo line('category');?></h6>
                        <div class="list-group">
                        <?php foreach($categories as $cat):
                        $cat_name = unserialize($cat->category_name);
                        ?>
                            <a href="<?php echo site_url('category/'.$cat->category_id);?>" class="list-group-item <?php echo $this->uri->segment(2)==$cat->category_id?' active':'';?>">
                                <?php echo $cat_name[lang()];?>
                            </a>
                        <?php endforeach;?>


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