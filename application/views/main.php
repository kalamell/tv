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
<body>
<!-- top start here -->
	<div id="top">
		<div class="container">
			<div id="top-links" class="nav">
				<ul class="list-inline pull-left">
					<li>
						<a href="#"><?php echo line('welcome to');?> <?php echo title();?></a>
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
					<li style="display: none">
						<form method="post" enctype="multipart/form-data" id="form-currency">
							<div class="btn-group">
								<button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                      Currency : <span class="name"><span class="hidden-xs"> (USD)</span> <i class="fa fa-caret-down"></i></span>
								</button>
								<ul class="dropdown-menu">
									<li><button class="currency-select btn btn-link btn-block" type="button" name="EUR">&#8364; Euro</button></li>
									<li><button class="currency-select btn btn-link btn-block" type="button" name="GBP">&#163; Pound Sterling</button></li>
									<li><button class="currency-select btn btn-link btn-block" type="button" name="USD">$ US Dollar</button></li>
								</ul>
							</div>
						</form>
					</li>
				</ul>
				
				<ul class="list-inline pull-right button">
					<li><a href="login.html"><?php echo line('login');?></a>
						<a href="register.html"><?php echo line('register');?></a>
					</li>
					<li><a href="about.html"><?php echo line('about');?></a></li>
					<li><a href="contact.html"><?php echo line('contact');?></a></li>	
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
						<a href=""><img class="img-responsive" src="<?php echo site_url('public/upload/'.get_logo());?>" alt="logo" title="logo" /></a>
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

<!-- menu start here -->
	<div id="menu">	
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-xs-12">
					<nav class="navbar">
						<div class="navbar-header">
							<span class="menutext visible-xs">Menu</span>
							<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
						</div>
						<div class="collapse navbar-collapse navbar-ex1-collapse padd0">
							<ul class="nav navbar-nav">
								<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME</a>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li><a href=""><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 1</a></li>
												<li><a href="header2.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 2</a></li>
												<li><a href="header3.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 3</a></li>
												<li><a href="header4.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Homepage 4</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">TOUR</a>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li><a href="tour-grid-view.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Tour</a></li>
												<li><a href="tour-detail-view.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Tour Detail</a></li>
												<li><a href="tour-booking-form.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Tour Booking Form</a></li>
												<li><a href="thank-you.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Thank You</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li><a href="guides.html">GUIDES</a></li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">BLOG</a>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li><a href="blog.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog</a></li>
												<li><a href="blog-detail.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Blog Detail</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">PAGES</a>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li><a href="gallery.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Gallery</a></li>
												<li><a href="error-404.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Error-404</a></li>
												<li><a href="faq.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Faq</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">USER</a>
									<div class="dropdown-menu">
										<div class="dropdown-inner">
											<ul class="list-unstyled">
												<li><a href="login.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Login</a></li>
												<li><a href="register.html"><i class="fa fa-angle-right" aria-hidden="true"></i>Register</a></li>
											</ul>
										</div>
									</div>
								</li>
								<li><a href="about.html">ABOUT</a></li>
								<li><a href="contact.html">CONTACT</a></li>
							</ul>
						</div>
					</nav>
				</div>
			</div>
		</div>
	</div>
<!-- menu end here -->

