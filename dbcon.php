<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "marksheet";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}


session_start();
?>