<?php
$con=mysqli_connect('localhost','root','','itproject')
    or die("connection failed".mysqli_errno());

$request=$_REQUEST;
$col = array(
    0   =>  'department_id',
    1   =>  'department_name',
    2   =>  'branch_location',
    3   =>  'requisition_id',
    4   =>  'supply_id',
    5   =>  'user_id',
);  //create column like table in database

$sql ="SELECT * FROM departments";
$query=mysqli_query($con,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql ="SELECT * FROM departments WHERE 1=1";
if(!empty($request['search']['value'])){
    $sql.=" OR (department_id Like '".$request['search']['value']."%' ";
    $sql.=" OR department_name Like '".$request['search']['value']."%' ";
    $sql.=" OR branch_location Like '".$request['search']['value']."%' ";
    $sql.=" OR requisition_id Like '".$request['search']['value']."%' ";
    $sql.=" OR supply_id Like '".$request['search']['value']."%' ";
    $sql.=" OR user_id Like '".$request['search']['value']."%' ";
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
    $subdata[]=$row[1]; 
    $subdata[]=$row[2]; 



           //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
    $subdata[]='<button type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-id="'.$row[0].'"><i class="glyphicon glyphicon-pencil">&nbsp;</i>Edit</button>
             <a href="departments.php?delete='.$row[0].'" onclick="return confirm(\'Are You Sure ?\')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash">&nbsp;</i>Delete</a>';
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
