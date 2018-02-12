<?php
$connection =mysqli_connect("localhost","root","");
mysqli_select_db($connection, "itproject");

  if (isset($_POST['addSuppliers'])) {
    $sql = $connection->prepare("INSERT INTO suppliers (company_name, supplier_contact, address, supplier_product) VALUES (?, ?, ?, ?)");  
    $suppName = $_POST['suppName'];
    $suppContact = $_POST['suppContact'];
    $suppAddress = $_POST['suppAddress'];
    $suppProduct = $_POST['suppProduct'];
    $sql->bind_param("ssss", $suppName, $suppContact, $suppAddress, $suppProduct); 
    if($sql->execute()) {
      echo' "Added Successfully"';
    } else {
      echo' "Problem in Adding New Record"';
    }
    $sql->close();   
    $connection->close();
  }
  header("Location: ../data3.php");
?>