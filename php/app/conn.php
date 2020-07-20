<?php
$servername = "localhost";
$username = "u607462522_mnetmatters";
$password = "786786ab";
$dbname = "u607462522_mnetmatters";

// Create connection with mysql database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection 
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
