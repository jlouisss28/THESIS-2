<?php
$connection =mysqli_connect("localhost","root","");
mysqli_select_db($connection, "itproject");

  if (isset($_POST['addSupply'])) {
  $sql = $connection->prepare("INSERT INTO supplies (supplyDesc, unitInStock, unit, unitPrice, supplyType) VALUES (?, ?, ?, ?, 'Medical')");  
  $description=$_POST['Description'];
  $quantity = $_POST['Quantity'];
  $unit= $_POST['Unit'];
  $priceUnit= $_POST['priceUnit'];
  $sql->bind_param("ssss", $description, $quantity, $unit, $priceUnit); 
  if($sql->execute()) {
  $success_message = "Added Successfully";
  } else {
  $error_message = "Problem in Adding New Record";
  }
  $sql->close();   
  $connection->close();
  } 
  header("Location: ../data.php");
?>