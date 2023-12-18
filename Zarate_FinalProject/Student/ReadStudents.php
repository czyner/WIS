<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="../Zarate_FinalProject.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
  <p>VIEW STUDENTS</p>
  <button type="submit"><a href= "../UserDashboard.php">Go Back</a></button>
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
        $sql = "SELECT StudentID, Firstname, Lastname, DateOfBirth, Email, Phone FROM student";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<br> ID: " . $row["StudentID"]. " - Username: " . $row["Firstname"]. "- Lastname". $row["Lastname"]. "- Date of Birth". $row["DateOfBirth"]." - Email: " . $row["Email"]. "- Phone". $row["Phone"]. "<br>";
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