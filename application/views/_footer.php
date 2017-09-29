
<!-- news start here -->
<div class="news">
    <img src="<?php echo base_url();?>assets/images/subscribe-bg.jpg" class="img-responsive sub" alt="subscribe-bg" title="subscribe-bg" />
    <div class="newsinner">
    <div class="container">
        <div class="row">
            <?php
            $bannerContent  = getPromotionBanner();

            if (count($bannerContent)>0):?>
            <?php foreach($bannerContent as $bc):
            $lang = lang();
            $bcname = unserialize($bc->room_name);
            ?>
            <div class="col-sm-4 col-xs-12">
                <div class="product-thumb">
                    <div class="image">
                        <a href="<?php echo site_url('tour/id/'.$bc->room_id);?>">

                            <img src="<?=base_url();?>public/upload/content/<?=$bc->content_path;?>" class="img-responsive"/>
                        </a>
                        <div class="hoverbox"></div>
                        <?php if ($bc->recommend==1):?>
                            <div class="off">
                                <span><?php echo line('Best Packages');?></span>
                            </div>
                        <?php endif;?>
                        <div class="matter">
                            <p class="des"><span class="icon_building_alt"></span> <?php echo $bcname[$lang];?></p>
                            <button type="button" onclick="top.location.href='<?php echo site_url('tour/id/'.$bc->room_id);?>'"> Booking Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach;
            endif;?>
            <!--
            <div class="col-sm-4 col-xs-12">
                <div class="product-thumb">
                    <div class="image">
                        <a href="#"><img src="images/foot-banner1.png" alt="foot-banner1" title="foot-banner1" class="img-responsive" /></a>
                        <div class="hoverbox"></div>
                        <div class="off">
                            <span>Best Packages</span>
                        </div>
                        <div class="matter">
                            <p class="des1">$1000 <span>Package</span> to <small>Dubai</small></p>
                            <button type="button"> Booking Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12">
                <div class="product-thumb">
                    <div class="image">
                        <a href="#"><img src="images/foot-banner1.png" alt="foot-banner1" title="foot-banner3" class="img-responsive" /></a>
                        <div class="hoverbox"></div>
                        <div class="matter">
                            <p class="des2"><i class="icon_percent_alt"></i> 25% off<br> to <span>Island</span></p>
                            <button type="button"> Booking Now</button>
                        </div>
                    </div>
                </div>
            </div>-->


            <div class="col-sm-12">
                <form class="subscribe">
                    <div class="form-group">
                        <div class="input-group">
                            <label><?php echo line('subscribe');?></label>
                            <input placeholder="" name="subscribe_email" value="" type="text">
                            <button class="btn btn-default btn-lg" type="submit"><?php echo line('Subscribe Now');?></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- news end here -->
<!-- footer start here -->
<footer>
    <div class="container">
        <div class="row padd-b">
            <div class="col-sm-3">

                <img class="img-responsive" src="<?php echo site_url('public/upload/'.get_logo());?>" alt="logo" title="logo" />
                <p class="des"><?php echo get_slogan();?></p>
            </div>
            <div class="col-sm-offset-6 col-sm-3 contact">
                <h3>Contact us</h3>
                <ul class="list-inline">
                    <li>
                        <div class="inner"><i class="fa fa-home" aria-hidden="true"></i> <?php echo line('address');?></div>
                        <div class="in"><a href="#"> : <?php echo get_address();?></a></div>
                    </li>
                    <li>
                        <div class="inner"><i class="fa fa-phone" aria-hidden="true"></i><?php echo line('Phone no');?></div>
                        <div class="in"><a href="tel:<?php echo get_mobile();?>"> : <?php echo get_mobile();?></a></div>
                    </li>
                    <li>
                        <div class="inner"><i class="fa fa-envelope" aria-hidden="true"></i>Email</div>
                        <div class="in"><a href="mailto:<?php echo get_email();?>"> : <?php echo get_email();?></a></div>
                        <br>
                        <div class="inner paddleft">website</div>
                        <div class="in"><a href="<?php echo site_url();?>">  : <?php echo site_url();?></a></div>
                    </li>
                </ul>
            </div>
            <!--<div class="col-sm-3 info">
                <h3>Information</h3>
                <ul class="list-inline">
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Home</a></li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>My Account</a></li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>About</a></li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Packages</a></li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Gallery</a></li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Best Offers</a></li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Hotels</a></li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Best Places</a></li>
                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog</a></li>
                </ul>
            </div>
        -->
            <!--<div class="col-sm-3 insta">
                <h3>Instagram</h3>
                <ul class="list-inline">
                    <li><img src="images/ins1.jpg" class="img-responsive" title="ins1" alt="ins1" /></li>
                    <li><img src="images/ins1.jpg" class="img-responsive" title="ins1" alt="ins1" /></li>
                    <li><img src="images/ins1.jpg" class="img-responsive" title="ins1" alt="ins1" /></li>
                    <li><img src="images/ins1.jpg" class="img-responsive" title="ins1" alt="ins1" /></li>
                    <li><img src="images/ins1.jpg" class="img-responsive" title="ins1" alt="ins1" /></li>
                    <li><img src="images/ins1.jpg" class="img-responsive" title="ins1" alt="ins1" /></li>
                    <li><img src="images/ins1.jpg" class="img-responsive" title="ins1" alt="ins1" /></li>
                    <li><img src="images/ins1.jpg" class="img-responsive" title="ins1" alt="ins1" /></li>
                </ul>
            </div>-->
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="powered">
                    <div class="col-sm-6 padd0">
                        <p><?php echo get_footer();?></p>
                    </div>
                    <div class="col-sm-6 padd0 text-right">
                        <div class="social-icon">
                            <ul class="list-inline">
                                <?php if (get_facebook()):?>
                                <li>
                                    <a href="<?php echo get_facebook();?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                </li>
                                <?php endif;?>

                                <?php if (get_twitter()):?>
                                <li>
                                    <a href="<?php echo get_twitter();?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </li>
                                <?php endif;?>

                                <?php if (get_google()):?>
                                <li>
                                    <a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                </li>
                                <?php endif;?>

                                <?php if (get_ig()):?>
                                <li>
                                    <a href="<?php echo get_ig();?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                </li>
                            <?php endif;?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer end here -->
