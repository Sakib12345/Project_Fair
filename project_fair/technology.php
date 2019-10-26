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
    <title>Admin-Technology</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
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
					<img style="height:60px" src="Images/diu.png">  
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
      <center><h3>Language & Platform</h3></center>
	</li>
  </ul>
</div>
</nav>
<br/>
    
                    
        <div id="content" class="container">
		<div id="contentfirsthalf">
		<form action="technology.php" method="POST">
		<label>Select Language</label><br>
		<select name="language" class="form-control col-sm-4" id="sel1">
			<option id="java">Java</option>
			<option id="php">PHP</option>
			<option id="net">.Net</option>
			<option id="javascript">Javascript</option>
			<option id="python">Python</option>
			<option id="c">C</option>
			<option id="c++">C++</option>
		</select><br><br>
		<label>Select Type</label><br>
		<select name="category" class="form-control col-sm-4">
			<option id="web">Web Application</option>
			<option id="desktop">Desktop Application</option>
			<option id="mobile">Mobile Application</option>
			<option id="hardware">Hardware Application</option>
		</select><br><br>
		<input type="submit" class="btn btn-primary" name="Submit" value="Submit" />

		</form>
	</div><br/>
	<div id="contentsecondhalf">
			<?php
			include_once("crud.php");
			$crud = new crud();

			if (isset($_POST['Submit'])) 
			{
				# code...
				$category = $_POST['category'];
				$language = $_POST['language'];

				$query = "SELECT project_id, student_id, student_name, project_title, category, language FROM participants WHERE category='$category' AND language='$language'";
				$result = $crud->getData($query);

				if($result){
				?>
			<table class="table">
			<th> Project ID </th>
			<th> Student ID </th>
			<th> Student Name </th>
			<th> Project Title </th>
			<th> Category </th>
			<th> Language </th>
			<?php 

			foreach ($result as $key => $res) 
			{	
				echo "<tr>";
				echo "<td>".$res['project_id']."</td>";
				echo "<td>".$res['student_id']."</td>";
				echo "<td>".$res['student_name']."</td>";
				echo "<td>".$res['project_title']."</td>";
				echo "<td>".$res['category']."</td>";
				echo "<td>".$res['language']."</td>";
				echo "</tr>";
			}
			echo "</table>";
		}
		else {
			# code...
			echo "<span style='color:red;'>There is no data found in database!</span>";
		}
			}
			?> 	
	</div>
		</div>
</div>
	<br/>		

    <section id="bottom-footer" >
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 copyright">
				Developed by <a href="">Rafika Risha, Adnan Shahriar & Md Sakib Al Islam</a> 
					designed by <a href="">Rafika Risha & Md Sakib Al Islam</a>
                </div>
            </div>
        </div>
    </section>
   

</body>

</html>