<!-- slider start here -->
	<div class="slice"> 
		<div class="slideshow owl-carousel">
			<?php foreach($banner as $b):?>
			<div class="item">
				<img src="<?php echo base_url('public/upload/banner/'.$b->banner_image);?>" alt="slider" title="slider" class="img-responsive"/>
            </div>
        	<?php endforeach;?>
            
			
		</div>


		<!-- slide-detail start here -->
		<div class="slide-detail">
			<div class="container">
				<form class="form-horizontal" method="post">
					<div class="form-group">
						<div class="col-sm-2 wid">
							<h2>Where</h2>
							<label>Destination</label>
							<input name="s" class="form-control" value="" placeholder="Enter a destination or tour type.." type="text">
						</div>
								
						<div class="col-sm-10 wid1">
							<h2>When</h2>
							<div class="col-sm-2 paddleft wid date">
								<label>From</label>
								<input name="s" class="form-control" value="" placeholder="dd/mm/yy" type="text">
								<button type="button" class="calender"><i class="fa fa-calendar-o" aria-hidden="true"></i></button>
							</div>
							<div class="col-sm-2 wid date padd-left">
								<label>To</label>
								<input name="s" class="form-control" value="" placeholder="dd/mm/yy" type="text">
								<button type="button" class="calender"><i class="fa fa-calendar-o" aria-hidden="true"></i></button>
							</div>
							<div class="col-sm-2 wid padd-left">
								<label>Trip Type</label>
								<select class="selectpicker form-control" name=	"location">
									<option value="1">Trip Type</option>
									<option value="0">Location 1</option>
									<option value="0">Location 2</option>
									<option value="0">Location 3</option>
								</select>
							</div>
							<div class="col-sm-3 wid2 padd-left">
								<label>Max Budget</label>
								<input name="s" class="form-control" value="" placeholder="Max budget ($)" type="text">
							</div>
							<div class="col-sm-3 wid2 padd-left">
								<button class="btn-primary" type="button">Search Tours</button>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>	
		<!-- slide-detail end here -->
	</div>
<!-- slider end here -->

<!-- places start here -->
<div class="placetop">
	<div class="container">
		<div class="row">
			<div class="places">
				<h1>MOst popular places</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a suscipit quam, ut vestibulum lorem.</p>
				<hr>
				<ul class="nav nav-tabs list-inline">
					<li class="active">
						<a href="#all" data-toggle="tab" aria-expanded="true">all</a>
					</li>
					<li class="">
						<a href="#usa" data-toggle="tab" aria-expanded="false">usa</a>
					</li>
					<li class="">
						<a href="#canada" data-toggle="tab" aria-expanded="false">canada</a>
					</li>
					<li class="">
						<a href="#europe" data-toggle="tab" aria-expanded="false">europe</a>
					</li>
					<li class="">
						<a href="#india" data-toggle="tab" aria-expanded="false">india</a>
					</li>
					<li class="">
						<a href="#china" data-toggle="tab" aria-expanded="false">china</a>
					</li>
					<li class="">
						<a href="#singapore" data-toggle="tab" aria-expanded="false">singapore</a>
					</li>
					<li class="">
						<a href="#two" data-toggle="tab" aria-expanded="false">usa & canada</a>
					</li>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane active" id="all">
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>New York city</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Central Park</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Metropolitan Museum of Art</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>las vegas</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Las Vegas Strip</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>The Mirage</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>Los angelas</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Universal Studios Hollywood</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Griffith Park</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>san francisco</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Golden Gate Bridge</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner"> 
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Alcatraz Island</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>boston</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Freedom Trail</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Faneuil Hall Marketplace</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>washington, d.c.</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Lincoln Memorial</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>National Museum of Natural..</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane" id="usa">
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>New York city</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Central Park</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Metropolitan Museum of Art</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>las vegas</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Las Vegas Strip</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>The Mirage</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
							
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>washington, d.c.</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Lincoln Memorial</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>National Museum of Natural..</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane" id="canada">
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>san francisco</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Golden Gate Bridge</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner"> 
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Alcatraz Island</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>boston</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Freedom Trail</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Faneuil Hall Marketplace</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>washington, d.c.</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Lincoln Memorial</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>National Museum of Natural..</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane" id="europe">
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>New York city</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Central Park</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Metropolitan Museum of Art</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>las vegas</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Las Vegas Strip</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>The Mirage</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>Los angelas</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Universal Studios Hollywood</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Griffith Park</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane" id="india">
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>Los angelas</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Universal Studios Hollywood</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Griffith Park</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>boston</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Freedom Trail</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Faneuil Hall Marketplace</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>washington, d.c.</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Lincoln Memorial</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>National Museum of Natural..</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane" id="china">
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>New York city</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Central Park</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Metropolitan Museum of Art</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>las vegas</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Las Vegas Strip</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>The Mirage</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>Los angelas</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Universal Studios Hollywood</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Griffith Park</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>san francisco</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Golden Gate Bridge</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner"> 
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Alcatraz Island</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>boston</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Freedom Trail</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Faneuil Hall Marketplace</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>washington, d.c.</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Lincoln Memorial</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>National Museum of Natural..</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane" id="singapore">
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>san francisco</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Golden Gate Bridge</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner"> 
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Alcatraz Island</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>boston</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Freedom Trail</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Faneuil Hall Marketplace</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>washington, d.c.</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Lincoln Memorial</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>National Museum of Natural..</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane" id="two">
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>New York city</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Central Park</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Metropolitan Museum of Art</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>las vegas</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Las Vegas Strip</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>The Mirage</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/p1.jpg" alt="p1" title="p1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<h2>Los angelas</h2>
									<p>start from $375.00</p>
									<ul class="list-inline">
										<li><a href="#">top rates</a></li>
										<li><a href="#">hotels deals </a></li>
									</ul>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Universal Studios Hollywood</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="inner">
									<img src="images/icon-map.png" class="img-responsive" title="map" alt="map" />
									<h4>Griffith Park</h4>
									<div class="rate">
										<span>1270 Reviews</span>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<div class="text-center">
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="text-center">
					<button class="btn-primary" type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>	
