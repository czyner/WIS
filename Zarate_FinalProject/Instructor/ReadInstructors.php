<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
  <p>VIEW INSTRUCTORS</p>
  <button type="submit"><a href= "../UserDashboard.php">Back</a></button>
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

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<br> Instuctor ID: " . $row["InstructorID"]. " - Firstname: " . $row["Firstname"]. " - Lastname: " . $row["Lastname"]. " - Email: " . $row["Email"]. " - Phone: " . $row["Phone"]. "<br>";
            }
        } else {
            echo "0 results";
        }

    // Close connection
    $conn->close();
    ?>  
</body>
</html>
 <!--TRUNCATE table my_table;-->