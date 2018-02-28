<?php  

if(isset($_POST["action"]))
{
	include('database_connection.php');

	if($_POST["action"] == 'fetch')
	{
		$output = '';
		$query = "SELECT * FROM users";
		$statement = $connect->prepare($query);
		$statement->execute();
		$result = $statement->fetchAll();
		$output .= '
      <section class="content">
  		 <div class="row">
          <div class="col-xs-12">
              <div style="float:right;">
              
                        <th><button type="submit" class="btn btn-primary btn-block btn-warning" data-toggle="modal" data-target="#modal-info">Add</button>
                        
                        <form name="form1" method="post" action="action.php">
                        <div class="modal fade" id="modal-info">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span></button>
                                        <div class="margin">
                                            <h3>Add User Account</h3>
                                          </div>
                                      </div>
                                        <!-- end of modal header -->
                                      <div class="modal-body">
                                        <div class="box-body">
                                               <div class="form-group">
                                                  <label for="exampleInputEmail1">Username</label>
                                                  <input type="text" class="form-control" name="username" required />
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">First Name</label>
                                                  <input type="text" class="form-control" name="fname" required />
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Last Name</label>
                                                  <input type="text" class="form-control" name="lname" required />
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Contact Number</label>
                                                  <input type="number" class="form-control" name="user_contact" required />
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Password</label>
                                                  <input type="password" class="form-control" name="password" required />
                                                </div>
                                                <div class="form-group">
                                                  <label for="exampleInputEmail1">Email</label>
                                                  <input type="email" class="form-control" name="email" required />
                                                </div>
                     
                                        </div>
                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
                                        <button type="submit" class="btn btn-primary" name="addUser">Save User Account</button>
                                      </div>
                                    </div>
                                    <!-- /.modal-content -->
                                    
                                  </div>
                                  <!-- /.modal-dialog -->
                                </div>
                                </form>
                            </th> 
            


</div>
</div>
</div>
<br>
		 <table id="example" class="table table-bordered table-striped" cellspacing="0" width="100%">

            <thead>
            <tr>
                <th>Userame</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <th>Userame</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Contact Number</th>
                <th>Email</th>
                <th>Status</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
            </tfoot>

		
			</tr>
	
		';
		foreach($result as $row)
		{
			$status = '';
			if($row["user_status"] == 'Active')
			{
				$status = '<span class="label label-success"> Active</span>';
			}
			else
			{
				$status = '<span class="label label-danger"> Inactive</span>';
			}
			$output .= '

			<tr>
				<td>'.$row["username"].'</td>
				<td>'.$row["fname"].'</td>
				<td>'.$row["lname"].'</td>
				<td>'.$row["user_contact"].'</td>
				<td>'.$row["user_email"].'</td>
				<td>'.$status.'</td>
				<td>
             <center><button type="button" name="action" class="btn btn-info btn-xs action" data-user_id="'.$row["user_id"].'" data-user_status="'.$row["user_status"].'">Activate/Deactivate</button></td>
				<td>
				<center><button type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-id="'.$row[0].'"><i class="glyphicon glyphicon-pencil">&nbsp;</i>Edit</button>

             <a href="useraccounts.php?delete='.$row[0].'" onclick="return confirm(\'Are You Sure ?\')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash">&nbsp;</i>Delete</a></td>
             
			</tr>
			';
			
		}

	$output .= '</section>';
	echo $output;

	}

	if($_POST["action"] == 'change_status')
	{
		$status = '';
		if($_POST['user_status'] == 'Active')
		{
			$status = 'Inactive';
		}
		else
		{
			$status = 'Active';
		}
		$query = '
		UPDATE users SET user_status = :user_status WHERE user_id = :user_id
		';
		$statement = $connect->prepare($query);
		$statement->execute(
			array(
				':user_status'	=>	$status,
				':user_id'		=>	$_POST['user_id']
			)
		);
		$result = $statement->fetchAll();
		if(isset($result))
		{
			echo '<div class="alert alert-success">User status has been set to <strong>' .$status.'</strong></div>';
		}
	}
}
?>

<?php

$connection=mysqli_connect('localhost','root','','itproject');  
 //CREATE or ADD User
  if (isset($_POST['addUser'])) {
  $sql = $connection->prepare("INSERT INTO users (username, fname, lname, user_contact, password, user_email) VALUES (?, ?, ?, ?, ?, ?)");  
  $username = $_POST['username'];
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $user_contact = $_POST['user_contact'];
  $password = $_POST['password'];
  $user_email = $_POST['email'];
  $sql->bind_param("ssssss", $username, $fname, $lname, $user_contact, $password, $user_email);

  if($sql->execute()) {
  $success_message = "Added Successfully";
  } else {
  $error_message = "Problem in Adding New Record";
  }
  $sql->close();   
  $connection->close();
  header("Location: useraccounts.php");
  } 
?>

<?php
/**
 for display full info. and edit data
 */
// start again
$con=mysqli_connect('localhost','root','','itproject'); 
if(isset($_REQUEST['id'])){
    $id=intval($_REQUEST['id']);
    $sql="select * from users WHERE user_id=$id";
    $run_sql=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run_sql)){
       
        $per_username=$row[2];
        $per_password=$row[3];
        $per_lname=$row[4];
         $per_id=$row[0];
        $per_fname=$row[5];
        $per_usercontact=$row[6];
        $per_email=$row[7];

    }//end while
?>
    <form class="form-horizontal" method="post">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Information</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" method="post">
                    <div class="box-body">
                        <div class="form-group">
                             <div class="form-group">
                            <label hidden="true" class="col-sm-4 control-label" for="txtid">UserID</label>
                            <div class="col-sm-6">
                                <input type="hidden" class="form-control" id="txtid" name="txtid" hidden value="<?php echo $per_id;?>" readonly>
                            </div>
                        </div>
                            <label class="col-sm-4 control-label" for="txtusername">User Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtusername" name="txtusername" value="<?php echo $per_username;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtpassword">Password</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtpassword" name="txtpassword" value="<?php echo $per_password;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtlname">Last Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtlname" name="txtlname" value="<?php echo $per_lname;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtfname">First Name</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="txtfname" name="txtfname" value="<?php echo $per_fname;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtuser_contact">Contact Number</label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" id="txtuser_contact" name="txtuser_contact" value="<?php echo $per_usercontact;?>">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-4 control-label" for="txtemail">Email</label>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" id="txtemail" name="txtemail" value="<?php echo $per_email;?>">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <<div class="modal-footer">
                <a href="useraccountsphp"><button type="button" class="btn btn-danger">Cancel</button> </a>
                <button type="submit" class="btn btn-primary" name="btnEdit">Save</button>
            </div>
        </div>
    </form>
<?php
}//end if
?>




