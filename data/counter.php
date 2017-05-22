<?php

$fdb = new PDO('sqlite:main.sqlite');
$data = array();
$result_one = $fdb->query("SELECT COUNT(ID) FROM PATIENT");
foreach($result_one as $row) {
  $data['patients'] = $row['COUNT(ID)'];
}


$result_one = $fdb->query("SELECT COUNT(ID) FROM CHAMBRE");
foreach($result_one as $row) {
  $data['chambres'] = $row['COUNT(ID)'];
}
$result_one = $fdb->query("SELECT COUNT(ID) FROM PERSONNEL");
foreach($result_one as $row) {
  $data['personnel'] = $row['COUNT(ID)'];
}
$result_one = $fdb->query("SELECT COUNT(ID) FROM SERVICE");
foreach($result_one as $row) {
  $data['service'] = $row['COUNT(ID)'];
}


$json = json_encode( $data);
header("Content-type: application/json");
exit(  $json );

 ?>
