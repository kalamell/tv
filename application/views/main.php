

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
				<?php echo form_open('main/do_search', array('class' => 'form-horizontal'));?>
					<div class="form-group">
						<div class="col-sm-2 wid">
							<h2><?php echo line('where');?></h2>
							<label><?php echo line('destination');?></label>
							<input name="s" class="form-control" value="" placeholder="" type="text">
						</div>

						<div class="col-sm-10 wid1">
							<h2><?php echo line('when');?></h2>
							<div class="col-sm-2 paddleft wid date">
								<label><?php echo line('from');?></label>
								<input name="from_date" class="form-control" value="" placeholder="dd/mm/yy" type="text">
								<button type="button" class="calender"><i class="fa fa-calendar-o" aria-hidden="true"></i></button>
							</div>
							<div class="col-sm-2 wid date padd-left">
								<label><?php echo line('to');?></label>
								<input name="to_date" class="form-control" value="" placeholder="dd/mm/yy" type="text">
								<button type="button" class="calender"><i class="fa fa-calendar-o" aria-hidden="true"></i></button>
							</div>
							<div class="col-sm-2 wid padd-left">
								<label><?php echo line('category');?></label>
								<select class="selectpicker form-control" name=	"category_id">
									<option value=""><?php echo line('choose');?></option>
									<?php $category = get_category();?>
									<?php foreach($category as $cat):
									$lang_cat = unserialize($cat->category_name);
									?>
										<option value="<?php echo $cat->category_id;?>"><?php echo $lang_cat[lang()];?></option>
									<?php endforeach;?>
								</select>
							</div>
							<div class="col-sm-3 wid2 padd-left">
								<label><?php echo line('max budget');?></label>
								<input name="price" class="form-control" value="" placeholder="" type="text">
							</div>
							<div class="col-sm-3 wid2 padd-left">
								<button class="btn-primary" type="submit"><?php echo line('search');?></button>
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
				<h1><?php echo line('MOST POPULAR PLACES');?></h1>
				<p><?php echo line('desc most pop');?></p>
				<hr>
				<ul class="nav nav-tabs list-inline">
					<li class="active">
						<a href="#all" data-toggle="tab" aria-expanded="true">all</a>
					</li>
					<?php foreach($countries as $c):?>
						<li class="">
							<a href="#<?php echo $c->alpha_3_code;?>" data-toggle="tab" aria-expanded="false"><?php echo $c->en_short_name;?></a>
						</li>
					<?php endforeach;?>
				</ul>
			</div>
			<div class="tab-content">
				<div class="tab-pane active" id="all">
					<?php foreach($rooms as $rm):
						$lang = lang();
						$name  =unserialize($rm->room_name);
						?>
							<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
								<div class="product-thumb" onclick="top.location.href='<?php echo getLink($rm->room_id);?>';">
									<div class="image">
										<a href="<?php echo getLink($rm->room_id);?>"><img src="<?=base_url();?>public/upload/tour/<?=$rm->room_image;?>" alt="<?php echo $name[$lang];?>" title="<?php echo $name[$lang];?>" class="img-responsive" /></a>
										<div class="hoverbox">
											<div class="icon_plus" aria-hidden="true"></div>
										</div>
										<div class="matter">
											<h2><?php echo $name[$lang];?></h2>
											<p><?php echo line('start from');?> <?=$rm->room_price;?> <?php echo line('bath');?></p>
											<ul class="list-inline">
												<li><a href="<?php echo getLink($rm->room_id);?>">hotels deals </a></li>
												<li><a href="<?php echo getLink($rm->room_id);?>"><?php echo line('book now');?> </a></li>
											</ul>
										</div>
									</div>

								</div>
							</div>
					<?php endforeach;?>
				</div>

				<?php foreach($countries as $c):?>
					<div class="tab-pane" id="<?php echo $c->alpha_3_code;?>">
						<?php foreach($rooms as $rm):?>
							<?php if ($rm->country_id == $c->num_code):
							$lang = lang();
							$name  =unserialize($rm->room_name);
							?>
								<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
									<div class="product-thumb" onclick="top.location.href='<?php echo getLink($rm->room_id);?>';">
										<div class="image">
											<a href="<?php echo getLink($rm->room_id);?>">
												<img src="<?=base_url();?>public/upload/tour/<?=$rm->room_image;?>" alt="<?php echo $name[$lang];?>" title="<?php echo $name[$lang];?>" class="img-responsive" /></a>
											<div class="hoverbox">
												<div class="icon_plus" aria-hidden="true"></div>
											</div>
											<div class="matter">
												<h2><?php echo $name[$lang];?></h2>
												<p><?php echo line('start from');?> <?=$rm->room_price;?> <?php echo line('bath');?></p>
												<ul class="list-inline">
													<li><a href="<?php echo getLink($rm->room_id);?>">hotels deals </a></li>
												</ul>
											</div>
										</div>
										<div class="caption" style="display: none;">
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
							<?php endif;?>
						<?php endforeach;?>
					</div>

				<?php endforeach;?>


			</div>
		</div>
	</div>
