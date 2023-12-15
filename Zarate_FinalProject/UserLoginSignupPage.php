<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="UserLoginSignupPage.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body data-new-gr-c-s-check-loaded="14.1086.0" data-gr-ext-installed="">
    <!-- START NAV -->

    <nav id="navbar" class="nav">
      <!--<h2 id="logo">Logo</h2>-->
      <ul class="nav-list-left">
        <li><a href="SISHome.html" class="home">Home</a></li>

      <ul class="nav-list-right">
        <li><a href="AboutUs.html" class="about-us">About Us</a></li>
      </ul>
    </nav>

    <!-- END NAV -->

    <!-- START WELCOME SECTION -->
    <div class="bg-image"></div>
    <div class="bg-text">
        <h1>Student Information System</h1>
        <p>A platform where you can manage data at ease.</p>
    </div>
    <!-- END WELCOME SECTION -->
    <div class="form-box">
        <div class="button-box">
            <div id="btn"></div>
            <button type="button" class="toggle-btn" onclick="userLogin()"><strong>Login</strong></button>
            <button type="button" class="toggle-btn" onclick="userSignup()"><strong>Signup</strong></button>
        </div>
        <form id="userSignup" class="input-group" action="SignupAfterSubmit.php" method="POST">
            <input type="text" name="Username" class="input-field" placeholder="Username" required></input>
            <input type="email" name="SignupEmail" class="input-field" placeholder="Email" required></input>
            <input type="text" name="SignupPassword" class="input-field" placeholder="Password" required></input>
            <button type="submit" class="userSignupSubmitBtn"><a href="SignupAfterSubmit.php">Signup</a></button>
        </form>
        <form id="userLogin" class="input-group" action="setup.php" method="POST">
            <!--<input type="email" name="LoginEmail" class="input-field" placeholder="Email" required></input>
            <input type="text"  name="LoginPassword" class="input-field" placeholder="Password" required></input>
            <button type="submit" class="userLoginSubmitBtn"><a href="UserDashboard.php">Login</a></button>-->
        </form> 
    </div>

    <script>
        //header('Location: UserDashboard.php');
        var x = document.getElementById("userLogin");
        var y = document.getElementById("userSignup");
        var z = document.getElementById("btn");

        function userLogin(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }
        function userSignup(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

    </script>
  </body>
</html>