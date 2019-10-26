<?php
session_start();
if(!$_SESSION['email'])
{
	header("location:login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
	<title>Previous Project List</title>
</head>
<body>
	<div id = "wrapper">
		<header>
			<div id = "headertop">
				<h1><center>Department Project Fair</center></h1>
			</div>
			<div id = "headermenu">
				<a href="home.php" id="home">Home</a>
				<a href="agenda.php" id="agenda">Agenda</a>
				<a href="notice.php" id="notice">Notice</a>
				<a href="about.php" id="about">About</a>
				<a href="contact.php" id="contact">Contact</a>
			</div>
		</header>

		<div id = "container">
			<aside>
				<a href="participant_list.php"><button class="btn btn-success col-sm-4">Languages</button></a> 
				<a href="previous_project_list.php"><button class="btn btn-warning col-sm-4">Previous Project List</button></a>
				<a href="new-add.php"><button class="btn btn-info col-sm-4">Result</button></a>
				<a href="teacher_profile.php"><button class="btn btn-success col-sm-4">Profile</button></a>
				<a  href="login.php"><button class="btn btn-warning col-sm-4">Log out</button></a>
			</aside>
		<div id="content">

			<?php 
			include_once("crud.php");
			$crud = new crud();

			$query = "SELECT event.semester, participant.project_title, participant.language, participant.category, participant.student_id, participant.student_name FROM event INNER JOIN participants as participant WHERE event.event_id=participant.event_id";

			$result = $crud->getData($query);

			?>
			<table border="1" >
			<th> Semester </th>
			<th> Project Title </th>
			<th> Language </th>
			<th> Category </th>
			<th> Student ID </th>
			<th> Student Name </th>
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

		<div id = "footer">
			<center>
				<p>Copyright by Rafika Risha and Adnan Mission.2019</p>		
			</center>
		</div>
	</div>

</body>
</html>