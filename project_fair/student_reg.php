<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="header">
<div class="card text-center">
  <div class="card-header">
    <h3>Registration Here</h3>
  </div>
  <div class="card-body">
<div id="container" class="container">
            <div class="row text-white">
                <div class="col-sm-6 offset-sm-3 text-center">
                   
                    <div class="info-form">
    <form action="student_reg.php" method="POST"  class="form-inlin justify-content-center" >	
	<div class="container">

    <div class="form-group">
    <label>Name</label>
    <input type="name" class="form-control col-md-12" name="name" id="name" placeholder="Enter Your Name" required="true">
  </div>

	<div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control col-md-12" name="email" id="email" placeholder="Enter Your Email" required="true">
  </div>

  <div class="form-group">
    <label>Number</label>
    <input type="number" class="form-control col-md-12" name="phone" id="phone" placeholder="Phone Number" required="true">
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
include_once("crud.php");
include_once("validation.php");

$crud = new crud();
$validation = new validation();

if(isset($_POST['submit'])) {	
	$name = $crud->escape_string($_POST['name']);
	$email = $crud->escape_string($_POST['email']);
	$phone = $crud->escape_string($_POST['phone']);
	$password = $crud->escape_string($_POST['password']);
		
	$msg = $validation->check_empty($_POST, array('name', 'email', 'phone', 'password'));
	$check_email = $validation->is_email_valid($_POST['email']);
	
	if($msg != null) 
	{
		echo $msg;		
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} 
	elseif (!$check_email) 
	{
		echo 'Please provide proper email.';
	}	
	else 
	{ 	
		$result = $crud->execute("INSERT INTO student(name,email,phone,password) VALUES('$name','$email','$phone','$password')");
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='logindesign.php'>View Result</a>";
	}
}
?>