# Student Mentor Connect

## Table of Contents
- [Introduction](#introduction)
- [Project Overview](#project-overview)
- [Team Composition](#team-composition)
- [Project Description](#project-description)
- [Purpose](#purpose)
- [Scope](#scope)
- [Technical Specifications](#technical-specifications)
- [Challenges and Solutions](#challenges-and-solutions)
- [Personal Contribution](#personal-contribution)
- [Work Process](#work-process)
- [Reflection](#reflection)
- [Learning Outcomes](#learning-outcomes)
- [Teamwork and Collaboration](#teamwork-and-collaboration)
- [Challenges Faced](#challenges-faced)
- [Skills Developed](#skills-developed)
- [Future Application](#future-application)
- [Conclusion](#conclusion)
- [Appendices](#appendices)
- [References](#references)

## Introduction

### Project Overview
Our project, "Student Mentor Connect " aims to transform the environment for learning by
allowing students to select mentors whose expertise closely aligns with their individual areas
of interest. The project's goal is to create a highly personalized and meaningful learning
experience by facilitating a direct match between student interests and mentor expertise. This
novel approach not only strengthens the student-mentor relationship but also maximizes the
significance and effect of the guidance provided. The incorporation of a feedback system
allows students to share their experiences with both registered courses and mentors,
encouraging continuous improvement. Mentors also have the authority to approve course
requests, ensuring an effortless and unique learning journey. Overall, the project aims to
transform the traditional student-instructor dynamic by focusing on the relationship between
student interests and mentor expertise, resulting in a more customized and enriching
educational experience.

### Team Composition
Our project team consists of skilled professionals, each contributing to specific aspects of the development:
- **Project Manager:** Leads with strategic vision and project management expertise.
- **Query Developer:** Optimizes database queries for improved system efficiency.
- **Front-End Developer:** Designs and implements the user interface.
- **Back-End Developer:** Implements backend logic for a robust and responsive system.

Each team member brings a unique set of skills to the project, and as a database designer, I
prioritized the structure of key tables in accordance with the Third Normal Form (3NF).The
"Courses" table stores critical information such as Course_ID, Course_Name, and Domain,
laying the groundwork for effective course registration. The "Course_approval" table stores
approval details such as R_Number, Course_ID, Course_Name, Domain, and
Domain_Approval, allowing students to request courses and track their approval status in one
place.
Complete information about instructors is stored in the "Instructor" table, which includes EID,
First_name, Last_Name, Email, Password, Publications, Area_of_Expert, and Course_Id. The
"Instructor_feedback" table makes feedback collection easier by including parameters such as
Rating1 to Rating5 and a Boolean value for overall feedback.
The "Mentor" and "Mentor_feedback" tables facilitate mentor-student interactions by
capturing mentor details and feedback. The "Student" table, which contains R_Number,
First_Name, Last_Name, Email, Area_of_Interest, and Password, ensures a complete
representation of student information. Finally, the "Administrator" table stores administrative
information like AdminId, FirstName, LastName, Email, and Password.
Within the "Student Mentor Connect" project, I was responsible for developing the backend
for course registration. It displays courses based on a student's declared area of interest and
allows them to request up to three courses. A key feature allows students to drop a course if
the chosen meStudent Mentor Connect
Advance database management system
CS 5356
Saketh Rao Vardhineni
R11840584
Contents
Introduction	2
Project Overview	2
Team Composition:	2
Project Description	4
Purpose	5
Scope	6
Technical Specifications	6
Challenges and Solutions	7
Personal Contribution	7
Role and Responsibilities	7
Work Process	10
Reflection	14
Learning Outcomes	14
Teamwork and Collaboration	14
Challenges Faced	14
Skills Developed	15
Future Application	15
Conclusion	15
Appendices	16
References	19




Introduction

Project Overview


Our project, "Student Mentor Connect " aims to transform the environment for learning by allowing students to select mentors whose expertise closely aligns with their individual areas of interest. The project's goal is to create a highly personalized and meaningful learning experience by facilitating a direct match between student interests and mentor expertise. This novel approach not only strengthens the student-mentor relationship but also maximizes the significance and effect of the guidance provided. The incorporation of a feedback system allows students to share their experiences with both registered courses and mentors, encouraging continuous improvement. Mentors also have the authority to approve course requests, ensuring an effortless and unique learning journey. Overall, the project aims to transform the traditional student-instructor dynamic by focusing on the relationship between student interests and mentor expertise, resulting in a more customized and enriching educational experience.
Team Composition:

Our project team is made up of skilled professionals, each of whom plays an important role in the development of "Student Mentor Connect":

Shireesha Kanikireddy, Project Manager: Leads the team with strategic vision and project management expertise.

Rakshitha Krishnan, Query Developer: Creates and optimizes database queries to improve system efficiency.

Vinith Varma Pathapati, Front-End Developer: Designs and implements the user interface for a smooth and engaging experience.

Vishwasena Raidu Nyaramneni, Back-End Developer: Implements backend logic and functionality, ensuring a robust and responsive system.
Each team member brings a unique set of skills to the project, and as a database designer, I prioritized the structure of key tables in accordance with the Third Normal Form (3NF).The "Courses" table stores critical information such as Course_ID, Course_Name, and Domain, laying the groundwork for effective course registration. The "Course_approval" table stores approval details such as R_Number, Course_ID, Course_Name, Domain, and Domain_Approval, allowing students to request courses and track their approval status in one place.
Complete information about instructors is stored in the "Instructor" table, which includes EID, First_name, Last_Name, Email, Password, Publications, Area_of_Expert, and Course_Id. The "Instructor_feedback" table makes feedback collection easier by including parameters such as Rating1 to Rating5 and a Boolean value for overall feedback.
The "Mentor" and "Mentor_feedback" tables facilitate mentor-student interactions by capturing mentor details and feedback. The "Student" table, which contains R_Number, First_Name, Last_Name, Email, Area_of_Interest, and Password, ensures a complete representation of student information. Finally, the "Administrator" table stores administrative information like AdminId, FirstName, LastName, Email, and Password.
Within the "Student Mentor Connect" project, I was responsible for developing the backend for course registration. It displays courses based on a student's declared area of interest and allows them to request up to three courses. A key feature allows students to drop a course if the chosen mentor does not approve or reject it, providing flexibility in course selection. The backend ensures dynamic course registration, checking, and adapting based on the mentor's response. The database schema is designed to support efficient data retrieval and storage, with tables for courses, mentors, and students. To ensure data integrity, error handling, and validation mechanisms are implemented, and the architecture is designed for scalability.


Project Description 

In our project, there are three main user roles: instructors, students, and administrators.
Instructor:
1)	If an instructor is also a mentor in our system, they have the authority to approve or reject student course requests.
2)	They gain access to view feedback provided by their mentees in their dual role as instructor and mentor.
3)	Regardless of mentor status, all instructors can review feedback specific to the courses they are currently teaching.

Login Page: Instructors access their portal by entering their email and password.
Change Password Page: Enables instructors to change their account password securely.
Home Page: Displays course details, providing a centralized view of their teaching responsibilities.
Mentee Feedback: Allows instructors serving as mentors to view feedback from their assigned students.
Course Feedback: Instructors can assess feedback on the courses they teach, rated on a scale of 1 to 5.
Course Approvals: If an instructor is also a mentor in our system, they have the authority to approve or reject student course requests.
Student:
1)	Students choose mentors based on their areas of interest from a specialized list.
2)	Students can request approval for up to three courses they wish to pursue.
3)	Students can give feedback to the mentor.
4)	Students can provide feedback for the courses they have received approval for from their mentors.

Login Page: Students log in using their email and password to access their personalized portal.
Signup Page: New students can create accounts, providing essential details for registration.
Home Page: Offers a personalized dashboard with relevant information for students.
Mentor Feedback: Enables students to provide ratings (1-5) for their mentors.
Instructor Feedback: Students can provide feedback on the instructors of their enrolled courses.
Mentor Selection: Students choose mentors based on their areas of interest from a specialized list.
Course Registration: Students can request approval for up to three courses they wish to pursue.
Administrator:

1)	Administrators have the capability to execute operations like inserting, deleting, and updating records within the instructor database.
Login Page: Administrators log in using a unique username and password.
Instructor Access: Administrators can perform operations such as inserting, deleting, and updating records in the instructor database.
Student Access: Similar to instructor access, administrators manage student database records.



Purpose

Our database project, "Student Mentor Connect," aims to transform and simplify course registration and student Mentoring procedures in a university environment. The project aims to address critical issues such as manual and disorganized student and course data management, the lack of a comprehensive overview for personalized course recommendations, difficult course registration processes, and inadequate student-Mentor matching. Our goal is to improve the overall learning experience by providing a more organized, efficient, and personalized approach to course registration and Mentoring by implementing a robust database solution. It aims to reduce duplicate, out-of-date, and incomplete data while improving the overall efficiency and effectiveness of the student mentoring system.Our database solution's overall objectives include centralizing and organizing student and course data to improve accuracy, simplifying the course registration process for students, providing personalized course recommendations based on student interests, and implementing a systematic approach to matching students with Mentors who have similar interests and backgrounds.
Scope

The scope of the project extends beyond traditional systems by introducing features that enable students to select mentors based on their areas of interest. This includes a comprehensive feedback mechanism allowing students to provide feedback on courses and mentors, along with specific actions for mentors such as accepting or rejecting course requests. The project's focus is on creating a holistic student-mentor connection to enhance the overall educational experience.

Technical Specifications

Frontend:
HTML
CSS
JavaScript
Bootstrap
Backend:
MySQL (as the database management system)
PHP (as the server-side scripting language)
Development Tools:
XAMPP
Visual Studio


Challenges and Solutions

One of the challenges we encountered in the project was that a student could request a course from the mentor. However, when registering for three courses, the portal displayed a 'thank you for successfully requesting the courses' message without showing the specific courses requested. To address this, we implemented a feature allowing students to view the courses they have requested. Additionally, students now have the option to drop a course and request another if the mentor has not yet approved or rejected the course. We incorporated a 'drop' option on the course registration page for students to remove a course from their list of requests.
In the course registration page, there is a radio button and a submit button for each course displayed on the page, corresponding to the student's area of interest. When attempting to request approval for a course from the mentor, an issue arises where only the last course displayed on the page is submitted. This is because the radio button names are being overwritten. To overcome this challenge, we have assigned a unique name to each radio button using the format 'course_id.' With this approach, the radio button names are not overwritten by the latest name. For each course, a submit button is provided with a dynamically generated name (course_registration_actions + Course_ID). The value of the submit button is set to "Submit.

Personal Contribution

Role and Responsibilities

As part of the database design process, initially, we created  tables
Courses Table: CourseID (Primary Key, VARCHAR(50)), CourseName (VARCHAR(50)), Area_Of_Interest (VARCHAR(50))

Instructor Table: Instructor_Name (VARCHAR(50)), Employee_Id (Primary Key, VARCHAR(50)), Publications (VARCHAR(50)), Area_Of_Interest (VARCHAR(50))

Student Table: RID (Primary Key, VARCHAR(50)), First_Name (VARCHAR(50)), Last_Name (VARCHAR(50)), Area_Of_Interest (VARCHAR(50))

Mentor Table: RID (Primary Key, VARCHAR(50)), Employee_ID (VARCHAR(50)), Employee_Name (VARCHAR(50))

Mentor Feedback Table: RID (Primary Key, VARCHAR(50)), Employee_ID (VARCHAR(50)), Employee_Name (VARCHAR(50)), Rating (INT)

Course Instructor Feedback Table: RID (Primary Key, VARCHAR(50)), Employee_ID (VARCHAR(50)), Employee_Name (VARCHAR(50)), Course_Id (VARCHAR(50)), Rating (INT)

Course Approval Table: RID (Primary Key, VARCHAR(50)), Course_ID (VARCHAR(50)), Course_Name (VARCHAR(50)), Domain (VARCHAR(50)), Domain_Approval (VARCHAR(50))



we introduced a new attribute 'password' with a length of VARCHAR(64). The length is set to 64 because we are hashing the password using SHA-256 before storing it in the Instructor ,Admin and Student tables. Storing hashed passwords enhances security as even if the hashed password is discovered, reversing the process to obtain the original password is computationally impossible.
This is over final schema which is  Third Normal Form (3NF)
Courses Table: CourseID (Primary Key, VARCHAR(50)), CourseName (VARCHAR(50)), Domain (VARCHAR(50))

Instructor Table: EID RID (Primary Key, VARCHAR(50))First_name VARCHAR(50), Last_Name VARCHAR(50), Email VARCHAR(70), Password VARCHAR(64),Publications VARCHAR(50), Area_of_Expert VARCHAR(50), Course_Id VARCHAR(50).

Student Table: RID (Primary Key, VARCHAR(50)), First_Name (VARCHAR(50)), Last_Name (VARCHAR(50)), Email VARCHAR(70), Area_Of_Interest (VARCHAR(50)), ), Password VARCHAR(64).

Mentor Table:  RID (Primary Key, Foreign Key, VARCHAR(50)), Employee_ID (Primary Key, Foreign Key, VARCHAR(50)).

Mentor Feedback Table: R_Number VARCHAR(50), EID VARCHAR(50),MQ1 int ,MQ2 int ,MQ3 int ,MQ4 int ,MQ5 int ,MQ6 int ,MQ7 int ,MQ8 int ,MQ9 int ,MQ10 int ,feedback_completed Boolean.

Course Instructor Feedback Table: R_Number VARCHAR(50), Course_Name VARCHAR(50),Rating1 int, Rating2 int, Rating3 int, Rating4 int, Rating5 int, Feedback Boolean.


Course Approval Table:  RID (Primary Key, Foreign Key, VARCHAR(50)), Course_ID (Primary Key, Foreign Key, VARCHAR(50)), Domain_Approval (VARCHAR(50))

Admin Table: AdminId VARCHAR(50), FirstName VARCHAR(50), LastName VARCHAR(50), Email VARCHAR(70), Password VARCHAR(64)

In the Mentor table, we have included only 'R_Number' and 'EID' since knowing 'EID' allows us to retrieve the Employee name. Similarly, in the Course Approval table, if we know 'course_ID,' we can obtain the 'Course_name.' After modifying the table structure, we need to update the queries that we have used thus far.
As the database designer, I have successfully transformed the schema into Third Normal Form (3NF) .Because there are no transitive or partial dependencies, all tables in the given schema are in Third Normal Form (3NF). Each table is structured to maintain data integrity and avoid redundancy, resulting in a well-organized and normalized database design.
I was responsible for developing the backend for course registration. It displays courses based on a student's declared area of interest and allows them to request up to three courses. A key feature enables students to drop a course if the chosen mentor does not approve or rejected the course .
Work Process
As a database designer, after discussing with teammates and outlining all the project steps, we have identified three user roles: instructor, student, and administrator. Each role has specific functionalities.

For instructors:

1. If an instructor also serves as a mentor, they possess the authority to approve or reject student course requests.
2. In their dual role as instructor and mentor, they can access and view feedback provided by their mentees.
3. All instructors, regardless of mentor status, can review feedback specific to the courses they are currently teaching.

For students:

1. Students choose mentors based on their areas of interest from a specialized list.
2. Students can request approval for up to three courses they wish to pursue.
3. Students can give feedback to their mentors.
4. Students can provide feedback for the courses they have received approval for from their mentors.

For administrators:

1. Administrators have the capability to execute operations such as inserting, deleting, and updating records within the instructor and student tables .

There will be three tables: student table, instructor table, and admin table. The attributes include details like admin/student/instructor number, email, last name, first name, and a hashed password.

As students need to give feedback on mentors and course instructors, two additional tables, mentor feedback table and course feedback table, will store the data. The attributes for mentor feedback include R_Number and Rating, along with a boolean value 'Feedback_Given' to track whether the student has provided feedback. The course feedback table includes R_Number, Course_Name , EID , Rating, and a boolean value 'Feedback_Given'.

As students are required to choose a mentor, a mentor table should be implemented to monitor the mentor selected by  each student

After mentor selection, students need to request courses, and for this, a course approval table is necessary. The attributes are RID , Course_ID , and Domain_Approval. The Domain_Approval field has three categories: 'Pending' when a student requests a course, 'Approved' when the mentor approves the course, and 'Rejected' otherwise.

I was responsible for developing the backend for course registration page.
 
Students can request approval for a maximum of three courses they wish to pursue.

I established a connection to the database.Therefore, we displayed all the  courses where domain matches the student's declared area of interest. Retrieving the Email and R_number from the session allowed me to fetch the student's area of interest from the 'students' table.Additionally, courses will not be displayed if the student has already submitted requests for them.The SQL query is executed using the mysqli_query function, and the result is stored in the $result3 variable.If the query yields available courses, the code enters a loop to display each course in a table row (<tr>).The course name is displayed in one column, accompanied by a radio button for course registration in another column.For each course, a submit button is provided with a dynamically generated name (course_registration_actions + Course_ID). The value of the submit button is set to "Submit.
 
After submitting the form, an action is triggered to insert the R_number, course_id, and Domain_approved (which is currently set as pending) into the table.

 
To Display the courses that are pending which means the course that are not accepted are rejected by the mentor. 
We displayed all the  courses in the course_approval table . Retrieving the Email and R_number from the session allowed me to fetch the student's courses where domain_approval is pending .The SQL query is executed using the mysqli_query function, and the result is stored in the $result_cname  variable. If the query yields available courses, the code enters a loop to display each course in a table row (<tr>).The course name is displayed in one column, accompanied by a radio button for course drop in another column.For each course, a submit button is provided with a dynamically generated name (course_drop_actions + Course_ID). The value of the submit button is set to "Submit.
 
After submitting the form, an action is triggered to delete  the row from the course_approval table where the R_number  and course_ID is equal to the students R_number  and Course_ID is equal to the course the student want to drop .
Reflection

Learning Outcomes

Throughout this project, I have gained valuable technical and personal skills. On the technical side, I learned how to design a relational database and align it with the project's specific requirements. The process involved implementing effective data validation mechanisms, ensuring the integrity and security of the database.My knowledge was applied in the field, where I successfully used XAMPP for local server setup and PHP for server-side scripting. In addition, I improved my understanding of HTML forms.
Teamwork and Collaboration
During the database's creation, we discussed issues came across by students during course registration. We first considered the idea of instructors recommending courses to students. We later looked into a more personalized approach: if a student selects a mentor with expertise in the student's area of interest, the mentor could provide specific guidance. Building on this, we decided to include a feedback system that would allow students to provide feedback on both mentors and registered courses. This feedback would be beneficial to instructors and mentors, as it would provide opportunities for continuous improvement. Following the completion of the database design, we discussed the user interface, specifically how to structure the pages for an intuitive and efficient student-mentor connect portal.
Challenges Faced 
We included a "Change Password" option for students, instructors, and administrators in the portal's initial design. However, in order to improve security, we recognized the possibility of anyone with access to an email ID changing the password. We implemented a more secure process to address this concern. Administrators initially assign students a random password, which is then sent to the student's official email address. When a student wants to change their password for the first time, they must enter the randomly generated password they received in their official email. The student can change their password only if the random password they entered matches the one sent to their official email. This ensures that only the rightful owner of the email ID, who received the original random password, can initiate a password change, preventing unauthorized access.
When registering for three courses, the portal displays 'thank you for successfully requesting the courses' message that did not specify which courses were requested. To overcome this, I implemented a feature allowing students to view and modify their course requests. Additionally, we addressed a naming issue on the course registration page, ensuring proper submission by assigning unique names to each radio button and preventing overwriting, especially when requesting multiple courses.
Skills Developed
I gained valuable skills and knowledge throughout the project, particularly in PHP programming and the use of HTML forms. My PHP hands-on experience improved my server-side scripting abilities, allowing me to implement dynamic functionalities within the web portal. Furthermore, learning HTML forms provided me with a solid foundation for creating interactive and user-friendly interfaces. 
Future Application
Learning PHP and mastering the use of HTML forms increased my technical knowledge, allowing me to actively participate in web development projects. This newfound knowledge has enabled me to look deeper into the dynamic world of server-side scripting, enhancing my abilities to create interactive and efficient web applications.
Conclusion

In conclusion, the "Student Mentor Connect" project has been a valuable and transformative experience, with the goal of improving the learning environment through personalized connections between students and mentors. Personally, I learned important technical skills such as database design and web development tools such as XAMPP and PHP. The project's collaborative nature highlighted the importance of teamwork and effective communication. Addressing issues such as password security and course registration allowed me to put my problem-solving skills to use. The emphasis on student feedback and mentor participation demonstrated a dedication to continuous improvement in the educational experience. Overall, this project broadened my understanding of database systems and provided practical skills for real-world applications, significantly contributing to my advancement in web development and database systems.
Appendices

This PHP code handles the action taken after a student submits a mentor request. It incorporates validation to ensure that if a student clicks 'Submit' without selecting a course, an error message pops up, prompting them to choose a course for registration. Additionally, the code restricts students from selecting more than three courses. If a mentor rejects a course, the student is prevented from requesting that particular course again.

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






 
This is the course registration page.
References

W3Schools. (2022). PHP Tutorial. Retrieved from https://www.w3schools.com/php/.
W3Schools. (2022). HTML Tutorial. Retrieved from https://www.w3schools.com/html/.
Mozilla Developer Network. (2022). CSS Selectors. Retrieved from https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Selectors.
The project benefitted from insights gained from 'Database Systems: The Complete Book' by Hector Garcia-Molina, Jeffrey D. Ullman, and Jennifer Widom. The book provided valuable guidance on database design principles and implementation strategies. Particularly, Chapter 3 offered insights into achieving third normal form (3NF), enhancing our understanding of relational database normalization, and Chapter 9 contributed to our understanding of [focusing on JDBC and PHP.

ntor does not approve or reject it, providing flexibility in course selection. The
backend ensures dynamic course registration, checking, and adapting based on the mentor's
response. The database schema is designed to support efficient data retrieval and storage, with
tables for courses, mentors, and students. To ensure data integrity, error handling, and
validation mechanisms are implemented, and the architecture is designed for scalability.

## Personal Contribution

### Role and Responsibilities
As the database designer, my responsibilities included:
- Prioritizing the structure of key tables in accordance with the Third Normal Form (3NF).
- Implementing tables for courses, mentors, students, and feedback.
- Developing backend logic for course registration, mentor selection, and feedback.

### Work Process
...

## Reflection

### Learning Outcomes
...

### Teamwork and Collaboration
...

### Challenges Faced
...

### Skills Developed
...

## Future Application
...

## Conclusion

...

## Appendices
...

## References
...
