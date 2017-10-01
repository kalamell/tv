
<!-- breadcrumb start here -->
<div class="bread-crumb">
    <div class="container">
        <h2><?php echo line('about');?></h2>
        <ul class="list-inline">
            <li><a href="<?php echo site_url();?>"><?php echo line('home');?></a></li>
            <li><a href="<?php echo site_url('about');?>"><?php echo line('about');?></a></li>
        </ul>
    </div>
</div>
<!-- breadcrumb end here -->

<!-- bg start here -->
<div class="bg">
    <img src="images/about/bg.jpg" class="img-responsive" alt="bg" title="bg"  />
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="places">
                    <h1>we are the best travel agency</h1>
                    <hr>
                    <p><?php echo get_about();?></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bg end here-->