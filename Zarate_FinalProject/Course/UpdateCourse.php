<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="Course.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
    <p>UPDATE COURSE INFO</p>
    <button type="submit"><a href= "../UserDashboard.php">Back</a></button>
    <form id="update_course" class="input-group" action="UpdateCourse.php" method="POST">
        Course ID: <input type="number" name="enter_id" id="enter_id" class="input-field" placeholder="Course ID" required> <br>
        Course Name: <input type="text" name="course_name"  id="course_name" class="input-field" placeholder="Course name" > <br>
        Credits: <input type="text" name="credits"  id="credits" class="input-field" placeholder="Credits"> <br>
        <button type="submit">Update</a></button>
    </form>
    <?php
        $servername = "localhost"; 
        $username = "root"; 
        $password = ""; 
        $dbname = "Zarate"; 
    
        // Create connection
        $conn = new mysqli($servername, $username, $password);
    
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $retval = mysqli_select_db( $conn, 'Zarate' );
        // Select data
        $sql = "SELECT CourseID, CourseName, Credits FROM Course";
        $result = $conn->query($sql);

    // Update data
    $idToUpdate = $_POST['enter_id'];
    $coursename = $_POST['course_name'];
    $credits = $_POST['credits'];

    $sql = "UPDATE Course SET CourseName='$coursename' WHERE CourseID=$idToUpdate";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $sql = "UPDATE Course SET Credits='$credits' WHERE CourseID=$idToUpdate";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close connection
    $conn->close();
    ?>


</body>
</html>
 <!--TRUNCATE table my_table;-->