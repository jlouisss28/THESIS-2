<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Assumption Medical Diagnostic Center Inc. | Office Supplies Invoice</title>
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

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
          <small class="pull-right"><?php $date = new DateTime(); echo $date->format('Y-m-d H:i:s') . "\n"; ?></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        Office Supplies
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
         <?php // RETRIEVE or Display Medical Supplies
         include("../../../db.php");
          $sql = "SELECT supply_id, supply_description, quantity_in_stock, expiration_date, unit, CONCAT(reorder_level,' ', unit) AS 'Reorder Level', unit_price, good_condition, damaged FROM supplies WHERE supply_type='Office' ORDER BY supply_description ASC";
          $result = $conn->query($sql);  ?>
          <thead>
            <tr>
             <!--     <th>Date Received</th>
                  <th>Time Received</th> -->
                  <th>Expiration Date</th> 
                  <th>Description</th>
                  <th>Quantity in Stock</th>
                  <th>Unit</th>
                  <th>Unit Price</th>
             <!--    <th>Total Amount</th> -->
                  <th>Reorder Level</th>
                  <th>Good Condition</th>
                  <th>Damaged</th> 
            </tr>
        </thead>
        <tbody>
        <?php
          while($row = $result->fetch_assoc()) { ?>
            <tr>
            <td><?php echo $row["expiration_date"]; ?></td>
            <td><?php echo $row["supply_description"]; ?></td>
            <td align="right"><?php echo $row["quantity_in_stock"]; ?></td>
            <td><?php echo $row["unit"]; ?></td>
            <td align="right">&#8369; <?php echo $row["unit_price"]; ?> </td>
            <td align="center"><?php echo $row["Reorder Level"]; ?></td>
            <td><?php echo $row["good_condition"]; ?></td>
            <td><?php echo $row["damaged"]; ?></td>          
            </tr>
          <?php 
              }
          ?>
        </tbody>
      </table> 

            </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->


<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
    </script>
</body>
</html>
