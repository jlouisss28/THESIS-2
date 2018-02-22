<?php
    $db=mysqli_connect('localhost','root','','itproject')
    or die("connection failed".mysqli_errno());
    
    $full_delivery = $_GET['fullDelivery'];
    $partial_delivery = $_GET['partialDelivery'];
    


    if ($full_delivery = "Full"){
        $sql =("UPDATE supplies SET deliveryStatus='Delivered' WHERE supply_id=''");
        $result = mysqli_query($db,$sql);
    } else {

    }

    if ($partial_delivery = "Partial"){
        $query = ("UPDATE supplies SET = ");
        $result = mysqli_query($db,$query);
    }

    

    //header ('Location: profile.php');
    ?> 
