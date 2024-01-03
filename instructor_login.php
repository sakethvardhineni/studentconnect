<?php include('server.php') ?>
<?php include('actions/instructor_login_action.php') ?>


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
                <h1>Instructor Login</h1>
            </div>

			<form method="post" action="instructor_login.php">
    		<?php include('errors.php'); ?>
				<div class="lgdetails">
					<label for="email">Email : </label><br>
					<input style="color: antiquewhite;" type="email" name="instructor_email" id="email" placeholder="Username">
					<br>
					<br>
					<label for="pass">Password :</label><br>
					<input style="color: antiquewhite;" type="text" name="instructor_password" id="password" placeholder="Enter Password">
				</div>
				<br>
				<div class="checkbox">
					<input type="checkbox" name="check" id="remember">
					<label for="remember">Remember me</label>
				</div>
				<br>
				<button type="submit" class="btn btn-dark btn-lg" name="login_instructor">Login</button>
				<br>
				<br>
				<div class="signup">
					<a class="btn-dark" href="main.php">Back</a>
					<a style="text-decoration: none;" href="set_password.php"><p>Don't have an account ? </p></a>
				</div>
			</form>
        </div>
        
    </div>
    
</body>
</html>