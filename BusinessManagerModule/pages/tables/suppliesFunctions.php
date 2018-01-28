<?php
  $host = "localhost";
  $user = "root";
  $password = "";
  $database = "itproject";

  $pdo = new PDO("mysql:host=localhost;dbname=itproject","root","");

  $conn =mysqli_connect($host, $user, $password, $database) or die('Error connecting to MySQL server.'); // connection to the database
   $connection =mysqli_connect("localhost","root","");
   mysqli_select_db($connection, "itproject");
                                // MEDICAL SUPPLY
  //CREATE or ADD MEDICAL SUPPLY
  if (isset($_POST['addMedSupply'])) {
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
  header("Location: data.php");
  } 

  //CREATE or ADD OFFICE SUPPLY
  if (isset($_POST['addOfficeSupply'])) {
  $sql = $connection->prepare("INSERT INTO supplies (supplyDesc, unitInStock, unit, unitPrice, supplyType) VALUES (?, ?, ?, ?, 'OFFICE')");  
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
  header("Location: data.php");
  } 

  // DELETE FOR MEDICAL SUPPLIES
  $desc_id = $_GET['medDelete'];
  $sql = $conn->prepare("DELETE FROM supplies WHERE supply_ID='$desc_id'");
  //$sql->bind_param("s", $desc_id); 
  $sql->execute();
  $sql->close(); 
  $conn->close();
  header('location: data.php'); 

  // DELETE FOR OFFICE SUPPLIES
  $desc_id = $_GET['officeDelete'];
  $sql = $conn->prepare("DELETE FROM supplies WHERE supply_ID='$desc_id'");
  //$sql->bind_param("s", $desc_id); 
  $sql->execute();
  $sql->close(); 
  $conn->close();
  header('location: data2.php');   
?>