</div>
<!-- places end here -->



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
						$lang = $this->session->userdata('lang')?$this->session->userdata('lang'):'en';
						$txt = unserialize($cat->category_name);


						?>
						<li class="<?php echo $i==1?'active':'';?>">
							<a href="#<?php echo strtolower($txt['en']);?>" data-toggle="tab" aria-expanded="true"><?php echo $txt[$lang];?></a>
						</li>
					<?php $i++; endforeach;?>

				</ul>
			</div>
			<div class="tab-content tour">
				<?php $i = 1; foreach($category as $cat):
					$lang = $this->session->userdata('lang')?$this->session->userdata('lang'):'en';
					$txt = unserialize($cat->category_name);
				?>
					<div class="tab-pane <?php echo $i==1?'active':'';?>" id="<?php echo strtolower($txt['en']);?>">
					<?php foreach($rooms as $rm):?>
						<?php if ($rm->category_id == $cat->category_id):
						$lang = lang();
						$name  =unserialize($rm->room_name);
						$short = unserialize($rm->room_short);
						$room_short = $short[$lang];
						?>
						<div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
							<div class="product-thumb" onclick="top.location.href='<?php echo getLink($rm->room_id);?>';">
								<div class="image">
									<a href="<?php echo getLink($rm->room_id);?>">
										<img src="<?=base_url();?>public/upload/tour/<?=$rm->room_image;?>" alt="<?php echo $name[$lang];?>" title="<?php echo $name[$lang];?>" class="img-responsive" />
									</a>
									<div class="hoverbox">
										<div class="icon_plus" aria-hidden="true"></div>
									</div>
									<div class="matter">
										<p><?=$rm->room_price;?> <?php echo line('bath');?></p>
									</div>
								</div>
								<div class="caption">
									<div class="inner">
										<h4><?php echo $name[$lang];?></h4>
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
										<p><?php echo $room_short;?></p>
									</div>
									<div class="text-left">
										<button type="button" onclick="location.href='<?php echo site_url('tour/id/'.$rm->room_id);?>'"><?php echo line('book now');?> <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
										<button type="button" onclick="location.href='<?php echo site_url('tour/id/'.$rm->room_id);?>'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
									</div>
								</div>
							</div>
						</div>

						<?php endif;?>
					<?php $i++; endforeach;?>

					</div>
				<?php endforeach;?>

<!--
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
									<button type="button" onclick="location.href='<?php echo site_url('tour/id/'.$rm->room_id);?>'">Book Now <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
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
-->
				<div class='col-md-12'>
					<div class="text-center">
						<button class="btn-primary" type="button" onclick="location.href='tour-grid-view.html'">View More <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
					</div>
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
<div class="placetop" style="display: none;">
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


