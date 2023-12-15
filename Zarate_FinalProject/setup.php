<?php
$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname= "Zarate";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create Database
$sql = "CREATE DATABASE IF NOT EXISTS $dbname ";


//Select Database
$retval = mysqli_select_db( $conn, 'Zarate' );
/*
      if(! $retval ) {
         die('Could not select database: ' . mysqli_error($conn));
      }
      echo "Database Zarate selected successfully\n";
*/
      
//Create Table
$sql ="CREATE TABLE IF NOT EXISTS Users (
UserID INT PRIMARY KEY,
username varchar(255),
email varchar(255),
password varchar(255)
)";
/*
if ($conn->query($sql) === TRUE) {
  echo "Table Users created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}
*/
// Insert Into Tables
$id = rand(100000,999999);
$name = $_POST['Username'];
$email = $_POST['SignupEmail'];
$password = $_POST['SignupPassword'];
    
$sql = "INSERT INTO users (UserID, username, email, Password) VALUES ('$id', '$name', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "Record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
/*
$sql = "CREATE TABLE Student (
  StudentID int Primary Key, 
  Firstname varchar(255),
  Lastname varchar(255),
  DateOfBirth DATE, 
  Email varchar(255),
  Phone int NOT NULL)";

  if ($conn->query($sql) === TRUE) {
    echo "Student table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$sql = "CREATE TABLE Course (
  CourseID INT Primary Key,
  CourseName varchar(255),
  Credits varchar(255))";

  if ($conn->query($sql) === TRUE) {
    echo "Course table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$sql = "CREATE TABLE Instructor (
  InstructorID int Primary Key,
  Firstname varchar(255),
  Lastname varchar(255),
  Email varchar(255),
  Phone int NOT NULL)";

  if ($conn->query($sql) === TRUE) {
    echo "Instructor table created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$sql = "CREATE TABLE Enrollment (
  EnrollmentID int Primary Key,
  StudentID int,
  CourseID int,
  Foreign Key (StudentID) References Student(StudentID), 
  Foreign Key (CourseID) References Course(CourseID),
  EnrollmentDate DATE,
  Grade int NOT NULL)";
      
  if ($conn->query($sql) === TRUE) {
    echo "Table of Enrollment created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
*/
$conn->close();


?>




