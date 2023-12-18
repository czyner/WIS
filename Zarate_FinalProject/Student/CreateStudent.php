<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
  <p>ADD NEW STUDENT</p>
  <button type="submit"><a href= "../UserDashboard.php">Go Back</a></button>

    <form id="add_student" class="input-group" action="CreateStudent.php" method="POST">
        Firstname: <input type="text" name="firstname"  id="firstname" class="input-field" placeholder="Firstname" required> <br>
        Lastname: <input type="text" name="lastname"  id="lastname" class="input-field" placeholder="Lastname" required> <br>
        Date of Birth: <input type="text" name="birthdate"  id="birthdate" class="input-field" placeholder="YYYY-MM-DD" required> <br>
        Email: <input type="email" name="email" id="email" class="input-field" placeholder="Email" required> <br>
        Phone: <input type="number" name="phone" id="phone" class="input-field" placeholder="Phone Number" required> <br>
        <button type="submit">New Student</a></button> 
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
        $sql = "SELECT StudentID, Firstname, Lastname, DateOfBirth, Email, Phone FROM Student";
        $result = $conn->query($sql);
    //Add User
    $id = rand(100000,999999);
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthdate = $_POST['birthdate'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO Student (StudentID, Firstname, Lastname, DateOfBirth, Email, Phone) VALUES ('$id', '$firstname', '$lastname', '$birthdate', '$email', '$phone')";
    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    
    // Close connection
    $conn->close();
    ?>
   
</body>
</html>
 <!--TRUNCATE table my_table;-->