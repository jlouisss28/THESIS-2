<?php 
	$conn =mysqli_connect('localhost','root','', 'itproject');

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
	$del_id = $conn->escape_string($_GET['suppDelete']);
	$sql = "DELETE FROM suppliers WHERE suppliers_ID='$del_id'";
	if($result = mysqli_query($conn, $sql)) {
      echo' "Deleted Successfully"';
    } else {
      echo' "Problem in Deleting the Record"';
    }

	//header("Location: ../data3.php");
?>