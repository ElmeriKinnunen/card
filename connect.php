<?php
function connect_db() {
 $servername = "localhost";
 $username = "a1800540";
 $password = "faCY3t95b";
 $dbname = "a1800540";
 // Create connection

 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
 } else {
 }
 return $conn;
}
?>
