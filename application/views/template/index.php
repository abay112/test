<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Dashboard</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/template/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/template/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/template/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/template/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/template/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/template/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/template/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="<?php echo base_url();?>asset/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <script src="<?php echo base_url();?>asset/template/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url();?>asset/template/bower_components/jquery-ui/jquery-ui.min.js"></script>
  <script>
    $.widget.bridge('uibutton', $.ui.button);
  </script>
  <script src="<?php echo base_url();?>asset/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url();?>asset/template/bower_components/raphael/raphael.min.js"></script>
  <script src="<?php echo base_url();?>asset/template/bower_components/morris.js/morris.min.js"></script>
  <script src="<?php echo base_url();?>asset/template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
 <!--  <script src="<?php echo base_url();?>asset/template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
  <script src="<?php echo base_url();?>asset/template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script> -->
  <script src="<?php echo base_url();?>asset/template/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
  <script src="<?php echo base_url();?>asset/template/bower_components/moment/min/moment.min.js"></script>
  <script src="<?php echo base_url();?>asset/template/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script src="<?php echo base_url();?>asset/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
  <script src="<?php echo base_url();?>asset/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
  <script src="<?php echo base_url();?>asset/template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
  <script src="<?php echo base_url();?>asset/template/bower_components/fastclick/lib/fastclick.js"></script>
  <script src="<?php echo base_url();?>asset/template/dist/js/adminlte.min.js"></script>
  <script src="<?php echo base_url();?>asset/template/dist/js/pages/dashboard.js"></script>
  <script src="<?php echo base_url();?>asset/template/dist/js/demo.js"></script>

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
  <?php echo $header;?>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <section class="sidebar">
    <?php echo $sidebar;?> 
    </section>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <?php echo $title;?>
        <small><?php echo $sub_title;?></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="<?php echo $icon;?>"></i><?php echo $title;?></a></li>
        <li class="active"><?php echo $sub_title;?></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        
          <?php echo $content;?>
    
      </div>
      <div class="row">
      </div>
    </section>
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2014-2016 <a href="https://adminlte.io">Almsaeed Studio</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->

<!-- ./wrapper -->


</body>
</html>
