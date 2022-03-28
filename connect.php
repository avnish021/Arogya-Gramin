<?php 
$hostIp = array(
    '127.0.0.1',
    '::1'
);
 $servername = "localhost";
 $username = "";
 $password = "";
 $dbname = "arogyagr_arogyagramin_support";

 if(in_array($_SERVER['REMOTE_ADDR'], $hostIp))
 {
    $username = "root";
    $password = "";
 }else{
    $username = "arogyagr_arogyagramin";
    $password = "arogyagramin123";
 }
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
