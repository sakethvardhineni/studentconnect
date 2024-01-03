<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mentor Connect</title>
    <link rel="stylesheet" href="LoginPage.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="instructor">
    <div class="administratorInstructorClass">
        <form method="post" action="actions/administrator_instructor_action.php">
				<div class="admin_insert_instructordetails">
					<label for="adminEmpId">Employee ID : </label>
					<input style="color: antiquewhite;" type="adminEmployeeIdType" name="adminEmployeeId" id="adminEmpId" placeholder="Enter EmployeeId" required>
					<br>
					<label for="adminFirstNameId">First Name :</label>
					<input style="color: antiquewhite;" type="adminFirstNameType" name="adminFirstName" id="adminFirstNameId" placeholder="Enter First Name" required>
					<br>
                    <label for="adminLastNameId">Last Name :</label>
					<input style="color: antiquewhite;" type="adminLastNameType" name="adminLastName" id="adminLastNameId" placeholder="Enter Last Name" required>
					<br>
                    <label for="adminEmailId">Email :</label>
					<input style="color: antiquewhite;" type="adminEmailType" name="adminEmail" id="adminEmailId" placeholder="Enter Email" required>
					<br>
                    <label for="adminPasswordId">Password :</label>
					<input style="color: antiquewhite;" type="adminPasswordType" name="adminPassword" id="adminPasswordId" placeholder="Enter Password" required>
					<br>
					<label for="adminConfirmPassId">Confirm Password :</label>
					<input style="color: antiquewhite;" type="adminConfirmPassType" name="adminConfirmPass" id="adminConfirmPassId" placeholder="Confirm New Password" required>
                    <br>
                    <label for="adminPublicationId">Publications :</label>
					<input style="color: antiquewhite;" type="adminPublicationType" name="adminPublication" id="adminPublicationId" placeholder="Enter Publications" required>
					<br>
                    <label for="adminAreaOfExpertiseId">Area of Expertise :</label>
					<input style="color: antiquewhite;" type="adminAreaOfExpertiseType" name="adminAreaOfExpertise" id="adminAreaOfExpertiseId" placeholder="Enter Area Of Expertise" required>
					<br>
                    <label for="adminCourseId">Teaching Course ID :</label>
					<input style="color: antiquewhite;" type="adminCourseType" name="adminCourse" id="adminCourseId" placeholder="Enter Course Id" required>
                    <br>
                    <br>
                </div>
				<button type="submit" class="btn btn-success btn-sm" name="adminInstructorSubmit">Submit</button>
                <br>
				<a class="adminSubmit" href="administrator_home_page.php">Back</a>
  		</form>
    </div>
    <div class="logoutAdministrator">
        <a href="main.php"><button class="btn btn-danger">Logout</button>&nbsp;<i class="fa-solid fa-right-from-bracket"></i></a>
    </div>
</div>
</body>
</html>