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
              <!-- Menu Footer-->
              <li class="user-footer">
         
                <div class="pull-right">
                  <a href="../examples/login.php" class="btn btn-default btn-flat">Sign out</a>
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
	<!---------------------------------------------------- DASHBOARD MENU -------------------------------------------------------------->
        <li>
          <a href="../../dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
		<!---------------------------------------------------- MANAGE ACCOUNTS MENU -------------------------------------------------------------->
        <li>
          <a href="../forms/useraccounts.php">
            <i class="fa fa-group"></i> <span>Manage Accounts</span>
          </a>
        </li>
		<!---------------------------------------------------- SUPPLIES MENU -------------------------------------------------------------->
        <li class = "treeview">
          <a href="#">
            <i class="fa fa-briefcase"></i> <span>Supplies</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
			<li><a href="medicalSupplies.php"><i class= "fa fa-medkit"></i> Medical Supplies</a></li>
			<li><a href="officeSupplies.php"><i class="fa fa-pencil-square-o"></i> Office Supplies</a></li>
          </ul>
        </li>
        <!--------------------------------------------------- PURCHASES -------------------------------------------------->
          <li class="active">
              <a href="purchases.php">
                  <i class="fa fa-tags"></i><span>Purchases</span>  
              </a>
          </li>
        <!--------------------------------------------------- ISSUED SUPPLIES -------------------------------------------------->
            <li><a href="issuedSupplies.php">
                <i class="fa fa-truck"></i><span>Issued Supplies</span> 
                </a>
          </li>
		<!---------------------------------------------------- SUPPLIERS MENU -------------------------------------------------------------->
        <li>
          <a href="suppliers.php">
            <i class="fa fa-user"></i> <span>Suppliers</span>
          </a>
        </li>
		<!---------------------------------------------------- DEPARTMENTS MENU -------------------------------------------------------------->
        <li>
          <a href="departments.php">
            <i class="fa fa-building"></i> <span>Departments</span>
          </a>
        </li>
		<!---------------------------------------------------- CALENDAR MENU -------------------------------------------------------------->
        <li>
          <a href="../calendar.php">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
		<!---------------------------------------------------- INVOICE MENU -------------------------------------------------------------->
        <li>
          <a href="../examples/invoice.php">
            <i class="fa fa-print"></i> <span>Logs</span>
          </a>
        </li>
<!---------------------------------------------------- LOCKSCREEN MENU -------------------------------------------------------------->
        <li>
          <a href="../examples/lockscreen.php">
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
          <b>Purchases</b>
        <!-- <small>Supplies</small> -->
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Ordered Supplies</a></li>
        <li class="active">Data tables</li>
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
                        <th> <div class="btn-group">
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Suppliers
                          <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                          <li><a href="#">Mercury Drug</a></li>
                          <li><a href="#">St. Joseph Drugstore</a></li>
                          <li><a href="#">Jet Bookstore</a></li>
                          <li><a href="#">Eva Goods</a></li>
                          <li><a href="#">Watsons</a></li>
                          <li><a href="#">Curamed Pharmacy</a></li>
                          <li><a href="#">National Bookstore</a></li>
                          <li><a href="#">Panghaoi</a></li>
                          <li><a href="#">Generic's Pharmacy</a></li>
                        </ul>
                      </div></th>
                    </tr>
                </table>  
                <table style="float:right;">
                    <tr>
                        <th><button type="submit" class="btn btn-primary btn-block btn-warning" data-toggle="modal" data-target="#modal-info">Add</button>
						 <form name="form" method="post" action="php/purchasesAdd.php" >
                        <div class="modal fade" id="modal-info">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                        <div class="margin">
                                            <h3>Add Purchases</h3>
                                          </div>
                                      </div>
                                        <!-- end of modal header -->
                                      <div class="modal-body">
                                        <div class="box-body">
										 <table class="table table-bordered table-striped">
                                            <tbody>
                                            <tr>
                                                <td> 
                                                             <!-- DATE -->
                                            <!--<div class="form-group">
                                                    <label for ="exampleInputEmail1">Order Date</label>
                                                <div class="input-group date">
                                                  <div class="input-group-addon">
                                                    <i class="fa fa-calendar"></i>
                                                  </div>
                                                  <input type="date" class="form-control pull-right" name="orDate">
                                                </div>
                                                <!-- /.input group -->
                                              <!--</div>-->
											  <div class="form-group">
                                                  <label for="exampleInputEmail1">Order Date</label>
                                                  <input type="text" class="form-control" name="orDate" required />
                                              </div>
                                            <div class="form-group">
                                                  <label for="exampleInputEmail1">Order Time</label>
                                                  <input type="text" class="form-control" name="orTime" required />
                                              </div>
                                            <!-- TIME -->
                                            <!--<div class="bootstrap-timepicker">
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Order Time</label>

                                                  <div class="input-group">
                                                    <input type="time" class="form-control" name="orTime">

                                                    <div class="input-group-addon">
                                                      <i class="fa fa-clock-o"></i>
                                                    </div>
                                                  </div>
                                                  <!-- /.input group -->
                                               <!-- </div>
                                                <!-- /.form group -->
                                             <!--</div>-->
												 
                                            <div class="form-group">
                                                  <label for="exampleInputEmail1">Description</label>
                                                  <input type="text" class="form-control" name="desc" required />
                                                </div>
                                              
                                              <div class="form-group">
                                                  <label for="exampleInputEmail1">Quantity</label>
                                                  <input type="text" class="form-control" name="quan" required />
                                                </div>
                                              <div class="form-group">
                                                  <label for="exampleInputEmail1">Unit</label>
                                                  <input type="text" class="form-control" name="unt" required />
                                                </div>
												
											  <div class="form-group">
                                                  <label for="exampleInputEmail1">Delivery Date</label>
                                                  <input type="text" class="form-control" name="deDate" required />
                                              </div>
											                                            
                                           <!--  <div class="form-group">
                                                    <label for="exampleInputEmail1">Delivery Date</label>

                                                    <div class="input-group">
                                                      <div class="input-group-addon">
                                                        <i class="fa fa-calendar"></i>
                                                      </div>
                                                      <input type="date" class="form-control pull-right" name="deDate">
                                                    </div>
                                                    <!-- /.input group -->
                                                  </div>
                                              <div class="form-group">
                                                  <label for="exampleInputEmail1">Unit Price</label>
                                                  <input type="text" class="form-control" name="unPrice" required />
                                                </div>
											 <div class="form-group">
                                                  <label for="exampleInputEmail1">Total Amount</label>
                                                  <input type="text" class="form-control" name="toAmount" required />
                                                </div>
											
											<!-- <div class="form-group">
                                                  <label for="exampleInputEmail1">Supplier</label>
                                                  <input type="text" class="form-control" name="supp">
                                            </div>
											<div class="form-group">
                                                    <label for ="exampleInputEmail1">
                                                      Supply Type</label>
													  <br>
													   <input type="radio" name="suppType" value="Medical"> Medical <br>
                                                  <input type="radio" name="suppType" value="Office"> Office <br>
                                            </div> -->
                                            
                                        </div>
										</th>
										</tbody>
										</table>
										</div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary" name="addPurch">Add Purchases</button>
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div></th>
                    </tr>
                </table>      
            </div>

  <!-- Content Wrapper. Contains page content -->
            <!-- /.box-header -->
              <div class="box-body">
              <table id="example" class="display" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>Order Date</th>
                        <th>Order Time</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                        <th>Delivery Date</th>
						<th>Unit Price</th>
						<th>Total Amount</th>
						<th></th>
						
                    </tr>
                </thead>
                
                <tfoot>
                  <tr>
						<th>Order Date</th>
                        <th>Order Time</th>
                        <th>Description</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                        <th>Delivery Date</th>
						<th>Unit Price</th>
						<th>Total Amount</th>
						<th></th>
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
          <div class="row no-print">
        <div class="col-xs-12">
          <a href="../examples/printPurchases.php" target="_blank" class="btn btn-default pull-right"><i class="fa fa-print"></i> Print</a>
        </div>
      </div>
    
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

