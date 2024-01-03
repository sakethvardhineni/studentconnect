<?php include('server.php'); ?>
<?php include('actions/set_password_actions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Mentor Connect</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="Loginpage.css">

</head>
<body>
    <div class="cotainer">
        <div class="main">
            <div class="welcome">
                <h1>Set Password</h1>
            </div>
			<form method="post" action="set_password.php">
   			 <?php include('errors.php'); ?>
				<div class="lgdetails">
					<label for="email">Email : </label><br>
					<input style="color: antiquewhite;" type="email" name="email_id" id="email" placeholder="Enter Email">
					<br>
					<br>
					<label for="pass">Create New Password :</label><br>
					<input style="color: antiquewhite;" type="password" name="instructor_password_1" id="pass" placeholder="Create new Password">
					<br>
					<br>
					<label for="pas">Confirm New Password :</label><br>
					<input style="color: antiquewhite;" type="password" name="instructor_password_2" id="pas" placeholder="Confirm new Password">
				</div>
				<br>
				<br>
				<button type="submit" class="btn-dark" name="set_instructor_password">Set Password</button>
				<br>
				<a class="btn-dark" href="instructor_login.php">Back</a>
  			</form>
            
        </div>
        
    </div>
</body>
</html>
