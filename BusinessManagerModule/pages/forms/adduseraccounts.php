<?php

$connection=mysqli_connect('localhost','root','','itproject');  
 //CREATE or ADD User
  if (isset($_POST['addUser'])) {
  $sql = $connection->prepare("INSERT INTO users (username, fname, lname, user_contact, password, email) VALUES (?, ?, ?, ?, ?, ?)");  
  $username = $_POST['username'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $user_contact = $_POST['user_contact'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $sql->bind_param("ssssss", $username, $fname, $lname, $user_contact, $password, $email);

  if($sql->execute()) {
  $success_message = "Added Successfully";
  } else {
  $error_message = "Problem in Adding New Record";
  }
  $sql->close();   
  $connection->close();
  header("Location: useraccounts.php");
  } 
?>