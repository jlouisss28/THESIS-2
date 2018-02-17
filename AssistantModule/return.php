<?php

    $conn =mysqli_connect("localhost","root","");
    mysqli_select_db($conn, "itproject");
    
    $id = $_REQUEST['returnID'];

    if (isset($_REQUEST['returnSupp']) !== ""){
        
        $sql = $conn->prepare("UPDATE returns SET status='Returned' WHERE return_id='".$id."'");

        $sql->execute();

        $sql->close();   
        $conn->close();
    } else {

    }

    header ('Location: dashboard.php');
?> 
