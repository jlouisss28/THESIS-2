<?php
$connect = mysqli_connect("localhost", "root", "", "itproject");
if(isset($_POST["id"]))
{
 $query = "DELETE FROM users WHERE user_ID = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Deleted';
 }
}
?>
