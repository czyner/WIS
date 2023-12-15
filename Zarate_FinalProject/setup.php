<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname= "Zarate";

// Create connection
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname ";
if ($conn->query($sql) === FALSE) {
  die("Connection failed: " . $conn->connect_error);
} 
//Select Database
$retval = mysqli_select_db( $conn, 'Zarate' );
if(! $retval ) {
  die('Could not select database: ' . mysqli_error($conn));
}
//Create Table
$sql ="CREATE TABLE IF NOT EXISTS Users (
UserID INT PRIMARY KEY,
username varchar(255),
email varchar(255),
password varchar(255)
)";
if ($conn->query($sql) === FALSE) {
  echo "Error creating table: " . $conn->error;
} 

$conn->close();
?>




