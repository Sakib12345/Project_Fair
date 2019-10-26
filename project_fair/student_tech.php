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
	<link rel="stylesheet" type="text/css" href="design.css">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
	<script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.0/js/bootstrap.min.js"></script>
	<title>Languages</title>
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
				<a href="participant.php"><button class="btn btn-success col-sm-4">Participant</button></a>
				<a href="visitor.php"><button class="btn btn-warning col-sm-4">Visitor</button></a>
				<a href="proList_std.php"><button class="btn btn-info col-sm-4">Previous Project List</button></a> 
				<a href="evaluation.php"><button class="btn btn-success col-sm-4">Result</button></a>
				<a href="login.php"><button class="btn btn-warning col-sm-4">Log out</button></a> 
			</aside>
		<div id="content">
		<div id="contentfirsthalf">
		<form action="technology.php" method="POST">
		<label>Select Language</label><br>
		<select name="language">
			<option id="java">Java</option>
			<option id="php">PHP</option>
			<option id="net">.Net</option>
			<option id="javascript">Javascript</option>
			<option id="python">Python</option>
			<option id="c">C</option>
			<option id="c++">C++</option>
		</select><br><br>
		<label>Select Type</label><br>
		<select name="category">
			<option id="web">Web Application</option>
			<option id="desktop">Desktop Application</option>
			<option id="mobile">Mobile Application</option>
			<option id="hardware">Hardware Application</option>
		</select><br><br>
		<input type="submit" class="btn btn-success" name="Submit">

		</form>
	</div>
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
			<table border="1">
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
		<div id = "footer">
			<center>
				<p>Copyright by Rafika Risha and Adnan Mission.2019</p>		
			</center>
		</div>
	</div>
</body>
</html>