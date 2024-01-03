<?php
include('../server.php');

try {

    $register = $_POST['drop'];
    echo $register;
    if (isset($register)) {
    $submitname = 'course_drop_actions';
    $submitname .= $register;
    echo $submitname;

    if (isset($_POST[$submitname])) {
        $Course_ID = $_POST['drop'];
        $domain_approved = "pending"; // Corrected variable name
        $R_number = $_SESSION["R_number"];
        echo $R_number;
        $sql = "SELECT * FROM courses where Course_ID = $Course_ID";
        $result = mysqli_query($db, $sql);
        $numberofcourse_per_student = "SELECT count(Course_ID) as sak FROM course_approval where R_Number= '$R_number'";
        $result2 = mysqli_query($db, $numberofcourse_per_student);
        if (!$result) {
            throw new Exception("Error in database query: " . mysqli_error($db));
        }

        $row = mysqli_fetch_assoc($result);
        $row2 = mysqli_fetch_assoc($result2);

        if (!$row) {
            throw new Exception("No record found for Course ID: $Course_ID");
        }

        //$Course_name = $row['Course_Name'];
        //echo $Course_name;
        //$Domain = $row['Domain'];
        //echo $Domain;
        //echo $row2[0];

        if ($row2['sak'] == 1) {
            throw new Exception("You cannot drop all the courses ");
           
        } else {
            $sql2 = "delete from course_approval  where R_Number= '$R_number' and Course_ID = $Course_ID ";
            if (mysqli_query($db, $sql2)) {
                echo "hi";
                header('location: ../student_course_registration.php');
            } else {
                echo "hi2";
                throw new Exception("Error inserting data: " . mysqli_error($db));
            }
        }
    }
}
else{
    throw new Exception("Please select the course you want to drop");
}


} 

catch (Exception $e) {
    // Handle exceptions here
    echo "exception";
    echo "<script>alert('Caught exception: " . $e->getMessage() . "'); 
    window.location.href='../student_course_registration.php';</script>";

}


?>
