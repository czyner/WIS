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
//Users
$sql ="CREATE TABLE IF NOT EXISTS Users (
UserID INT PRIMARY KEY,
username varchar(255),
email varchar(255),
password varchar(255)
)";
if ($conn->query($sql) === FALSE) {
  echo "Error creating table: " . $conn->error;
}

//Student
$sql = "CREATE TABLE IF NOT EXISTS Student (
  StudentID int Primary Key, 
  Firstname varchar(255),
  Lastname varchar(255),
  DateOfBirth DATE, 
  Email varchar(255),
  Phone int NOT NULL
  )";
  if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error;
  } 

//Course
$sql = "CREATE TABLE IF NOT EXISTS Course (
  CourseID INT Primary Key,
  CourseName varchar(255),
  Credits varchar(255))";

  if ($conn->query($sql) === TRUE) {
    echo "Course table created successfully <br>";
  } else {
    echo "Error creating table: " . $conn->error;
  }

//Instructor
$sql = "CREATE TABLE IF NOT EXISTS Instructor (
  InstructorID int Primary Key,
  Firstname varchar(255),
  Lastname varchar(255),
  Email varchar(255),
  Phone int NOT NULL)";
  
  if ($conn->query($sql) === TRUE) {
    echo "Instructor table created successfully <br>";
  } else {
    echo "Error creating table: " . $conn->error;
  }

  //Enrollment
$sql = "CREATE TABLE IF NOT EXISTS Enrollment (
    EnrollmentID int Primary Key,
    StudentID int,
    CourseID int,
    Foreign Key (StudentID) References Student(StudentID), 
    Foreign Key (CourseID) References Course(CourseID),
    EnrollmentDate DATE,
    Grade int NOT NULL)";
        
    if ($conn->query($sql) === TRUE) {
      echo "Table of Enrollment created successfully <br>";
    } else {
      echo "Error creating table: " . $conn->error;
    }
$conn->close();
?>




