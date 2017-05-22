<?php
// recupiration des infos
$userid = $_GET['userid'];
$username = $_GET['username'];
$userpower = $_GET['userpower'];

// enregistrement des informations
setcookie("userid", $userid, time()+3600);
setcookie("username", $username, time()+3600);
setcookie("userpower", $userpower, time()+3600);

// Redirection
header("Location: tableaudebord.php");  
exit();
 ?>
