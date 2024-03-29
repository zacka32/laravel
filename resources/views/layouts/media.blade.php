<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> HR Immortal Group</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

 <link rel="stylesheet" href="adminlte/bootstrap/css/bootstrap.min.css">
 <link rel="stylesheet" href="adminlte/bootstrap/css/bootstrap-toggle.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="adminlte/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="adminlte/bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="adminlte/plugins/jvectormap/jquery-jvectormap-1.2.2.css">

   <!-- Select2 -->
  <link rel="stylesheet" href="adminlte/plugins/select2/select2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="adminlte/dist/css/AdminLTE.min.css">
    <!-- <link rel="stylesheet" href="dist/css/AdminLTE.css"> -->
  
  <link rel="stylesheet" href="adminlte/dist/css/css.css">
  <link rel="stylesheet" href="adminlte/dist/css/font.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="adminlte/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="adminlte/css/css.css">

  <link rel="stylesheet" href="adminlte/plugins/datatables/dataTables.bootstrap.css"> 
  <!-- <link rel="stylesheet" href=" https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css">  -->
  <link rel="stylesheet" href="adminlte/dist/css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="adminlte/plugins/datatables/extensions/ColReorder/css/dataTables.colReorder.css">
  <link rel="stylesheet" href="adminlte/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css">
  <link rel="stylesheet" href="adminlte/plugins/iCheck/flat/blue.css">

 <!-- <link type="text/css" rel="stylesheet" media="all" href="css/chat.css" /> -->
<script src="adminlte/dist/js/jquery-1.11.0.min.js"></script> 

<!-->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
    <!-- This is what you need code notification  -->
  <script src="adminlte/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="adminlte/dist/sweetalert.css">
  
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <!-- <div class="loader"></div> -->
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
     <a href="media.php?module=home" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>H</b>R</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>HRD</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      
      </a>
      
      

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img width="60" src="adminlte/png/Engineer.png" border=0 class="img-circle" alt="User Image" >
        </div>
        <div class="pull-left info">
          <p>{{session('nama_lengkap')}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i>  <SCRIPT language=JavaScript>var d = new Date();
  var h = d.getHours();
  if (h < 11) { document.write('Awali dgn Senyum,'); }
  else { if (h < 15) { document.write('Sukses Selalu,'); }
  else { if (h < 19) { document.write('Tetap Semangat,'); }
  else { if (h <= 23) { document.write('Selamat malam,'); }
  }}}</SCRIPT>
 </a>
        </div>
      </div>
      <!-- search form -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form> -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
           <a href="media.php?module=home" class="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              
            </span>
          </a>
          
        </li>
            <?php 
             function get_menu_child($parent){
              // $menu = \App\Menu::where('id_main',$parent)->get();
              $parent = \App\Menu::where('id_main')->first();
              ?>
              <li class="treeview">
                <a href="{{link($parent->link)}}">
                  <i class="fa {{$parent->gambar}}"></i>
                  <span>{{$parent->nama_menu}}</span>
                  @if(sizeof($menu)>0)
                  <i class="fa fa-angle-left pull-right"></i>
                  @endif
                </a>
                @if(sizeof($menu)>0)
                <ul class="treeview-menu">
                 
                <?php
                  foreach ($menu as $key) {
                    get_menu_child($key->id);
                  }
                  ?>
                </ul>
                @endif
              </li>
            <?php } ?>
		    <li>
          <a href="?module=password">
            <i class="fa fa-fw fa-gears"></i>
            <span>Ganti Password</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li>
          <a href="logout.php">
            <i class="fa fa-pie-chart"></i>
            <span>Logout</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        
        
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
  <span class="to_top">Go to top</span>
    @yield('content')
	
		<!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.1 beta
    </div>
    <strong>Copyright &copy; 2017-2018 <a href="#">IT Immortal Group</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->

      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div>
          <!-- /.form-group -->

          <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div>
          <!-- /.form-group -->

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>

</div>

<!-- <div class="ajaxloader">Place at bottom of page</div> -->
<!-- ./wrapper -->


<!-- jQuery 2.2.3 -->
<script src="adminlte/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="adminlte/plugins/select2/select2.full.min.js"></script>
<script src="adminlte/bootstrap/js/bootstrap.min.js"></script>
<script src="adminlte/bootstrap/js/bootstrap-toggle.min.js"></script>



<script src="adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="adminlte/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script src="adminlte/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>

<!-- Tes pdf datatables -->
<script src="adminlte/dist/js/dataTables.buttons.min.js"></script>
  <!-- <script src="dist/js/buttons.flash.min.js"></script>
<script src="dist/js/jszip.min.js"></script>

<script src="dist/js/buttons.html5.min.js"></script> -->
<!-- <script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>  

 <!-- Tes pdf datatables -->


<!-- FastClick -->
<script src="adminlte/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="adminlte/dist/js/app.min.js"></script>
<!-- SlimScroll 1.3.0 -->
<script src="adminlte/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- 
<script src="plugins/chartjs/Chart.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes)
<script src="dist/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="adminlte/dist/js/demo.js"></script>

<!-- <script type="text/javascript" src="js/chat.js"></script> -->
<script>
$(document).ready(function() {
  
    $("#example1").DataTable( {
      "rowReorder": {
			"selector": 'td:nth-child(2)'
			},
			"responsive": true,
    });
    
     $('#kodegol').DataTable( {
        "order": [[ 0, "desc" ]],
        "rowReorder": {
			"selector": 'td:nth-child(2)'
			},
			"responsive": true,
    } );
    
    $('#hrd tfoot th').each( function () {
        var title = $(this).text();
        $(this).html( '<input type="text" class="form-control input-sm sa" placeholder="'+title+'" />' );
    } );
 
    // DataTable
    var table = $('#hrd').DataTable( {
        "order": [[ 2, "desc" ]],
           "rowReorder": {
			"selector": 'td:nth-child(2)'
			},
			"responsive": true,
    } );
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
    $('#hrd tfoot tr').appendTo('#hrd thead');

    $('.select2').select2();
    $('[data-tt="tooltip"]').tooltip();

    
  });


</script>

<script type="text/javascript">
$(function(){
    $('.to_top').hide().on('click', function(){
        $('body,html').animate({scrollTop : 0}, 800);
    });
    $(window).on('scroll', function(){
        if($(this).scrollTop() > 50){
            $('.to_top').show();
        }else{
            $('.to_top').hide();
        }
    });
});
</script>
<script>
$('#allOnOff').change(function(){
 $("#tglkel").prop("disabled", $(this).is(':checked'));
  $("#tglkel").prop("required", !$(this).is(':checked'));
 });

</script>


</body>
</html>
