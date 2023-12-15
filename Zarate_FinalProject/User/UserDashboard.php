<!DOCTYPE html>
<html><head>
    <link rel="stylesheet" href="User/UserDashboard.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,400&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:700&amp;display=swap" rel="stylesheet">
    
  </head>
  <body>
    <h1>Student Information System </h1>

    <div class="UserFeatureButtons">User<br>
      <button type="submit"><a href= "CreateUser.php">Add User</a></button>
      <button type="submit"><a href= "ReadUsers.php">View Users</a></button>
      <button type="submit"><a href= "UpdateUser.php">Edit User</a></button>
      <button type="submit"><a href= "DeleteUser.php">Delete User</a></button>
    </div><br>

    <div class="StudentFeatureButtons">Student<br>
      <button type="submit"><a href= "../Student/CreateStudent.php">Add Student</a></button>
      <button type="submit"><a href= "../Student/ReadStudents.php">View Students</a></button>
      <button type="submit"><a href= "../Student/UpdateStudent.php">Edit Student</a></button>
      <button type="submit"><a href= "../Student/DeleteStudent.php">Delete Student</a></button>
    </div><br>

    <div class="CourseFeatureButtons">Course<br>
      <button type="submit"><a href= "../Course/CreateCourse.php">Add Course</a></button>
      <button type="submit"><a href= "../Course/ReadCourses.php">View Courses</a></button>
      <button type="submit"><a href= "../Course/UpdateCourse.php">Edit Course</a></button>
      <button type="submit"><a href= "../Course/DeleteCourse.php">Delete Course</a></button>
    </div><br>

    <div class="InstructorFeatureButtons">Instructor<br>
      <button type="submit"><a href= "../Instructor/CreateInstructor.php">Add Instructor</a></button>
      <button type="submit"><a href= "../Instructor/ReadInstructor.php">View Instructors</a></button>
      <button type="submit"><a href= "../Instructor/UpdateInstructor.php">Edit Instructor</a></button>
      <button type="submit"><a href= "../Instructor/DeleteInstructor.php">Delete Instructor</a></button>
    </div><br>
    
    <div class="EnrollmentFeatureButtons">Enrollment<br>
      <button type="submit"><a href= "../Enrollments/ReadEnrollments.php">View Enrollments</a></button>
    </div><br>

    <div class="LogoutButton">
      <button type="submit"><a href="../Zarate_FinalProject.php">Logout</a></button>
    </div><br>
    
  </body>
</html>