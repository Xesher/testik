<?php
include('include/include.php');
$ip = $_SERVER['REMOTE_ADDR'];
$realdate = date('Y-m-d');

//$resultsHits = mysqli_query($connection, "SELECT * FROM `hits`");
$resultsIp = mysqli_query($connection, "SELECT * FROM `hits` WHERE `ip` = '$ip'");
if (mysqli_num_rows($resultsIp) == 0) {
     mysqli_query($connection, "INSERT INTO `hits` (`ip`,`datevisitor`) VALUES ('$ip','$realdate')");

} else {
     mysqli_query($connection, "UPDATE `hits` SET datevisitor = '$realdate' WHERE ip = '$ip'");
}

$resultsHits = mysqli_query($connection, "SELECT * FROM `hits` WHERE datevisitor = '$realdate'");
$rowsHits = mysqli_num_rows($resultsHits);