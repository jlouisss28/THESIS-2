<?php 
	$conn =mysqli_connect("localhost","root","");
	mysqli_select_db($conn, "itproject");

	//$desc_id = $conn->escape_string($_REQUEST('supplyDesc'));
	$desc_id = $_POST['medDelete'];
	$sql = $conn->prepare("DELETE FROM supplies WHERE supplyDesc='$desc_id'");  
	//$sql->bind_param("i", $_POST["medDelete"]); 
	$sql->execute();
	$sql->close(); 
	$conn->close();
	header('location:../data.php');		
?>