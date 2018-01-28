<?php 
	$conn =mysqli_connect("localhost","root","");
	mysqli_select_db($conn, "itproject");

	//$del_id = $_GET['suppDelete'];
	//if (isset($_GET['suppDelete'])) { 
		//$desc_id = $conn->escape_string($_REQUEST('supplyDesc'));
		//$del_id = $conn->escape_string($_REQUEST['suppDelete']);
	//	$sql = "DELETE FROM supplies WHERE supplierProduct='$del_id'";  
		//$sql->bind_param('i', $_GET['suppDelete']); 
	//	$result = mysqli_query($sql, $query);
		//$sql->execute();
		//$sql->close(); 
		//$conn->close();
	//	header('location:../data3.php');
	//}
	$del_id = $_GET['suppDelete'];
	$sql = $conn->prepare("DELETE FROM suppliers WHERE suppliers_ID='$del_id'");
	$sql->execute();
	$sql->close();
	$conn->close();
	header("Location: ../data3.php");
?>