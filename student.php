<?php include('server.php') ?>
<?php include('actions/administrator_student_action.php') ?>
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
    <div class="student">
    <div class="administratorStudentClass">
        <form method="post" action="student.php">
        <?php include('errors.php'); ?>
				<div class="admin_insert_studentDetails">
					<label for="adminRId">RID : </label>
					<input style="color: antiquewhite;" type="adminRIdType" name="adminRid" id="adminRId" placeholder="Enter RID" required>
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
                    <label for="adminAreaOfInterestId">Area of Expertise :</label>
					<input style="color: antiquewhite;" type="adminAreaOfInterestType" name="adminAreaOfInterest" id="adminAreaOfInterest" placeholder="Enter Area Of Interest" required>
					<br>
					<label for="adminConfirmPassId">Confirm Password :</label>
					<input style="color: antiquewhite;" type="adminConfirmPassType" name="adminConfirmPass" id="adminConfirmPassId" placeholder="Confirm New Password" required>
                    <br>
                    <br>
                </div>
				<button type="submit" class="btn btn-success btn-sm" name="adminStudentSubmit">Submit</button>
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