<!-- places end here -->


<!-- video start here -->
<div class="video">
	<img src="images/video-bg.jpg" class="img-responsive" alt="video-bg" title="video-bg" />
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="matter text-center">
					<i class="fa fa-play" aria-hidden="true"></i>
					<h5>Awesome Experiences for</h5>
					<h6>Tourism & Traveling.</h6>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- video end here -->


<!-- categories start here -->
<div class="placetop">
	<div class="container">
		<div class="row">
			<div class="places">
				<h1><?php echo line('book now by categories');?></h1>
				<p><?php echo line('choose book now by categories');?></p>
				<hr>
				<ul class="nav nav-tabs list-inline">
					<?php $i = 1; foreach($category as $cat):
						$lang = $this->session->userdata('lang');
						$txt = unserialize($cat->category_name);

						?>
						<li class="<?php echo $i==1?'active':'';?>">
							<a href="#<?php echo strtolower($txt['en']);?>" data-toggle="tab" aria-expanded="true"><?php echo $txt[$lang];?></a>
						</li>
					<?php $i++; endforeach;?>
					
				</ul>
			</div>
			<div class="tab-content tour">
				<div class="tab-pane active" id="hotels">
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>grand switerland  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>Grand Switerland</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>discover japan  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>Discover Japan</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>Niko Trip  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>Niko Trip</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>Singapore Trip  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>Singapore Trip</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>The New California  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>The New California</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>greece, santormi  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>Astro Place Hotels</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane" id="tours">
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>Singapore Trip  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>Singapore Trip</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>The New California  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>The New California</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>greece, santormi  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>Astro Place Hotels</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane" id="packages">
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>grand switerland  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>Grand Switerland</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>discover japan  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>Discover Japan</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>Niko Trip  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>Niko Trip</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="tab-pane" id="flights">
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>Singapore Trip  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>Singapore Trip</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>The New California  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>The New California</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
						<div class="product-thumb">
							<div class="image">
								<a href="#"><img src="images/t1.jpg" alt="t1" title="t1" class="img-responsive" /></a>
								<div class="hoverbox">
									<div class="icon_plus" aria-hidden="true"></div>
								</div>
								<div class="matter">
									<p>greece, santormi  <span>$575.00</span></p>
								</div>
							</div>
							<div class="caption">
								<div class="inner">
									<h4>Astro Place Hotels</h4>
									<div class="rate">
										<div class="pull-left">
											<span>HOT DEALS</span>
										</div>
										<div class="pull-right">
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star" aria-hidden="true"></i>
											<i class="fa fa-star-half-o" aria-hidden="true"></i>
										</div>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
								</div>
								<div class="text-left">
									<button type="button" onclick="location.href='tour-booking-form.html'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									<button type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
								</div>	
							</div>
						</div>
					</div>
				</div>
				
				<div class="text-center">
					<button class="btn-primary" type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
				</div>
			</div>
		</div>
	</div>
