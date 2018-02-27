<?php
$connection =mysqli_connect("localhost","root","");
mysqli_select_db($connection, "itproject");

  if (isset($_POST['addDep'])) {
  $sql = $connection->prepare("INSERT INTO departments (department_name, branch_location) VALUES (?, ?)");  
  $depName=$_POST['depName'];
  $branch = $_POST['branch'];
  $sql->bind_param("ss", $depName, $branch); 
  if($sql->execute()) {
  $success_message = "Added Successfully";
  } else {
  $error_message = "Problem in Adding New Record";
  }
  $sql->close();   
  $connection->close();
  } 
  header("Location: ../departments.php");
?>