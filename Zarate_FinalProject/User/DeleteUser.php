<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
    <p>DELETE USER</p>
    <button type="submit"><a href= "UserDashboard.php">Go Back</a></button>
    <form id="delete_user" class="input-group" action="DeleteUser.php" method="POST">
        User ID: <input type="number" name="delete_id" id="delete_id" class="input-field" placeholder="User ID" required> <br>
        <button type="submit">Delete</button>
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
        $sql = "SELECT UserID, Username, Email FROM users";
        $result = $conn->query($sql);

    // Delete data
    $retval = mysqli_select_db( $conn, 'Zarate' );
    $idToDelete = $_POST['delete_id'];

    $sql = "DELETE FROM users WHERE UserID=$idToDelete";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    // Close connection
    $conn->close();
    ?>


</body>
</html>
 <!--TRUNCATE table my_table;-->