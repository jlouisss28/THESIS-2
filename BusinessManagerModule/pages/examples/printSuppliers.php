<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Assumption Medical Diagnostic Center Inc. | Suppliers Invoice</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> Assumption Medical Diagnostic Center Inc.
          <small class="pull-right">Date: 
            <span class="hidden-xs" id="demo"></span>
                        <script>
                          var d = new Date();
                          
                          document.getElementById("demo").innerHTML = d.toDateString();
                        </script>
          </small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        Suppliers
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
     <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <?php
                    require_once("../../../db.php");
                    $sql = "SELECT suppliers_ID, companyName, supplierContact, supplierAddr, supplierStatus, supplierProduct, suppierRemarks FROM suppliers WHERE supplierStatus = 'Active'";
                    $result = $conn->query($sql);
                    $sql2 = "SELECT suppliers_ID, companyName, supplierContact, supplierAddr, supplierStatus, supplierProduct, suppierRemarks FROM suppliers WHERE supplierStatus = 'Inactive'";
                    $result2 = $conn->query($sql2);
                ?>

                <thead>
                    <tr>
                        <th>Supplier Name</th>
                        <th>Contact</th>
                        <th>Address</th>
                        <th>Product</th>
                        <th>Status</th>
                        <th>Remarks</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) { ?>
                        <tr>
                          <td><?php echo $row["companyName"]; ?></td>
                          <td><?php echo $row["supplierContact"]; ?></td>
                          <td><?php echo $row["supplierAddr"]; ?></td>
                          <td><?php echo $row["supplierProduct"]; ?></td>
                          <td>Active
                          </td>
                          <td><?php echo $row["suppierRemarks"]; ?></td>
                          
                        </tr>
                    <?php 
                        }
                      }
                    ?>
                    <?php if ($result2->num_rows > 0) {
                      while($row = $result2->fetch_assoc()) { ?>
                        <tr>
                          <td><?php echo $row["companyName"]; ?></td>
                          <td><?php echo $row["supplierContact"]; ?></td>
                          <td><?php echo $row["supplierAddr"]; ?></td>
                          <td><?php echo $row["supplierProduct"]; ?></td>
                          <td>Inactive
                          </td>
                          <td><?php echo $row["suppierRemarks"]; ?></td>
                          
                        </tr>
                    <?php 
                        }
                      }
                    ?>
                </tbody>
                <tfoot>
                  <tr>
                    <th>Supplier Name</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>Product</th>
                    <th>Status</th>
                    <th>Remarks</th>
                  </tr>
                </tfoot>
              </table>
         
            </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>
