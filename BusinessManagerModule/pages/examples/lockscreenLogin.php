<?php
    require('../../../db.php');
    session_start();
    

    if (isset($_GET['username'])){
      // If form submitted, insert values into the database.
        $username = stripslashes($_GET['username']); // removes backslashes
        $username = mysqli_real_escape_string($conn,$username); //escapes special characters in a string
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn,$password);
        
    //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows == 1){
            $_SESSION['username'] = $username;
            header("Location: ../../dashboard.php"); // Redirect user to index.php
            }else{
                header("Location: errorLockscreen.php");
            }
    }elseif (isset($_GET['username'])){
      // If form submitted, insert values into the database.
        $username = stripslashes($_GET['username']); // removes backslashes
        $username = mysqli_real_escape_string($conn,$username); //escapes special characters in a string
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($conn,$password);
        
    //Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='$password'";
        $result = mysqli_query($conn,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows == 1){
            $_SESSION['username'] = $username;
            header("Location: ../../dashboard.php"); // Redirect user to index.php
            }else{
                header("Location: errorLockscreen.php");
                }
    }
  ?>