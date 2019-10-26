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
    <title>Teacher</title>
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
                    <img style="height: 60px" src="Images/diu.png">
                       
                </div>
                <div id="navbar" class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                    <li><a href="teacher_tech.php">Projects</a> </li>
                  <li><a href="proList_teacher.php">Previous Project List</a></li>
                  <li><a href="new-add.php">Evaluation</a></li>
                  <li><a href="evaluation.php">Result</a></li>
                  <li><a href="logout.php">Log out</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!--/.nav-ends -->
    </header>

    
	<nav class="navbar navbar-expand-sm bg-danger navbar-dark">
		<div class="container">
	<ul class="navbar-nav">
    <li class="nav-item active">
      <center> <?php
      echo "<h4><center>Teacher Name: $_SESSION[name]</center></h4>";
      ?></center>
	</li>
  </ul>
</div>
</nav>
<br/>

    
      
	<br/>		
    <div id="content" class="container">

		<form action="new-add.php" method="POST" class="form-group">
			<label >Select Type</label><br>
			<select class="form-control" name="category">
			<option id="web">Web Application</option>
			<option id="desktop">Desktop Application</option>
			<option id="mobile">Mobile Application</option>
			<option id="hardware">Hardware Application</option>
		</select><br>
		<input type="submit" class="btn btn-success" name="Submit">
		</form>
		<?php
		include_once("crud.php");
		$crud = new crud();

		if(isset($_POST['Submit']))
		{
			$category = $_POST['category'];
			$query = "SELECT project_id, student_id FROM participants WHERE category='$category'";
			$result = $crud->getData($query);
		?>
			<form method="POST" action="new-add.php">
			<table class="table">
			<th> Project ID </th>
			<th> Participant ID </th>
			<th>Marks</th>
		<?php 
			foreach ($result as $key => $res) 
			{	
				echo "<tr>";
				echo "<td>".$res['project_id']."</td>";
				echo "<td>".$res['student_id']."</td>";
				echo "<td><a href='marksEntry.php?project_id=$res[project_id]&student_id=$res[student_id]'>Assign marks</a></td>";	
			echo "</tr>";
			}	
			echo "</table>";	
		}
		?>
		</form>
		
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