</div>	
<!-- categories end here -->


<!-- testimonail start here -->
<div class="testimonail">
	<div class="container">
		<div class="row">
			<div class="places">
				<h1>what travelers are saying</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a suscipit quam, ut vestibulum lorem.</p>
				<hr>
			</div>
			<div class="testimonails owl-carousel">
				<div class="item">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="box">
							<img src="images/pic1.png" alt="pic1" title="pic1" class="img-responsive" />
							<div class="caption">
								<h4>John William</h4>
								<div class="rate">
									<div class="pull-right">
										<span>FROM CANADA</span>
									</div>
									<div class="pull-left">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut cursus suscipit malesuada. Cras nec hendrerit lacus. Curabitur nec elementum justo. Sed vitae dapibus augue."</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="item">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="box">
							<img src="images/pic1.png" alt="pic1" title="pic1" class="img-responsive" />
							<div class="caption">
								<h4>John William</h4>
								<div class="rate">
									<div class="pull-right">
										<span>FROM CANADA</span>
									</div>
									<div class="pull-left">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut cursus suscipit malesuada. Cras nec hendrerit lacus. Curabitur nec elementum justo. Sed vitae dapibus augue."</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="item">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="box">
							<img src="images/pic1.png" alt="pic1" title="pic1" class="img-responsive" />
							<div class="caption">
								<h4>John William</h4>
								<div class="rate">
									<div class="pull-right">
										<span>FROM CANADA</span>
									</div>
									<div class="pull-left">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut cursus suscipit malesuada. Cras nec hendrerit lacus. Curabitur nec elementum justo. Sed vitae dapibus augue."</p>
							</div>
						</div>
					</div>
				</div>
				
				<div class="item">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="box">
							<img src="images/pic1.png" alt="pic1" title="pic1" class="img-responsive" />
							<div class="caption">
								<h4>John William</h4>
								<div class="rate">
									<div class="pull-right">
										<span>FROM CANADA</span>
									</div>
									<div class="pull-left">
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star" aria-hidden="true"></i>
										<i class="fa fa-star-half-o" aria-hidden="true"></i>
									</div>
								</div>
								<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut cursus suscipit malesuada. Cras nec hendrerit lacus. Curabitur nec elementum justo. Sed vitae dapibus augue."</p>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>	
<!-- testimonail end here -->

<!-- gallery start here -->
<div class="placetop">
	<div class="container">
		<div class="row">
			<div class="places">
				<h1>our gallery </h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a suscipit quam, ut vestibulum lorem.</p>
				<hr>
				<ul class="nav nav-tabs list-inline">
					<li class="active">
						<a href="#alls" data-toggle="tab" aria-expanded="true">All</a>
					</li>
					<li class="">
						<a href="#world" data-toggle="tab" aria-expanded="false">World tour</a>
					</li>
					<li class="">
						<a href="#ocean" data-toggle="tab" aria-expanded="false">ocean tour</a>
					</li>
					<li class="">
						<a href="#summer" data-toggle="tab" aria-expanded="false">summer tour</a>
					</li>
					<li class="">
						<a href="#sport" data-toggle="tab" aria-expanded="false">sport tour</a>
					</li>
				</ul>
			</div>
		</div>
	</div>	
	<div class="tab-content gallery">
		<div class="tab-pane active" id="alls">
			<ul class="list-inline">
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
			</ul>	
		</div>
				
		<div class="tab-pane" id="world">
			<ul class="list-inline">
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
			</ul>	
		</div>
		
		<div class="tab-pane" id="ocean">
			<ul class="list-inline">
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
			</ul>	
		</div>
				
		<div class="tab-pane" id="summer">
			<ul class="list-inline">
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
			</ul>	
		</div>
				
		<div class="tab-pane" id="sport">
			<ul class="list-inline">
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="product-thumb">
						<div class="image">
							<a href="#"><img src="images/g1.jpg" alt="g1" title="g1" class="img-responsive" /></a>
							<div class="hoverbox">
								<div class="show">
									<p>World Tour</p>
									<a href="gallery.html">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
								</div>	
							</div>
						</div>
					</div>
				</li>
			</ul>	
		</div>
		
		<div class="text-center">
			<button class="btn-primary" type="button" onclick="location.href='gallery.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
		</div>
	</div>
