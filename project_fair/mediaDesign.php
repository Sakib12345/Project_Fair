<?php
session_start();
if(!$_SESSION['email'])
{
	header("location:index.php");
}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registration Form</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="media.css">

    <link rel="stylesheet" href="scss/skin.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
</head>

<body id="wrapper">

    <header>
        <nav class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			  </button>
                    <a class="navbar-brand" href="#">
					<img style="height: 60px" src="Images/diu.png">
                </div>
                <div id="navbar" class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                  <li><a href="participant.php">Participant</a> </li>
                  <li><a href="visitor.php">Projects</a></li>
                  <li><a href="proList_std.php">Previous Project List</a></li>
                  <li><a href="evaluation.php">Result</a></li>
                  <li><a href="logout.php">Log out</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!--/.nav-ends -->
    </header>

    
	<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
		<div class="container">
	<ul class="navbar-nav">
    <li class="nav-item active">
      <center> 
		<center><h4>Registration Form for Participating in Project Fair</h4></center>
		
      </center>
	</li>
  </ul>
</div>
</nav>
<br/>
  	
   
<?php
	include_once("crud.php");
	$crud = new crud();
	if(isset($_POST['Save'])) 
	{	
		$event_id = $crud->escape_string($_POST['event_id']);
		$project_title = $crud->escape_string($_POST['project_title']);
		$language = $crud->escape_string($_POST['language']);
		$category = $crud->escape_string($_POST['category']);
		$short_description = $crud->escape_string($_POST['short_description']);
		$member = $crud->escape_string($_POST['member']);
		$std_name = $crud->escape_string($_POST['std_name']);
		$std_id = $crud->escape_string($_POST['std_id']);
		$std_email = $crud->escape_string($_POST['std_email']);
		$std_phone = $crud->escape_string($_POST['std_phone']);

		$result = $crud->execute("INSERT INTO participant (event_id,
		project_title,language,category,short_descrption,member,std_name,
		std_id,std_email,std_phone)
		 VALUES ('$event_id' , '$project_title','$language', '$category','$short_description','$member', 
		 '$std_name', '$std_email', '$std_phone') ");
		
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='participant_list.php'>View Result</a>";
	}
	?>

<div class="container ">
	<div class="bg">
<form method="POST" class="form_container form-inline">

<div class="form-row">
    <div class="form-group col-md-3">
	<label>Event ID</label><br>
	<input type="number" readonly="true" name="event_id" value="<?php echo  $_GET['event_id'];?>">
	</div>
</div>
	
<div class="form-row">
    <div class="form-group col-md-3">
	<label>Project Name</label><br>
	<input type="text"  name="project_title" id="project_title" class="form-control" required="true"> 
	</div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
	<label>Languages</label><br>
	<select class="form-control select1" required="true" name="language">
		<option>C</option>
		<option>ASP .NET</option>
		<option>C#</option>
		<option>PHP</option>
		<option>JAVA</option>
		<option>Other</option>	
	</select>
	</div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
	<label>Category</label><br>
		<select class="form-control select2" required="true" name="category">
			<option>Web Application</option>
			<option>Desktop Application</option>
			<option>Mobile Application</option>
			<option>Hardware Application</option>
		</select>
		</div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
	<label>Objective</label><br>
	<textarea id="description" class="form-control" name="short_description" required="true"></textarea><br>
</div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
	<label>Number of Team Member</label><br>
	<input type="radio" name="member" value="1"> 1 <br>
  	<input type="radio" name="member" value="2"> 2 <br>
  	<input type="radio" name="member" value="3"> 3 <br>
	<input type="radio" name="member" value="4"> 4 <br>  
		</div>
</div>

	  

<div class="form-row">
    <div class="form-group col-md-3">
	<label>Student's Name</label><br>
	<input type="text" id="group" class="form-control" required="true" name="std_name"/>
	</div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
	<label>Student's ID</label><br>
	<input type="number" id="group" class="form-control" required="true" name="std_id"/>
	</div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
	<label>Student's Email</label><br>
	<input type="email" id="group" class="form-control" required="true" name="std_email"/>
	</div>
</div>

<div class="form-row">
    <div class="form-group col-md-3">
	<label>Phone Number</label><br>
	<input type="number" id="group" class="form-control" required="true" name="std_phone"/>
	</div>
</div>

<div>
	<input type="hidden" name="project_id" value="<?php echo $_GET['project_id'];?>">
	<input type="submit" class="btn btn-primary col-md-3" id="btn" name="Save" value="Submit">
</div>
</form>
</div>
</div>
<?php
	$event_id = $crud->escape_string($_GET['event_id']);
	$query = "SELECT event_id FROM event ORDER BY event_id DESC LIMIT 1";
	$result = $crud->getData($query);
	foreach($result as $res)
	{	
		$event_id = $res['event_id'];
	}
	echo "</table>";
?>		
	<br/>		

    <section id="bottom-footer" >
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 copyright">
                    Developed by <a href="">Rafika Risha , Adnan Shahriar & Md Sakib Al Islam</a> designed by 
					<a href="">Rafika Risha & Md Sakib Al Islam</a>
                </div>
            </div>
        </div>
    </section>
   

</body>

</html>