<style>
/* The switch - the box around the slider */
.switch {
  position: relative;
  display: inline-block;
  width: 50px;
  height: 24px;
}

/* Hide default HTML checkbox */
.switch input {display:none;}

/* The slider */
.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 16px;
  width: 16px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 24px;
}

.slider.round:before {
  border-radius: 50%;
}    
</style>
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
<!-- page script -->

<script>
<!-- date and time -->
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })
    //Date picker
    $('#datepicker2').datepicker({
      autoclose: true
    })
    //Date picker
    $('#datepicker3').datepicker({
      autoclose: true
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
                "processing": true,
                "serverSide":true,
                "ajax":{
                    url:"php/purchasesFetch.php",
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
                url:'php/purchasesEdit.php',
                type:'POST',
                data:'id='+per_id,
                dataType:'html'
            }).done(function(data){
                $('#content-data').html('');
                $('#content-data').html(data);
            }).fial(function(){
                $('#content-data').html('<p>Error</p>');
            });
        });
    </script>
</body>
</html>

<?php
$con=mysqli_connect('localhost','root','','itproject');
if(isset($_POST['btnEdit'])){
    $new_purchasesOrderDate=mysqli_real_escape_string($con,$_POST['txtorderdate']);
    $new_purchasesOrderTime=mysqli_real_escape_string($con,$_POST['txtordertime']);
	$new_purchasesDescription=mysqli_real_escape_string($con,$_POST['txtdescription']);
    $new_purchasesQuantity=mysqli_real_escape_string($con,$_POST['txtquantity']);
    $new_purchasesUnit=mysqli_real_escape_string($con,$_POST['txtunit']);
    $new_purchasesDeliveryDate=mysqli_real_escape_string($con,$_POST['txtdeliverydate']);
    $new_purchasesUnitPrice=mysqli_real_escape_string($con,$_POST['txtunitprice']);
	$new_purchasesTotalAmount=mysqli_real_escape_string($con,$_POST['txttotalamount']);

    $sqlupdate="UPDATE purchaseorder SET orderDate='$new_purchasesOrderDate', orderTime='$new_purchasesOrderTime', description='$new_purchasesDescription', quantity='$new_purchasesQuantity', unit='$new_purchasesUnit', deliveryDate='$new_purchasesDeliveryDate', unitPrice='$new_purchasesUnitPrice', totalAmount='$new_purchasesTotalAmount' WHERE purchaseOrder_id='$new_id'" ;
	$result_update=mysqli_query($con,$sqlupdate);

    if($result_update){
        echo '<script>window.location.href="purchases.php"</script>';
    }
    else{
        echo '<script>alert("Update Failed")</script>';
    }
}
 
if(isset($_GET['delete'])){
    $id=$_GET['delete'];
    $sqldelete="DELETE FROM purchaseorder WHERE purchaseOrder_id='$id'";
    $result_delete=mysqli_query($con,$sqldelete);
    if($result_delete){
        echo'<script>window.location.href="purchases.php"</script>';
    }
    else{
        echo'<script>alert("Delete Failed")</script>';
    }
}
?>