</div>	
<!-- gallery end here -->


<!-- blog start here -->
<div class="blog">
	<div class="container">
		<div class="row">
			<div class="places">
				<h1>our blog</h1>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas a suscipit quam, ut vestibulum lorem.</p>
				<hr>
			</div>
			<div class="col-sm-4 col-xs-12">
				<div class="product-thumb">
					<div class="image">
						<a href="#"><img src="images/blog1.jpg" alt="blog1" title="blog1" class="img-responsive" /></a>
						<div class="hoverbox">
							<div class="icon_plus" aria-hidden="true"></div>
						</div>
						<div class="matter">
							<ul class="list-inline">
								<li><a href="#">26 Dec 2016</a></li>
								<li><a href="#">by john doe </a></li>
							</ul>
						</div>
					</div>
					<div class="caption">
						<div class="inner">
							<h4>Awesome Blog Post Title</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
						</div>	
						<div class="text-center">
							<button type="button" onclick="location.href='blog.html'">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
						</div>	
					</div>
				</div>
			</div>
			
			<div class="col-sm-4 col-xs-12">
				<div class="product-thumb">
					<div class="image">
						<a href="#"><img src="images/blog1.jpg" alt="blog1" title="blog1" class="img-responsive" /></a>
						<div class="hoverbox">
							<div class="icon_plus" aria-hidden="true"></div>
						</div>
						<div class="matter">
							<ul class="list-inline">
								<li><a href="#">26 Dec 2016</a></li>
								<li><a href="#">by john doe </a></li>
							</ul>
						</div>
					</div>
					<div class="caption">
						<div class="inner">
							<h4>Awesome Blog Post Title</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
						</div>	
						<div class="text-center">
							<button type="button" onclick="location.href='blog.html'">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
						</div>	
					</div>
				</div>
			</div>
			
			<div class="col-sm-4 col-xs-12">
				<div class="product-thumb">
					<div class="image">
						<a href="#"><img src="images/blog1.jpg" alt="blog1" title="blog1" class="img-responsive" /></a>
						<div class="hoverbox">
							<div class="icon_plus" aria-hidden="true"></div>
						</div>
						<div class="matter">
							<ul class="list-inline">
								<li><a href="#">26 Dec 2016</a></li>
								<li><a href="#">by john doe </a></li>
							</ul>
						</div>
					</div>
					<div class="caption">
						<div class="inner">
							<h4>Awesome Blog Post Title</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum, dolor sit amet luctus phare-tra, turpis lacus rhoncus ipsum...</p>
						</div>	
						<div class="text-center">
							<button type="button" onclick="location.href='blog.html'">Read More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
						</div>	
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>	
<!-- blog end here -->

<!-- news start here -->
<div class="news">
	<img src="images/subscribe-bg.jpg" class="img-responsive sub" alt="subscribe-bg" title="subscribe-bg" />
	<div class="newsinner">
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-xs-12">
				<div class="product-thumb">
					<div class="image">
						<a href="#"><img src="images/foot-banner1.png" alt="foot-banner1" title="foot-banner1" class="img-responsive" /></a>
						<div class="hoverbox"></div>
						<div class="matter">
							<p class="des"><span class="icon_building_alt"></span> Hotel</p>
							<button type="button"> Booking Now</button>
						</div>
					</div>
				</div>
			</div>
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
			</div>


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

<!-- jquery -->
<script src="js/jquery.2.1.1.min.js" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--bootstrap select-->
<script src="js/dist/js/bootstrap-select.js" type="text/javascript"></script>
<!-- owlcarousel js -->
<script src="js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<!--internal js-->
<script src="js/internal.js" type="text/javascript"></script>
<!--date js-->
<script src="js/datetimepicker/moment.js" type="text/javascript"></script>
<script src="js/datetimepicker/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
</body>
</html>