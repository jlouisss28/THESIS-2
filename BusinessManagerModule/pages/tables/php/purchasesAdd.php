<?php
$connection =mysqli_connect("localhost","root","");
mysqli_select_db($connection, "itproject");

  if (isset($_POST['addPurch'])) {
  $sql = $connection->prepare("INSERT INTO purchaseorder (orderDate, orderTime,   description, quantity, unit, deliveryDate,  unitPrice, totalAmount) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");  
 
  $orDate = $_POST['orDate'];
  $orTime = $_POST['orTime'];
  $desc = $_POST['desc'];
  $quan = $_POST['quan'];
  $unt = $_POST['unt'];
  $deDate = $_POST['deDate'];
  $unPrice = $_POST['unPrice'];
  $toAmount = $_POST['toAmount'];
 // $supp = $_POST['supp'];
 // $suppType = $_POST['suppType'];

  $sql->bind_param("ssssssss", $orDate, $orTime, $desc, $quan, $unt,  $deDate,  $unPrice, $toAmount); 
  
  if($sql->execute()) {
  $success_message = "Added Successfully";
  } else {
  $error_message = "Problem in Adding New Record";
  }
  $sql->close();   
  $connection->close();
  } 
  header("Location: ../purchases.php");
?>