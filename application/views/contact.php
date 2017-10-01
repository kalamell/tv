<div class="contacts">

    <div class="container">
        <div class="row">
            <div class="placetop col-sm-12">
                <div class="row">
                    <div class="places">
                        <h1><?php echo line('contact');?></h1>
                        <hr>
                        <p></p>
                    </div>

                    <div class="clearfix"></div>

                    <?php if ($this->session->flashdata('save')):?>
                        <div class="alert alert-success">
                          <strong>Success!</strong> Save complete
                        </div>

                    <?php endif;?>

                    <?php echo form_open('contact/do_save');?>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <i class="fa fa-user"></i><input type="text" name="name" value="" placeholder="<?php echo line('name');?>" id="name" class="form-control" required="" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <i class="fa fa-envelope"></i><input type="text" name="email" value="" placeholder="email" id="email" class="form-control" required="" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <i class="fa fa-mobile"></i><input type="text" name="mobile" value="" placeholder="<?php echo line('mobile');?>" id="mobile" class="form-control" required="" />
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <i class="fa fa-pencil"></i><input type="text" name="subject" value="" placeholder="<?php echo line('subject');?>" id="subject" class="form-control" required="" />
                            </div>
                        </div>

                        <div class="col-sm-12">
                            <div class="form-group">
                                <i class="fa fa-pencil-square-o"></i><textarea class="form-control" id="message" name="message" placeholder="<?php echo line('message');?>" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <button type="submit" value="" class="btn btn-primary btn-block"><i class="fa fa-paper-plane" aria-hidden="true"></i><?php echo line('send message');?></button>
                            </div>
                        </div>
                    </form>

                    <div class="clearfix"></div>

                    <div class="col-sm-4 matter">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <div class="caption">
                            <h3><?php echo line('address');?></h3>
                            <p><?php echo get_address();?></p>
                        </div>
                    </div>
                    <div class="col-sm-4 matter">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="caption">
                            <h3><?php echo line('mobile');?></h3>
                            <p><?php echo get_mobile();?><br>&nbsp;</p>
                        </div>
                    </div>
                    <div  class="col-sm-4 matter">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <div class="caption">
                            <h3>email</h3>
                            <p><?php echo get_email();?><br>&nbsp;</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>