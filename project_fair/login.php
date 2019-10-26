<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="header">
<div class="card text-center">
  <div class="card-header">
    <h3>Login</h3>
  </div>
  <div class="card-body">
<div id="container" class="container">
            <div class="row text-white">
                <div class="col-sm-6 offset-sm-3 text-center">
                   
                    <div class="info-form">
    <form action="login.php" method="POST"  class="form-inlin justify-content-center" >	
	<div class="container">
	<div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control col-md-12" name="email" id="email" placeholder="Enter Your Email" required="true">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control col-md-12" name="password" id="password" placeholder="Enter Your Password">
  </div>
	<input type="submit" name="submit" value="Submit" class="btn btn-primary" >
  </div>
	</form>
    </div>
    </div>
    </div>
   
  </div>
</div>
</div>
</body>
</html>

<?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	$email=$_SESSION['email']=$_POST['email'];
	$password=$_POST['password'];

	$result_admin=mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND password='$password'");
	$result_teacher=mysqli_query($con,"SELECT * FROM teacher WHERE email='$email' AND password='$password'");
	$result_student=mysqli_query($con,"SELECT * FROM student WHERE email='$email' AND password='$password'");
	if(mysqli_num_rows($result_admin)>0)
	{
		while($row=mysqli_fetch_assoc($result_admin))
		{
			header("location:adminHomeDesign.php");
		}
	}
	if(mysqli_num_rows($result_teacher)>0)
	{
		while($row=mysqli_fetch_assoc($result_teacher))
		{	
			$_SESSION['name'] = $row['name'];
			$_SESSION['phone'] = $row['phone'];
			header("location:teacher_home.php");
		}
	}
	if(mysqli_num_rows($result_student)>0)
	{
		while($row=mysqli_fetch_assoc($result_student))
		{
			$_SESSION['name'] = $row['name'];
			$_SESSION['phone'] = $row['phone'];
			header("location:student_home.php");
		}
	}
	else
	{
		echo "Error!";
	}
}
?>