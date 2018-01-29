<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "itproject");
$columns = array('username', 'fname', 'lname', 'user_contact', 'password', 'email');

$query = "SELECT * FROM users ";

if(isset($_POST["search"]["value"]))
{
 $query .= '
 WHERE username LIKE "%'.$_POST["search"]["value"].'%" 
 OR fname LIKE "%'.$_POST["search"]["value"].'%" OR lname LIKE "%'.$_POST["search"]["value"].'%" 
 OR user_contact LIKE "%'.$_POST["search"]["value"].'%" 
 OR password LIKE "%'.$_POST["search"]["value"].'%" 
 OR email LIKE "%'.$_POST["search"]["value"].'%" 
 ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' 
 ';
}
else
{
 $query .= 'ORDER BY user_ID DESC ';
}

$query1 = '';

if($_POST["length"] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));

$result = mysqli_query($connect, $query . $query1);

$data = array();

while($row = mysqli_fetch_array($result))
{ $sub_array = array();

 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["user_ID"].'" data-column="username">' . $row["username"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["user_ID"].'" data-column="fname">' . $row["fname"] . '</div>';
 $sub_array[] = '<div contenteditable class="update" data-id="'.$row["user_ID"].'" data-column="lname">' . $row["lname"] . '</div>';
  $sub_array[] = '<div contenteditable class="update" data-id="'.$row["user_ID"].'" data-column="user_contact">' . $row["user_contact"] . '</div>';
   $sub_array[] = '<div contenteditable class="update" data-id="'.$row["user_ID"].'" data-column="password">' . $row["password"] . '</div>';
    $sub_array[] = '<div contenteditable class="update" data-id="'.$row["user_ID"].'" data-column="email">' . $row["email"] . '</div>';
 $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row["user_ID"].'">Delete</button>';
 $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM users";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo json_encode($output);

?>