<?php 
	$conn =mysqli_connect("localhost","root","");
	mysqli_select_db($conn, "itproject");

	//$desc_id = $conn->escape_string($_REQUEST('department_ID'));
	$desc_id = $_GET['depDelete'];
	$sql = $conn->prepare("DELETE FROM departments WHERE department_ID='$desc_id'");  
	//$sql->bind_param("s", $desc_id); 
	$sql->execute();
	$sql->close(); 
	$conn->close();
	header('location:../data4.php');		
?>