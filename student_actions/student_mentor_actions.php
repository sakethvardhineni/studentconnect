<?php
include('../server.php');

try {


    if (isset($_POST['submitmentor'])) {
        $EID = $_POST['select'];
        $selectedcourse=$_POST['domain'];
        $R_number = $_SESSION["R_number"];
        $sql = " UPDATE student SET Area_of_interest ='$selectedcourse' where R_number = '$R_number' ";
        $result=mysqli_query($db, $sql);
            $sql2 = "INSERT INTO mentor  VALUES ('$R_number','$EID')";
            if (mysqli_query($db, $sql2)) {
                echo "hi";
                header('location: ../student_mentor_selection.php');
            } else {
                echo "hi2";
                throw new Exception("Error inserting data: " . mysqli_error($db));
            }
    }

else{
    throw new Exception("Please select the mentor ");
}
}


catch (Exception $e) {
    // Handle exceptions here
    echo "exception";
    echo "<script>alert('Caught exception: " . $e->getMessage() . "'); 
    window.location.href='../student_mentor_selection.php';</script>";

}


?>
