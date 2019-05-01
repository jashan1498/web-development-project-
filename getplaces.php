<?php
include_once "includes/database_connect.php";

if(!isset($_POST['searchTerm'])){
  $fetchData = mysqli_query($conn,"select * from places order by place_name limit 15");
}else{
  $search = $_POST['searchTerm'];
  $fetchData = mysqli_query($conn,"select * from places where place_name like '%".$search."%' limit 15");
}
$data = array();
while ($row = mysqli_fetch_array($fetchData)) {
  $data[] = array("id"=>$row['place_id'], "text"=>$row['place_name']);
}
echo json_encode($data);
