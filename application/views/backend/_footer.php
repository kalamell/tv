
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2016</strong>
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Create the tabs -->
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
          <!-- Home tab content -->
          <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Recent Activity</h3>
            <ul class='control-sidebar-menu'>
              <li>
                <a href='javascript::;'>
                  <i class="menu-icon fa fa-birthday-cake bg-red"></i>
                  <div class="menu-info">
                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>
                    <p>Will be 23 on April 24th</p>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

            <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class='control-sidebar-menu'>
              <li>
                <a href='javascript::;'>
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul><!-- /.control-sidebar-menu -->

          </div><!-- /.tab-pane -->
          <!-- Stats tab content -->
          <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div><!-- /.tab-pane -->
          <!-- Settings tab content -->
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked />
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div><!-- /.form-group -->
            </form>
          </div><!-- /.tab-pane -->
        </div>
      </aside><!-- /.control-sidebar -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class='control-sidebar-bg'></div>
    </div><!-- ./wrapper -->



    <!-- Default bootstrap modal example -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">รายละเอียด</h4>
          </div>
          <div class="modal-body">

          </div>

        </div>
      </div>
    </div>


    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>


    <!-- fullCalendar 2.2.5 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js" type="text/javascript"></script>
    <script src="plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>


    <script src="<?php echo base_url()?>assets/js/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url()?>assets/js/ckeditor/adapters/jquery.js"></script>
    <script>
    $(function() {


      $('#calendar').fullCalendar({
        header: {
          left: 'prev,next today',
          center: 'title',
          right: 'month,agendaWeek,agendaDay'
        },
        buttonText: {
          today: 'วันนี้',
          month: 'เดือน',
          week: 'สัปดาห์',
          day: 'วัน'
        },
        events: '<?=site_url('backend/calendar/feed');?>',
        eventClick: function(calEvent, jsEvent, view) {
          top.location.href = '<?=site_url('backend/booking/event');?>/' + calEvent.id;
        }
      });

      $('.fancybox').fancybox();

      $("input[name=model_cat]").on('click', function() {

        var value = $(this).val();

        if (value=='wear') {
          $(".clothing").show();
        } else {
          $(".clothing").hide();
        }

      });

            // Fill modal with content from link href
      $("#myModal").on("show.bs.modal", function(e) {
          var link = $(e.relatedTarget);
          $(this).find(".modal-body").load(link.attr("href"));
      });

      $(".addpic").on('click' ,function() {
        var html = '<div class="form-group col-md-12"> <label for="userfile">ภาพสินค้า </label><input type="file" name="userfile[]" class="form-control"  placeholder="" ></div>';
        $("#img").append(html);
      });

      $("input[name=product_type]").on('click', function() {
        var value = $(this).val();
        if (value=='glass') {
          $('.use-glass').show();
          $('.use-wear').hide();
        }

        if (value=='wear') {
          $('.use-glass').hide();
          $('.use-wear').show();
        }
      })
    });


    $(".detail").ckeditor({
      height:"400px",
      filebrowserBrowseUrl: '<?php echo base_url();?>assets/js/ckfinder/ckfinder.html',
      filebrowserImageBrowseUrl: '<?php echo base_url();?>assets/js/ckfinder/ckfinder.html?Type=Images',
      filebrowserFlashBrowseUrl: '<?php echo base_url();?>assets/js/ckfinder/ckfinder.html?Type=Flash',
      filebrowserUploadUrl: '<?php echo base_url();?>assets/js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files'
    });


    </script>

    <!-- Optionally, you can add Slimscroll and FastClick plugins.
          Both of these plugins are recommended to enhance the
          user experience. Slimscroll is required when using the
          fixed layout. -->
  </body>
</html>