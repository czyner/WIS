<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="Instructor.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
    <p>UPDATE INSTRUCTOR INFORMATION</p>
    <button type="submit"><a href= "../UserDashboard.php">Back</a></button>
    <form id="update_instructor" class="input-group" action="UpdateInstructor.php" method="POST">
        Instructor ID: <input type="number" name="enter_id" id="enter_id" class="input-field" placeholder="Instructor ID" required> <br>
        Update Firstname: <input type="text" name="firstname"  id="firstname" class="input-field" placeholder="Firstname" > <br>
        Update Lastname: <input type="text" name="lastname"  id="lastname" class="input-field" placeholder="Lastname" > <br>
        Update Email: <input type="email" name="email" id="email" class="input-field" placeholder="Email" > <br>
        Update Phone: <input type="number" name="phone" id="phone" class="input-field" placeholder="Phone Number"> <br>
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
        $sql = "SELECT InstructorID, Firstname, Lastname, Email, Phone FROM Instructor";
        $result = $conn->query($sql);
    
    // Update data
    $idToUpdate = $_POST['enter_id'];
    $updateFirstname = $_POST['firstname'];
    $updateLastname = $_POST['lastname'];
    $updateEmail = $_POST['email'];
    $updatePhone = $_POST['phone'];

    $sql = "UPDATE Instructor SET Firstname='$updateFirstname' WHERE InstructorID=$idToUpdate";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $sql = "UPDATE Instructor SET Lastname='$updateLastname' WHERE InstructorID=$idToUpdate";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $sql = "UPDATE Instructor SET Email='$updateEmail' WHERE InstructorID=$idToUpdate";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $sql = "UPDATE Instructor SET Phone='$updatePhone' WHERE InstructorID=$idToUpdate";

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