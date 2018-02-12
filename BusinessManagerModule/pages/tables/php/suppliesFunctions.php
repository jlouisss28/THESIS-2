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
  $sql = $connection->prepare("INSERT INTO supplies (supply_description, quantity_in_stock, unit, unit_price, supply_type) VALUES (?, ?, ?, ?, 'Medical')");  
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
  header("Location: ../data.php");
  } 

  //CREATE or ADD OFFICE SUPPLY
  if (isset($_POST['addOfficeSupply'])) {
  $sql = $connection->prepare("INSERT INTO supplies (supply_description, quantity_in_stock, unit, unit_price, supply_type) VALUES (?, ?, ?, ?, 'OFFICE')");  
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
  header("Location: ../data2.php");
  } 

  // DELETE FOR MEDICAL SUPPLIES
  $desc_id = $_GET['medDelete'];
  $sql = $conn->prepare("DELETE FROM supplies WHERE supply_id='$desc_id'");
  //$sql->bind_param("s", $desc_id); 
  $sql->execute();
  $sql->close(); 
  $conn->close();
  header('location: ../data.php'); 

  // DELETE FOR OFFICE SUPPLIES
  $desc_id = $_GET['officeDelete'];
  $sql = $conn->prepare("DELETE FROM supplies WHERE supply_ID='$desc_id'");
  //$sql->bind_param("s", $desc_id); 
  $sql->execute();
  $sql->close(); 
  $conn->close();
  header('location: ../data2.php');   

  // ISSUE TO FOR MEDICAL SUPPLIES
   if (isset($_POST['medIssueTo'])) {
  $sql = $connection->prepare("INSERT INTO issuedsupplies(requestdate, issueddate, description,supplyType, unitInStock, unit, unitPrice, departmentName, branchLocation) VALUES (?, ?, 'Medical', ?, ?, ? ,?)");  
  $date=$_POST['date'];
  $description = $_POST['description'];
  $quantity= $_POST['quantity'];
  $unit= $_POST['unit'];
  $price= $_POST['price'];
  $dep= $_POST['dep'];
  $brn= $_POST['brn'];
  $sql->bind_param("ssssss", $date, $date, $description, $quantity, $unit, $price, $dep, $brn);

  if($sql->execute()) {
  $success_message = "Added Successfully";
  } else {
  $error_message = "Problem in Adding New Record";
  }
  $sql->close();   
  $connection->close();
  header("Location: ../data.php");
  } 
?>