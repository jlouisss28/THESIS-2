<?php
	require("../../../../db.php");
	if(!empty($_POST["depID"])) {
	$depID = $_POST["depID"];
	$sql = "SELECT * FROM departments GROUP BY branch_location ASC;
	$results = mysqli_query($conn, $sql);

	foreach($results as $branch) { 
	?>
	<option value="<?php echo $branch["department_name"]; ?>"><?php echo $branch["branch_location"]; ?></option>
	<?php 

	}
	}
	header("Location:../data.php");
?>