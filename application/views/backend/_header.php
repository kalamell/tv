<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title>Backend CMS</title>
	<base href="<?=base_url();?>public/backend/" target="_self">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />

    <link href="plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />

    <!-- fullCalendar 2.2.5-->
    <link href="plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/fullcalendar/fullcalendar.print.css" rel="stylesheet" type="text/css" media='print' />


    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <link href="dist/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


  </head>

  <body class="skin-blue sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="<?=site_url('backend');?>" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>CMS</b></span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>BACKEND CMS</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <li class="dropdown">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                  <span class="hidden-xs"><?=get_admin_name();?></span>
                </a>
                <ul class="dropdown-menu">

                  <li class="">

                      <a href="<?=site_url('backend/auth/logout');?>" onclick="javascript:return confirm('ต้องการลบหรือไม่ ?');" class="">Sign out</a>

                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
              <li>
                <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">



          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">เมนู</li>
            <!-- Optionally, you can add icons to the links -->
			      <li class="<?=site_url();?>"><a href="<?=site_url();?>"><i class='fa fa-home'></i> <span>ดูเว็บไซต์</span></a></li>
            <li class="treeview <?=$this->uri->segment(2)==''?' active':'';?> <?=$this->uri->segment(2)=='config'?' active':'';?> <?=$this->uri->segment(2)=='admin'?' active':'';?> <?=$this->uri->segment(2)=='bank'?' active':'';?>">

              <a href="#"><i class='fa fa-link'></i> <span>ข้อมูลเว็บไซต์</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?=site_url('backend/config');?>">ตั้งค่าเว็บไซต์</a></li>
                <li><a href="<?=site_url('backend/language');?>">จัดการภาษา</a></li>
                <li><a href="<?=site_url('backend/bank');?>">จัดการธนาคาร</a></li>
                <li><a href="<?=site_url('backend/admin');?>">ผู้ดูแลระบบ</a></li>
              </ul>
            </li>

            <li style="" class="treeview">

              <a href="#"><i class='fa fa-hotel'></i> <span>จัดการทัวร์</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?=site_url('backend/category');?>">ประเภททัวร์</a></li>
                <li><a href="<?=site_url('backend/room');?>">ชื่อทัวร์</a></li>
              </ul>
            </li>


            <li class="" style="display: none"><a href="<?=site_url('backend/calendar');?>"><i class='fa fa-calendar'></i> <span>ปฏิทินการจอง</span></a></li>


            <li class="treeview">

              <a href="#"><i class='fa fa-image'></i> <span>Banner</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="<?=site_url('backend/banner');?>"><i class='fa fa-image'></i> <span>Banner</span></a></li>
                <li><a href="<?=site_url('backend/promotion');?>"><i class='fa fa-image'></i> <span>Banner โปรโมชั่น</span></a></li>
              </ul>
            </li>



            <li class="<?=$this->uri->segment(2)=='content'?' active':'';?>"><a href="<?=site_url('backend/content');?>"><i class='fa fa-link'></i> <span>จัดการ เนื้อหา</span></a></li>
<!--
           <li class="<?=$this->uri->segment(2)=='promotion'?' active':'';?>"><a href="<?=site_url('backend/promotion');?>"><i class='fa fa-link'></i> <span>จัดการ ข้อมูลโปรโมชั่น</span></a></li>


-->





			<li><a href="<?=site_url('backend/contact');?>"><i class='fa fa-link'></i> <span>ข้อมูลผู้ติดต่อ</span></a></li>



          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
