<?php
$name = unserialize($r->room_name);
$cat_name = unserialize($r->category_name);
$description = unserialize($r->room_description);
?>
<div class="bread-crumb">

    <div class="container">
        <h2><?php echo $name[lang()];?></h2>
        <ul class="list-inline">
            <li><a href="<?php echo site_url();?>"><?php echo line('home');?></a></li>
            <li><a href="<?php echo site_url('category/id/'.$r->category_id);?>"><?php echo $cat_name[lang()];?></a></li>
            <li><a href="<?php echo site_url('tour/id/'.$r->room_id);?>"><?php echo $name[lang()];?></a></li>
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
                    <h6><?php echo line('expert');?></h6>
                    <div class="talk">
                        <ul class="list-unstyled">

                            <li>
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <h4><?php echo line('phone');?></h4>
                                <P><?php echo get_mobile();?></P>
                            </li>
                            <li>
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <h4>EMAIL</h4>
                                <P><?php echo get_email();?></P>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="col-sm-9 mainpage">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="thumb">
                            <?php foreach($gallery as $g):?>
                            <img src="<?=base_url();?>public/upload/tour/<?php echo $g->gallery_path;?>" alt="image1" title="image1" class="img-responsive"/>
                            <?php break;
                            endforeach;?>

                            <div id="additional" class="owl-carousel">
                                <?php foreach($gallery as $g):?>
                                <div class="item">
                                    <div class="product-thumb">
                                        <div class="image">
                                            <img src="<?php echo base_url('public/upload/tour/'.$g->gallery_path);?>" class="img-responsive" style='height: 75px;' alt="" title="" />
                                            <div class="hoverbox"></div>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach;?>


                            </div>
                        </div>
                    </div>


                </div>

                <div class="book-now col-sm-12">
                    <h1><?php echo line('book now');?> <span><?php echo $r->room_price;?> <?php echo line('bath');?></span></h1>
                    <p><?php echo $description[lang()];?></p>

                    <hr>
                    <form class="form-horizontal" method="post">

                        <div class="col-sm-3 mar-t padd-left">
                            <a href="<?php echo $r->link;?>" class="btn-primary"><?php echo line('book now');?></a>
                        </div>
                    </form>
                </div>

                <div class="clearfix"></div>

                <div class="row tour">
                    <div class="places related">
                        <h1><?php echo line('related tours');?></h1>
                        <hr>
                    </div>
                    <div class="owl-carousel" id="related-pro">
                        <?php foreach($rooms as $rm):
                        $lang = lang();
                        $name  =unserialize($rm->room_name);
                        $room_short = unserialize($rm->room_short);

                        ?>
                        <div class="item">
                            <div class="col-xs-12">
                                <div class="product-thumb" onclick="top.location.href='<?php echo getLink($rm->room_id);?>';" >
                                    <div class="image">
                                        <a href="<?php echo getLink($rm->room_id);?>">
                                            <img src="<?=base_url();?>public/upload/tour/<?=$rm->room_image;?>" alt="t1" title="t1" class="img-responsive" /></a>
                                        <div class="hoverbox">
                                            <div class="icon_plus" aria-hidden="true"></div>
                                        </div>
                                        <div class="matter">
                                            <p><?php echo $name[$lang];?> <span><?=$rm->room_price;?> <?php echo line('bath');?></span></p>
                                        </div>
                                    </div>
                                    <div class="caption">
                                        <div class="inner">
                                            <h4><?php echo $name[lang()];?></h4>
                                            <div class="rate">
                                                <span>HOT DEALS</span>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-half-o" aria-hidden="true"></i>
                                            </div>
                                            <p><?php echo $room_short[lang()];?></p>
                                        </div>
                                        <div class="text-left">
                                            <button type="button" onclick="top.location.href='<?php echo getLink($rm->room_id);?>';"><?php echo line('book now');?>  <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                            <button type="button" onclick="top.location.href='<?php echo getLink($rm->room_id);?>';"><?php echo line('view more');?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                        </div>
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
</div>
