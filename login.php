<?php
    require('db.php');
    session_start();
    
    $username="";
    $password="";

    if(isset($_POST['username'])){
      $username = $_POST['username'];
     }
    if (isset($_POST['password'])) {
      $password = $_POST['password'];

    }

    $q = 'SELECT * FROM users WHERE username=:username AND password=:password';

    $query = $pdo->prepare($q);

    $query->execute(array(':username' => $username, ':password' => $password));


 if($query->rowCount() == 0){
        echo '<h1> ERROR </h1>';
  //header('Location: index.php?err=1');
 }else{

      $row = $query->fetch(PDO::FETCH_ASSOC);

      session_regenerate_id();
      $_SESSION['sess_user_id'] = $row['user_id'];
      $_SESSION['sess_username'] = $row['username'];
      $_SESSION['sess_userrole'] = $row['user_type'];
        echo $_SESSION['sess_userrole'];

      if( $_SESSION['sess_userrole'] == "BusinessManager"){
       header('Location: BusinessManagerModule/dashboard.php');
       session_write_close();
      }elseif( $_SESSION['sess_userrole'] == "Assistant"){
       header('Location: AssistantModule/dashboard.html');
       session_write_close();
      }else{
        header('Location: SupervisorModule/dashboard.html');
        session_write_close();
      }
  } 
?>