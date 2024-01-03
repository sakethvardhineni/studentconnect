
<?php
include('../server.php');
echo "Hello...!!";
if (isset($_POST['feedback'])) 
{
  // receive all input values from the form
  //$email = mysqli_real_escape_string($db, $_POST['email_id'])
  $rid = $_SESSION['R_number'];
  $courseName = $_POST['courseName'];
echo $rid;
echo "CourseName :". $courseName;
  $rating1 = mysqli_real_escape_string($db, $_POST['rating1']);
  $rating2 = mysqli_real_escape_string($db, $_POST['rating2']);
  $rating3 = mysqli_real_escape_string($db, $_POST['rating3']);
  $rating4 = mysqli_real_escape_string($db, $_POST['rating4']);
  $rating5 = mysqli_real_escape_string($db, $_POST['rating5']);

  
  $query = "INSERT INTO instructor_feedback VALUES('$rid', '$courseName', $rating1, $rating2, $rating3, $rating4, $rating5, 'Yes')";
  $result = mysqli_query($db, $query);
  header('location: ../student_course_feedback.php');
  
  #else{
   # echo "" ;
  #}

}
?>