<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="User.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
    <p>ADD NEW USER</p>
    <button type="submit"><a href= "../UserDashboard.php">Go Back</a></button>
    <form id="CreateUser" class="input-group" action="CreateUser.php" method="POST">
            <input type="text" name="Username" class="input-field" placeholder="Username" required></input>
            <input type="email" name="SignupEmail" class="input-field" placeholder="Email" required></input>
            <input type="text" name="SignupPassword" class="input-field" placeholder="Password" required></input>
            <button type="submit">Add User Account</a></button>
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

        // Insert Into Tables
        $id = rand(100000,999999);
        $name = $_POST['Username'];
        $email = $_POST['SignupEmail'];
        $password = $_POST['SignupPassword'];
        
        $sql = "INSERT INTO users (UserID, username, email, Password) VALUES ('$id', '$name', '$email', '$password')";
        if ($conn->query($sql) === TRUE) {
            echo "Account created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        // Close connection
        $conn->close();
    ?>
   
</body>
</html>
 <!--TRUNCATE table my_table;-->