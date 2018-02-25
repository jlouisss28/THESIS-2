<?php
$con=mysqli_connect('localhost','root','','itproject')
    or die("connection failed".mysqli_errno());

$request=$_REQUEST;
$col = array(
    0   =>  'orderDate',
    2   =>  'orderTime',
	3   =>  'description',
    4   =>  'quantity',
    5   =>  'unit',
    6   =>  'deliveryDate',
    7   =>  'unitPrice',
	8   =>  'totalAmount'
);  //create column like table in database

$sql ="SELECT * FROM purchaseorder";
$query=mysqli_query($con,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql ="SELECT * FROM purchaseorder WHERE 1=1";
		
if(!empty($request['search']['value'])){
	$sql.=" OR (purchaseOrder_id Like '".$request['search']['value']."%' ";
	$sql.=" OR orderDate Like '".$request['search']['value']."%' ";
    $sql.=" OR orderTime Like '".$request['search']['value']."%' ";
    $sql.=" OR description Like '".$request['search']['value']."%' ";
    $sql.=" OR quantity Like '".$request['search']['value']."%' ";
    $sql.=" OR unit Like '".$request['search']['value']."%' ";
    $sql.=" OR deliveryDate Like '".$request['search']['value']."%' ";
    $sql.=" OR unitPrice Like '".$request['search']['value']."%' ";
	$sql.=" OR totalAmount Like '".$request['search']['value']."%' ";
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
	$subdata[]=$row[0]; 
    $subdata[]=$row[2]; 	 	
    $subdata[]=$row[3];
	$subdata[]=$row[4];	
	$subdata[]=$row[5];
	$subdata[]=$row[6];
	$subdata[]=$row[7];
	$subdata[]=$row[8];
    
           //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
    $subdata[]='<button type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-id="'.$row[0].'"><i class="glyphicon glyphicon-pencil">&nbsp;</i>Edit</button>
             <a href="purchases.php?delete='.$row[0].'" onclick="return confirm(\'Are You Sure to delete the items?\')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash">&nbsp;</i>Delete</a>';
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
