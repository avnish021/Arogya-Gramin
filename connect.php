<?php 

 $servername = "localhost";
 $username = "arogyagr_arogyagramin";
 $password = "arogyagramin123";
 $dbname = "arogyagr_arogyagramin";
 
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 }
?>