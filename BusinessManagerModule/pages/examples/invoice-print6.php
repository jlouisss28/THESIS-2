<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Assumption Medical Diagnostic Center Inc. | Issued Supplies Invoice</title>
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
          <small class="pull-right">Date: 2/10/2014</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        Issued Supplies
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
     <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <?php
                    require_once("../../../db.php");
                    $sql = "SELECT * FROM issuedsupplies";
                    $result = $conn->query($sql);
                  ?>
                    <thead>
                    <tr>
                      <th>Request Date</th>
                      <th>Issue Date</th>
                      <th>Description</th>
                      <th>Quantity In Stock</th>
                      <th>Unit</th>
                      <th>Total Price</th>
                      <th>Department</th>
                    </tr>
                    </thead>
                  <?php 
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) { ?>
                        <tr>
                        <td><?php echo $row["requestdate"]; ?></td>
                        <td><?php echo $row["issueddate"]; ?></td>
                        <td><?php echo $row["supplydesc"]; ?></td>
                        <td><?php echo $row["unitinstock"]; ?></td>
                        <td><?php echo $row["unit"]; ?></td>
                        <td>&#8369;<?php echo $row["unitprice"]; ?></td>
                        <td><?php echo $row["departmentName"]; ?></td>
                        </tr>
                  <?php
                    }
                  }
                  ?>
                <tfoot>
                <tr>
                  <th>Issue Date</th>
                  <th>Issue Time</th>
                  <th>Description</th>
                  <th>Quantity In Stock</th>
                  <th>Unit</th>
                  <th>Total Price</th>
                  <th>Department</th>
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
