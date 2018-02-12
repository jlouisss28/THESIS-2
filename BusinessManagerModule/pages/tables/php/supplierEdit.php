<?php
   $conn =mysqli_connect('localhost','root', '', 'itproject');


    $id = $conn->escape_string($_POST['editSuppliers']);
    
    $compName = $conn->escape_string($_POST['compName']);
    $compContact = $conn->escape_string($_POST['compContact']);
    $compAddress = $conn->escape_string($_POST['compAddress']);
    $compProduct = $conn->escape_string($_POST['compProduct']);
    $compStatus = $conn->escape_string($_POST['compStatus']);
    $compRemarks = $conn->escape_string($_POSTT['compRemarks']);

    if ($compName !== ""){
        $sql =("UPDATE suppliers SET company_name='$compName' WHERE suppliers_id='$id'");
        $result = mysqli_query($conn, $sql);
    }

    if ($compContact !== ""){
            $sql =("UPDATE suppliers SET supplier_contact='$compContact' WHERE suppliers_id='$id'");
            $result = mysqli_query($db,$sql);
        }

    if ($compAddress !== ""){
            $sql =("UPDATE suppliers SET address='$compAddress' WHERE suppliers_id='$id'");
            $result = mysqli_query($db,$sql);
        }

    if ($compProduct !== ""){
            $sql =("UPDATE suppliers SET supplier_product='$compProduct' WHERE suppliers_id='$id'");
            $result = mysqli_query($db,$sql);
        }
    if ($compStatus == "Inactive"){
            $sql =("UPDATE suppliers SET supplier_status='Active' WHERE suppliers_id='$id'");
            $result = mysqli_query($db,$sql);
    } elseif ($compStatus == "Active") {
      $sql =("UPDATE suppliers SET supplier_status='Inactive' WHERE suppliers_id='$id'");
            $result = mysqli_query($db,$sql);
    }

    if ($compRemarks !== ""){
            $sql =("UPDATE suppliers SET supplierRemarks='$compRemarks' WHERE suppliers_id='$id'");
            $result = mysqli_query($db,$sql);
        }

//    if (isset($_GET['editSuppliers']) !== ""){
//        $sql = $conn->prepare("UPDATE suppliers SET company_name='$compName', supplier_contact='$compContact', address='$compAddress', supplier_product='$compProduct' WHERE suppliers_id='$id'");
//        if($sql->execute()) {
//          echo' "Edited Successfully"';
//          echo $compName;
//          echo $compContact;
//          echo $compAddress;
//          echo $compProduct;

//        } else {
//          echo' "Problem in Editing Record"';
//        }

//        $sql->close();   
//        $conn->close();

//    }

//    header ('Location: ../data3.php');
    ?> 
