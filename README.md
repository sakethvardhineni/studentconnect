# Student Mentor Connect

## Project Overview

The "Student Mentor Connect" project aims to transform the learning environment by facilitating personalized connections between students and mentors. The project focuses on efficient course registration and mentor selection, aiming to enhance the overall educational experience. This README provides an overview of the project, its components, team composition, technical specifications, challenges faced, and personal contributions.

## Team Composition

- **Project Manager:** Leads the team with strategic vision and project management expertise.
- **Query Developer:** Optimizes database queries to improve system efficiency.
- **Front-End Developer:** Designs and implements the user interface for a smooth experience.
- **Back-End Developer:** Implements backend logic and functionality for a robust system.

## Project Description

The project introduces a "Student Mentor Connect" portal with three main user roles: instructors, students, and administrators. Instructors have the authority to approve or reject student course requests, students select mentors based on their areas of interest, and administrators manage database records. The project includes features such as course registration, mentor feedback, and a comprehensive feedback system.

## Purpose

The purpose of "Student Mentor Connect" is to simplify and improve course registration and mentoring procedures in a university environment. The project addresses issues such as manual data management, disorganized student and course data, and the lack of a comprehensive overview for personalized course recommendations.

## Scope

The project goes beyond traditional systems by introducing features that allow students to select mentors based on their areas of interest. It includes a holistic feedback mechanism, course approval system, and aims to create a personalized student-mentor connection to enhance the overall educational experience.

## Technical Specifications

### Frontend:
- HTML
- CSS
- JavaScript
- Bootstrap

### Backend:
- MySQL (as the database management system)
- PHP (as the server-side scripting language)

### Development Tools:
- XAMPP
- Visual Studio

## Challenges and Solutions

The project encountered challenges, such as issues in displaying specific course requests and naming problems on the course registration page. Solutions were implemented, including a feature to view and modify course requests and assigning unique names to overcome naming issues.

## Personal Contribution

As the database designer, I focused on designing key tables in Third Normal Form (3NF) to ensure data integrity. Responsibilities included developing the backend for course registration, implementing dynamic course selection based on student interests, and handling mentor responses.

## Work Process

The work process involved collaborative discussions with team members to identify user roles and functionalities. Specific functionalities for instructors, students, and administrators were outlined. The backend for course registration was developed, ensuring efficient data retrieval and storage.



### Learning Outcomes

The project enhanced technical skills in database design, PHP programming, and HTML forms. Practical experience with XAMPP and PHP improved server-side scripting abilities. Valuable insights were gained in creating interactive and user-friendly web interfaces.

### Teamwork and Collaboration

The collaborative nature of the project emphasized teamwork and effective communication. Discussions on mentor recommendations, personalized approaches, and feedback systems demonstrated the importance of collaborative decision-making.

### Challenges Faced

Challenges included security concerns in password change options and issues in displaying specific course requests. Solutions, such as a secure password change process and course request modifications, were implemented to address these challenges.

### Skills Developed

Skills were developed in PHP programming and HTML forms, improving server-side scripting and web development capabilities. The project provided practical experience in addressing real-world challenges in database systems.

## Future Application

The project's focus on PHP and HTML forms expanded technical knowledge, enabling active participation in web development projects. The acquired skills have potential applications in creating interactive and efficient web applications.

## Conclusion

In conclusion, the "Student Mentor Connect" project was transformative, enhancing the learning environment through personalized connections. The collaborative effort broadened understanding of database systems and provided practical skills for real-world applications.


<?php
include('../server.php');

try {

    $register = $_POST['Register'];
    echo $register;
    if (isset($register)) {
    $submitname = 'course_registration_actions';
    $submitname .= $register;
    echo $submitname;

    if (isset($_POST[$submitname])) {
        $Course_ID = $_POST['Register'];
        $domain_approved = "pending"; // Corrected variable name
        $R_number = $_SESSION["R_number"];
        echo $R_number;
        $sql = "SELECT * FROM courses where Course_ID = $Course_ID";
        $result = mysqli_query($db, $sql);
        $numberofcourse_per_student = "SELECT count(Course_ID) as sak FROM course_approval where R_Number= '$R_number' and (Domain_Approval='pending'or Domain_Approval='Approved' )";
        $result2 = mysqli_query($db, $numberofcourse_per_student);
        if (!$result) {
            throw new Exception("Error in database query: " . mysqli_error($db));
        }

        $row = mysqli_fetch_assoc($result);
        $row2 = mysqli_fetch_assoc($result2);

        if (!$row) {
            throw new Exception("No record found for Course ID: $Course_ID");
        }

        if ($row2['sak'] <= 2) {
       
            $sql2 = "INSERT INTO course_approval  VALUES ('$R_number','$Course_ID','$domain_approved')";
            if (mysqli_query($db, $sql2)) {

                header('location: ../student_course_registration.php');
            } else {
     
                throw new Exception("Error inserting data: " . mysqli_error($db));
            }
        } else {
            throw new Exception("You can only register upto 3 courses ");
        }
    }
}
else{
    throw new Exception("Please select the course you want to register");
}

} 

catch (Exception $e) {
    // Handle exceptions here
    echo "exception";
    echo "<script>alert('Caught exception: " . $e->getMessage() . "'); 
    window.location.href='../student_course_registration.php';</script>";

}

?>



![image](https://github.com/sakethvardhineni/studentconnect/assets/132186396/4c22afa1-2085-4e7a-909a-9ac37e2d79aa)



 
This is the course registration page.
 ## References

W3Schools. (2022). PHP Tutorial. Retrieved from https://www.w3schools.com/php/.
W3Schools. (2022). HTML Tutorial. Retrieved from https://www.w3schools.com/html/.
Mozilla Developer Network. (2022). CSS Selectors. Retrieved from https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Selectors.
The project benefitted from insights gained from 'Database Systems: The Complete Book' by Hector Garcia-Molina, Jeffrey D. Ullman, and Jennifer Widom. The book provided valuable guidance on database design principles and implementation strategies. Particularly, Chapter 3 offered insights into achieving third normal form (3NF), enhancing our understanding of relational database normalization, and Chapter 9 contributed to our understanding of [focusing on JDBC and PHP.

