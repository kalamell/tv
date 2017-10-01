<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<base href="<?php echo base_url();?>assets/"/>
<?php echo get_seo();?>
<!-- Bootstrap stylesheet -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900%7CPT+Serif:400,400i,700,700i" rel="stylesheet">
<link href="css/ele-style.css" rel="stylesheet" type="text/css"/>
<!-- stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/responsive.css" rel="stylesheet" type="text/css"/>
<!-- font-awesome -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
<link href="js/datetimepicker/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    <?php if (lang()=='th'):?>
    #top-links .button li:first-child a:first-child:after, #top-links1 .button li:first-child a:first-child:after {
        margin-left: 37px;
    }
    <?php endif;?>
</style>
</head>
<?php
$class = $this->uri->segment(1)=='about'?'about':'';
?>
<body class="<?php echo $class;?>">
<!-- top start here -->
    <div id="top">
        <div class="container">
            <div id="top-links" class="nav">
                <ul class="list-inline pull-left">
                    <li>
                        <a href="<?php echo site_url();?>"><?php echo line('welcome to');?> <?php echo title();?></a>
                    </li>
                    <li>
                        <form method="post" enctype="multipart/form-data" id="form-language">
                            <div class="btn-group">
                                <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                    <?php if (lang() =='th'):?>
                                    ภาษา : <span class="name">
                                        <span class="hidden-xs">ไทย</span>
                                        <i class="fa fa-caret-down"></i></span>
                                    <?php else:?>
                                    Language : <span class="name">
                                    <span class="hidden-xs">English</span>
                                    <i class="fa fa-caret-down"></i></span>
                                    <?php endif;?>
                                </button>
                                <ul class="dropdown-menu">
                                    <?php if (lang() =='th'):?>
                                        <li><a href="<?php echo site_url('lang/en');?>">English</a></li>
                                        <li><a href="<?php echo site_url('lang/th');?>">ไทย</a></li>
                                    <?php else:?>
                                        <li><a href="<?php echo site_url('lang/th');?>">Thai</a></li>
                                        <li><a href="<?php echo site_url('lang/en');?>">English</a></li>
                                    <?php endif;?>
                                </ul>
                            </div>
                        </form>
                    </li>
                </ul>

                <ul class="list-inline pull-right button">
                    <li><a href="<?php echo site_url('login');?>"><?php echo line('login');?></a>
                        <a href="<?php echo site_url('register');?>"><?php echo line('register');?></a>
                    </li>
                    <li><a href="<?php echo site_url('about');?>"><?php echo line('about');?></a></li>
                    <li><a href="<?php echo site_url('contact');?>"><?php echo line('contact');?></a></li>
                </ul>
            </div>
        </div>
    </div>
<!-- top end here -->

<!-- header start here-->
    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4 col-xs-12">
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

                <div class="col-sm-4 col-md-4 col-xs-12">
                    <div id="logo">
                        <a href="<?php echo site_url();?>"><img class="img-responsive" src="<?php echo site_url('public/upload/'.get_logo());?>" alt="logo" title="logo" /></a>
                    </div>
                </div>

                <div class="col-sm-4 col-md-4 col-xs-12" style="display: none;">
                    <div class="button-login pull-right">
                        <button type="button" class="btn btn-default btn-lg" onclick="location.href='tour-booking-form.html'">Booking Now</button>
                        <button type="button" class="btn btn-primary btn-lg" onclick="location.href='tour-grid-view.html'">Take a tour <i class="fa fa-thumbs-o-up" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </header>
<!-- header end here -->

<?php $this->load->view('_menu');?>