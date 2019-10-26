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
    <title>Calculate Result</title>
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
                        <li><a href="technology.php">Projectss</a></li>
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
      <center><h3>Result (Project ID Wise)</h3></center>
	</li>
  </ul>
</div>
</nav>
<br/>
				
    <div id="content" class="container">

		<form action="calculate_result.php" method="POST" >
			<div class="form-group">
		<input type="number" name="project_id" placeholder="Enter Project ID" class="form-control">
</div>
<div class="form-group">
		<input type="submit" name="Submit" class="btn btn-primary" value="Submit">
</div>	
		</form>
		<?php
		include_once("crud.php");
		$crud = new crud();

		if(isset($_POST['Submit']))
		{	
			$project_id = $_POST['project_id'];
			$query = "SELECT * FROM project_result WHERE project_id='$project_id'";
			$result = $crud->getData($query);
		?>
		<table class="table">
		<th> Project ID </th>
		<th> Student ID </th>
		<th> Marks </th>
		<?php 
		$total = 0;
		foreach ($result as $key => $res) 
		{	
			echo "<tr>";
			echo "<td>".$res['project_id']."</td>";
			echo "<td>".$res['student_id']."</td>";
			echo "<td>".$res['marks']."</td>";	
			echo "</tr>";
			$total += $res['marks']  ;
		}
		
		echo "</table>";
		//echo "<td><a href='result.php?project_id=$res[project_id]&student_id=$res[student_id]&total=$total'>Total Marks</a></td>";
		// return $total;
		echo "<b>Total Marks</b>: ".$total;

		}	
		?>
		
		</div>
		

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
