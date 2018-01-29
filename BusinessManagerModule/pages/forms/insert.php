
<?php
$connect = mysqli_connect("localhost", "root", "", "itproject");
if(isset($_POST["username"], $_POST["fname"], $_POST["lname"], $_POST["user_contact"], $_POST["password"], $_POST["email"]))
{
 $username = mysqli_real_escape_string($connect, $_POST["username"]);
 $fname = mysqli_real_escape_string($connect, $_POST["fname"]);
 $lname = mysqli_real_escape_string($connect, $_POST["lname"]);
 $user_contact = mysqli_real_escape_string($connect, $_POST["user_contact"]);
 $password = mysqli_real_escape_string($connect, $_POST["password"]);
 $email = mysqli_real_escape_string($connect, $_POST["email"]);
 $query = "INSERT INTO users(username, fname, lname, user_contact, password, email) VALUES('$username', '$fname', '$lname', '$user_contact', '$password','$email')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>