<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Business Manager | Data</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <!-- daterange picker -->
  <link rel="stylesheet" href="../../bower_components/bootstrap-daterangepicker/daterangepicker.css">
      <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.min.css">
    <!-- Select2 -->
  <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css">

   <!-- datatable lib -->
    
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
 <style>
    .example-modal .modal {
      position: relative;
      top: auto;
      bottom: auto;
      right: auto;
      left: auto;
      display: block;
      z-index: 1;
    }

    .example-modal .modal {
      background: transparent !important;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="../../dashboard.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>A</b>MDC</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>AMDC</b> Inc.</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
         <li class= "user user-menu">
                    <a class = "dropdown-toggle">
                        <span class="hidden-xs" id="demo"></span>
                        <script>
                            var d = new Date();
                            document.getElementById("demo").innerHTML = d.toUTCString();
                        </script>
                    </a>
                </li>
          <!-- Notifications: style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">10</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 10 notifications</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> 5 new members joined today
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                      page and may cause design problems
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-red"></i> 5 new members joined
                    </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> You changed your username
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">View all</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Create a nice theme
                        <small class="pull-right">40%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">40% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Some task I need to do
                        <small class="pull-right">60%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">60% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Make beautiful transitions
                        <small class="pull-right">80%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">80% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                  <!-- end task item -->
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../../dist/img/user2-128x128.png" class="user-image" alt="User Image">
              <span class="hidden-xs">Business Manager</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../../dist/img/user2-128x128.png" class="img-circle" alt="User Image">

                <p>
                 Business Manager
                  <small>Member since Oct. 2017</small>
                </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
            
                <div class="pull-right">
                  <a href="../../../logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>    
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../../dist/img/user2-128x128.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Business Manager</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Active</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Inventory System</li>
	<!-- DASHBOARD MENU -->
         <li>
          <a href="../../dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
		<!-- MANAGE ACCOUNTS MENU -->
        <li>
          <a href="../forms/manageAccounts.php">
            <i class="fa fa-group"></i> <span>Manage Accounts</span>
          </a>
        </li>
		<!-- SUPPLIES MENU -->
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i> <span>Supplies</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li class ="active"><a href="medicalSupplies.php"><i class= "fa fa-medkit"></i> Medical Supplies</a></li>
			<li><a href="officeSupplies.php"><i class="fa fa-pencil-square-o"></i> Office Supplies</a></li>
          </ul>
        </li>
        <!-- PURCHASES -->
          <li>
              <a href="purchases.php">
                  <i class="fa fa-tags"></i><span>Purchases</span>  
              </a>
          </li>
        <!-- ISSUED SUPPLIES -->
            <li><a href="issuedSupplies.php">
                <i class="fa fa-truck"></i><span>Issued Supplies</span> 
                </a>
          </li>
		<!-- SUPPLIERS MENU -->
        <li>
          <a href="suppliers.php">
            <i class="fa fa-user"></i> <span>Suppliers</span>
          </a>
        </li>
		<!-- DEPARTMENTS MENU -->
        <li>
          <a href="departments.php">
            <i class="fa fa-building"></i> <span>Departments</span>
          </a>
        </li>
		<!-- CALENDAR MENU -->
        <li>
          <a href="../calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
<!-- INVOICE MENU -->
        <li>
          <a href="../examples/invoice.html">
            <i class="fa fa-print"></i> <span>Logs</span>
          </a>
        </li>
<!-- LOCKSCREEN MENU -->
        <li>
          <a href="../examples/lockscreen.html">
            <i class="fa fa-lock"></i> <span>Lockscreen</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
          <b>Medical Supplies</b>
        <!-- <small>Supplies</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Medical Supplies</a></li>
        <li class="active">Supplies</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">

          <div class="box">
            <div class="box-header">
              <!-- <h3 class="box-title">Data Table With Full Features</h3> -->
                <table style="float: left;">
                    <tr>
                        <th> <div class="dropdownButton">
                        <select name="dropdown" onchange="location =this.value;">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Supplies
                          <span class="caret"></span>
                        </button>
                          <option><b>All Supplies</b></option>
                          <option value="php/medTotalQty.php">Total Quantity</optiom>
                        </select>
                      </div></th>
                    </tr>
                </table> 
                <table style="float:right;">
                    <tr>
                        <th><button type="submit" class="btn btn-primary btn-block btn-warning" data-toggle="modal" data-target="#modal-info">Add</button>
                        
                        <form name="addSupply" method="post" action="php/suppliesFunctions.php">
                        <div class="modal fade" id="modal-info">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                        <div class="margin">
                                            <h3>Add Supply</h3>
                                          </div>
                                      </div>
                                        <!-- end of modal header -->
                                      <div class="modal-body">
                                        <div class="box-body">

                                                  <!-- DATE -->
                                                <!-- <div class="form-group">
                                                    <label>Date Received</label>
                                                <div class="input-group date"/>
                                                  <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                  </div>
                                                  <input type="date" class="form-control pull-right" id="datepicker" required />
                                                </div>
                                                     /.input group
                                              </div> -->
                                            
                                            <!-- TIME 
                                                <div class="bootstrap-timepicker">
                                                <div class="form-group">
                                                  <label>Time Received</label>

                                                  <div class="input-group">
                                                    <input type="time" class="form-control timepicker" required />

                                                    <div class="input-group-addon">
                                                      <i class="fa fa-clock-o"></i>
                                                    </div>
                                                  </div>
                                                       /.input group
                                                </div>
                                                      /.form group
                                              </div> -->
                                          <!-- /.form group -->
                                            <div class="form-group">
                                                  <label for="exampleInputEmail1">Description</label>
                                                  <input type="text" class="form-control" id="Description" name="Description" required />
                                                </div>
                                              
                                              <!-- <div class="form-group">
                                                  <label for="exampleInputEmail1">Supplier</label>
                                                  <input type="text" class="form-control" name=Supplier""
                                                  required />
                                                </div> -->
                                              <div class="form-group">
                                                  <label for="exampleInputEmail1">Quantity</label>
                                                  <input type="number" class="form-control" id="Quantity" name="Quantity" required />
                                                </div>
                                              <div class="form-group">
                                                  <label for="exampleInputEmail1">Unit</label>
                                                  <input type="text" class="form-control" id="Unit" name="Unit" required />
                                                </div>
                                              <div class="form-group">
                                                  <label for="exampleInputEmail1">Unit Price</label>
                                                  <input type="number" class="form-control" id="priceUnit" name="priceUnit" required />
                                                </div>
                                              <!-- Date and Time -->
                                                <div class="form-group">
                                                    <label>Expiration Date</label>

                                                    <div class="input-group">
                                                      <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                      </div>
                                                      <input type="text" class="form-control pull-right" id="datepicker2" name="expirationDate">
                                                    </div>
                                                          <!-- /.input group --> 
                                                  </div>                                
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary" class="btn btn-success" data-toggle="modal" data-target="#modal-success">Save Supply</button>
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                    
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>

                                <div class="modal modal-success fade" id="modal-success">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        </div>
                                        <div class="modal-body">
                                          <h3>Are you sure to add this item?&hellip;</h3>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-outline" name="addMedSupply">Save changes</button>

                                        </div>
                                      </div>
                                      <!-- /.modal-content -->
                                    </div>
                                    <!-- /.modal-dialog -->
                                  </div>
                                  <!-- /.modal -->
                                </form>
                            </th> 
                              
                            <!--- END OF ADD -->
                        <!---  ISSUE BUTTON -->
                        <th><button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                                        Issue To
                                      </button>
                                <form name ="form2" method="post" action="suppliesFunctions.php">
                                <div class="modal fade" id="modal-default">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                        <div class="margin">
                                            <h3>Issue Supplies</h3>
                                          </div>
                                      </div>
                                        <!-- end of modal header -->
                                      <div class="modal-body">
                                              <!-- Date and Time -->
                                                 <div class="form-group">
                                                    <label>Issue Date</label>
                                                    <div class="input-group">
                                                      <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                      </div>
                                                      <input type="text" class="form-control pull-right" id="datepicker3" name="date">
                                                    </div>
                                                    <!-- /.input group -->
                                                  </div>
                                          <!-- /.form group -->
                                              <div class="form-group">
                                                  <label for="exampleInputEmail1">Description</label>
                                                  <input type="text" class="form-control" name="description">
                                                </div>
                                              <div class="form-group">
                                                  <label for="exampleInputEmail1">Quantity</label>
                                                  <input type="number" class="form-control" name="quantity">
                                                </div>
                                              <div class="form-group">
                                                  <label for="exampleInputEmail1">Unit</label>
                                                  <input type="text" class="form-control" name="unit">
                                            </div>
                                            <div class="form-group">
                                                  <label for="exampleInputEmail1">Price</label>
                                                  <input type="number" class="form-control" name="price">
                                            </div>
                                            <div class="department">
                                                <select name = "department">
                                                <option value="">Select a Department</option>
                                                <?php
                                                  require("../../../db.php");
                                                  $sql = "SELECT * FROM departments";
                                                  $results = mysqli_query($conn, $sql);

                                                  foreach($results as $department) { 
                                                ?>
                                                <option value="<?php echo $department["department_id"]; ?>" name="dep"><?php echo $department["department_name"]; ?></option>
                                                <?php 
                                                  }
                                                ?>
                                              </select>

                                              <select name = "department">
                                                <option value="">Select a branch</option>
                                                <?php
                                                  require("../../../db.php");
                                                  $sql = "SELECT * FROM departments";
                                                  $results = mysqli_query($conn, $sql);

                                                  foreach($results as $branch) { 
                                                ?>
                                                <option value="<?php echo $branch["department_id"]; ?>" name="brn"><?php echo $branch["branch_location"]; ?></option>
                                                <?php 
                                                  }
                                                ?>
                                              </select>
                                          </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary" name="medIssueTo">Issue Supplies</button>
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>
                              </form>
                                <!-- /.modal --></th>
                    </tr>
                </table>      
            </div>
              
      <div class="box-body">
        <table id="example" class="table table-bordered table-striped">
         
          <thead>
            <tr>
             <!-- <th>Date Received</th>
                  <th>Time Received</th> -->
                  <th>Expiration Date</th> 
                  <th>Description</th>
                  <th>Quantity in Stock</th>
                  <th>Unit</th>
                  <th>Unit Price</th>
             <!-- <th>Total Amount</th> -->
                  <th>Reorder Level</th>
                  <th>Good Condition</th>
                  <th>Damaged</th>
                  <th> Action</th> 
            </tr>
        </thead>
        

        <tfoot>
           <tr>
             <!-- <th>Date Received</th>
                  <th>Time Received</th> -->
                  <th>Expiration Date</th> 
                  <th>Description</th>
                  <th>Quantity in Stock</th>
                  <th>Unit</th>
                  <th>Unit Price</th>
             <!-- <th>Total Amount</th> -->
                  <th>Reorder Level</th>
                  <th>Good Condition</th>
                  <th>Damaged</th>
                  <th> Action</th> 
            </tr> 
        </tfoot>
      </table>              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
            <!--- PRINT AND PDF -->
              <div class="row no-print">
        <div class="col-xs-12">
          <button type="button" class="btn btn-default pull-right" style="margin-right: 1px;"><i class="fa fa-print"></i>
            <a href="../examples/medicalSuppliesPrint.php"> Print</a>
          </button>
        </div>
      </div>
        <!-- END OF PRINT AND PDF -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; Bigornia, Cabalse, Calimlim, Calub, Duco, Malong, Siapno, Soy. </strong> All rights
    reserved.
  </footer>
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- Select2 -->
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- InputMask -->
<script src="../../plugins/input-mask/jquery.inputmask.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.date.extensions.js"></script>
<script src="../../plugins/input-mask/jquery.inputmask.extensions.js"></script>

<!-- bootstrap datepicker -->
<script src="../../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- bootstrap color picker -->
<script src="../../bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
<!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
    <!-- bootstrap time picker -->
<script src="../../plugins/timepicker/bootstrap-timepicker.min.js"></script>
 

<script>
 // date and time 
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true,
      format : 'yyyy-mm-dd'
    })
    //Date picker
    $('#datepicker2').datepicker({
      autoclose: true,
      format : 'yyyy-mm-dd'
    })
    //Date picker
    $('#datepicker3').datepicker({
      autoclose: true,
      format : 'yyyy-mm-dd'
    })
      
    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
  })
</script>

<!--create modal dialog for display detail info for edit on button cell click-->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
                <div id="content-data"></div>
            </div>
        </div>
   
    <script>
        $(document).ready(function(){
            var dataTable=$('#example').DataTable({
                'autoWidth' : false,
                "processing": true,
                "serverSide": true,
                "ajax":{
                    url:"php/medicalSuppliesFetch.php",
                    type:"post"
                }
            });
        });
    </script>

    <!--script js for get edit data-->
    <script>
        $(document).on('click','#getEdit',function(e){
            e.preventDefault();
            var per_id=$(this).data('id');
            //alert(per_id);
            $('#content-data').html('');
            $.ajax({
                url:'php/medicalSuppliesEdit.php',
                type:'POST',
                data:'id='+per_id,
                dataType:'html'
            }).done(function(data){
                $('#content-data').html('');
                $('#content-data').html(data);
            }).final(function(){
                $('#content-data').html('<p>Error</p>');
            });
        });
    </script>
</body>
</html>
