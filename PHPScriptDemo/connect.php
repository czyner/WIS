<?php
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "PHPScriptDemo"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>"; 


// Example query
$sql = "SELECT * FROM Student";
$result = $conn->query($sql);
// Check if the query was successful
if ($result) {
    // Process the results
    while ($row = $result->fetch_assoc()) {
        echo "StudentID: " . $row["StudentID"]. " - FirstName: " . $row["FirstName"]. "",
        " - LastName: " . $row["LastName"]. " - DateOfBirth: " . $row["DateOfBirth"]. "",
        " - Email: " . $row["Email"]. " - Phone: " . $row["Phone"]."<br>";
    }
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM Course";
$result = $conn->query($sql);
// Check if the query was successful
if ($result) {
    // Process the results
    while ($row = $result->fetch_assoc()) {
        echo "CourseID: " . $row["CourseID"]. " - CourseName: " . $row["CourseName"]. "",
        " - Credits: " . $row["Credits"]. "<br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "SELECT * FROM Instructor";
$result = $conn->query($sql);
// Check if the query was successful
if ($result) {
    // Process the results
    while ($row = $result->fetch_assoc()) {
        echo "InstructorID: " . $row["InstructorID"]. " - FirstName: " . $row["FirstName"]. "",
        " - LastName: " . $row["LastName"]. " - Email: " . $row["Email"]. "",
        " - Phone: " . $row["Phone"]."<br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$sql = "SELECT * FROM Enrollment";
$result = $conn->query($sql);
// Check if the query was successful
if ($result) {
    // Process the results
    while ($row = $result->fetch_assoc()) {
        echo "EnrollmentID: " . $row["EnrollmentID"]. " - StudentID: " . $row["StudentID"]. "",
        " - CourseID: " . $row["CourseID"]. " - EnrollmentDate: " . $row["EnrollmentDate"]. "",
        " - Grade: " . $row["Grade"]."<br>";
    }
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();

?>