<?php
include "includes/database_connect.php";

function fetchLocationData($search){

  $ServerName = "localhost";
  $Username = "root";
  $Password = "123456789";
  $dbName = "webdevproject";
   $data[] = array("latitude"=>0.0,"longitude"=>0.0,"name"=>"kfef3ri");
;

  $conn = mysqli_connect($ServerName,$Username,$Password,$dbName);


  if($search == null){
    $data[] = array("latitude"=>0.0,"longitude"=>0.0,"name"=>"kfef3ri");
  }else{
    $fetchData = mysqli_query($conn,"select * from places where place_id like ".$search." limit 2");

    $data = array();
    while ($row = mysqli_fetch_array($fetchData)) {
      $data[] = array('latitude'=>$row["latitude"],'longitude'=>$row["longitude"],'name'=>$row["place_name"]);
    

    }
  }
  return $data;
}
