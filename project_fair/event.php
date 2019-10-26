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
    <title>Event</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="scss/skin.css">
    <link rel="stylesheet" href="landing.css">

	
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
                        <li><a href="technology.php">Projects</a></li>
                        <li><a href="event.php">Event</a></li>
                        <li><a href="teacher_list.php">Teachers</a></li>
                        <li><a href="calculate_result.php">Result</a></li>
                        <li ><a href="logout.php">Log Out</a></li>
                    </ul>
                </div>
				<!--/.nav-collapse -->
				
            </div>
		</nav>
	
        <!--/.nav-ends -->
    </header>
	<nav class="navbar navbar-expand-sm bg-info navbar-dark">
		<div class="container">
	<ul class="navbar-nav">
    <li class="nav-item active">
      <center><h3>Event Creation</h3></center>
	</li>
  </ul>
</div>
</nav>
<br/>
		<div id="design">	
<div id="content" class="container">

				<form method="POST" id="design2" >
				<div class="row">
				
					<div class="form-group">
						
   						<label>Event Create Date</label>
    					<input type="date" class="form-control" id="create_date" name="create_date">
  					</div>
				

				<div class="form-group">
					
				<label>Semester</label>
    					<select name="semester" class="form-control col-sm-4">
						<option id="71mil">Spring</option>
						<option id="Bhall">Summer</option>
						<option id="Blounge">Fall</option>
					</select>
					</div>
				  <div class="form-group">
					
    				<label>Event Name</label>
    				<input type="text" class="form-control" id="event_name" name="event_name" placeholder="Enter Event Name">
				  
				  </div>
				  <div class="form-group">
				  <label>Location</label>
					<select name="location" class="form-control col-sm-4">
						<option id="71mil">DT-5, 71 Milanayoton</option>
						<option id="Bhall">DT-5, Banquate Hall</option>
						<option id="Blounge">DT-4, Big Lounge</option>
						<option id="PCA">Parmanent Campus, Auditorium</option>
					</select>
					</div>

  				<div class="form-group">
   					<label>Description</label>
    				<textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
  				</div>
				  <div class="form-group">
				  <label>Fair Date</label>
    				<input type="date" class="form-control" id="fair_date" name="fair_date">
					</div>

				<div class="form-group">
    				<label>Registration End Date</label>
    				<input type="date" class="form-control" id="end_date" name="end_date">
  				</div>
				  
  			<br><button type="submit" name="submit" class="btn btn-primary">Create Event</button>
			  </div>
			</form>
</div>
			<?php
			include_once("crud.php");

			$crud = new crud();

			if(isset($_POST['submit'])) 
			{	
				$create_date = $crud->escape_string($_POST['create_date']);
				$semester = $crud->escape_string($_POST['semester']);
				$event_name = $crud->escape_string($_POST['event_name']);
				$location = $crud->escape_string($_POST['location']);
				$description = $crud->escape_string($_POST['description']);
				$fair_date = $crud->escape_string($_POST['fair_date']);
				$end_date = $crud->escape_string($_POST['end_date']);
			
				$result = $crud->execute("INSERT INTO event(create_date,semester,event_name,location,description,fair_date,end_date) VALUES ('$create_date','$semester','$event_name','$location','$description','$fair_date','$end_date')");
				echo "<font color='green'>Data added successfully.";
				echo "<a href='event_show.php'>View Result</a>";
			}
			?>

			</div>
				
			</div>
		</div>
</br>

    <section id="bottom-footer" >
        <div class="container">
            <div class="row">
                <div class=" copyright">
				Developed by <a href="">Rafika Risha, Adnan Shahriar & Md Sakib Al Islam</a> 
					designed by <a href="">Rafika Risha & Md Sakib Al Islam</a>
                </div>
            </div>
        </div>
    </section>
   

</body>

</html>
