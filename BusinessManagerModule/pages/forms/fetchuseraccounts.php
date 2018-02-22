<?php
$con=mysqli_connect('localhost','root','','itproject')
    or die("connection failed".mysqli_errno());

$request=$_REQUEST;
$col = array(
    0   =>  'user_id',
    1   =>  'user_type',
    2   =>  'username',
    3   =>  'password',
    4   =>  'lname',
    5   =>  'fname',
    6   =>  'user_contact',
    7   =>  'email'
);  //create column like table in database

$sql ="SELECT * FROM users";
$query=mysqli_query($con,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql ="SELECT * FROM users WHERE 1=1";
if(!empty($request['search']['value'])){
    $sql.=" OR (user_id Like '".$request['search']['value']."%' ";
    $sql.=" OR username Like '".$request['search']['value']."%' ";
    $sql.=" OR password Like '".$request['search']['value']."%' ";
    $sql.=" OR lname Like '".$request['search']['value']."%' ";
    $sql.=" OR fname Like '".$request['search']['value']."%' ";
    $sql.=" OR email Like '".$request['search']['value']."%' ";
}
$query=mysqli_query($con,$sql);
$totalData=mysqli_num_rows($query);

//Order
$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

$query=mysqli_query($con,$sql);

$data=array();

while($row=mysqli_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[2]; 
    $subdata[]=$row[3]; 
    $subdata[]=$row[5];  
    $subdata[]=$row[4]; 
    $subdata[]=$row[6];  
    $subdata[]=$row[7];  


           //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
    $subdata[]='<button type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-id="'.$row[0].'"><i class="glyphicon glyphicon-pencil">&nbsp;</i>Edit</button>
             <a href="useraccounts.php?delete='.$row[0].'" onclick="return confirm(\'Are You Sure ?\')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash">&nbsp;</i>Delete</a>';
    $data[]=$subdata;
}

$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);

?>
