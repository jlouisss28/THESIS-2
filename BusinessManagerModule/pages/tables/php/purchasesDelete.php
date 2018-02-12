<?php 
	$conn =mysqli_connect("localhost","root","");
	mysqli_select_db($conn, "itproject");

	//$desc = $conn->escape_string($_REQUEST('desc'));
	$desc = $_GET['purDelete'];
	$sql = $conn->prepare("DELETE from purchase_orders WHERE description='$desc'");  
	//$sql->bind_param("s", $desc); 
	$sql->execute();
	$sql->close(); 
	$conn->close();
	header('location:../data5.php');		
?>