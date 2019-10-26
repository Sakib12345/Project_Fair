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
			<?php 
			include_once("crud.php");
			$crud = new crud();

			$query = "SELECT event.semester, participant.project_title, participant.language, participant.category, participant.student_id, participant.student_name FROM event INNER JOIN participants as participant WHERE event.event_id=participant.event_id";

			$result = $crud->getData($query);

			?>
			<table class="table" >
			<th> Semester </th>
			<th> Project Title </th>
			<th> Language </th>
			<th> Category </th>
			<th> Participant ID </th>
			<th> Participant Name </th>
			<?php
				foreach ($result as $key => $res) 
				{	
					echo "<tr>";
					echo "<td>".$res['semester']."</td>";
					echo "<td>".$res['project_title']."</td>";
					echo "<td>".$res['language']."</td>";
					echo "<td>".$res['category']."</td>";
					echo "<td>".$res['student_id']."</td>";
					echo "<td>".$res['student_name']."</td>";
					echo "</tr>";
				}
				echo "</table>";
				?>
			
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
