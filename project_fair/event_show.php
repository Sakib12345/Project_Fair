<?php
session_start();
if(!$_SESSION['email'])
{
	header("location:logindesign.php");
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
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="./script/index.js"></script>
</head>

<body id="wrapper">

    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 top-header-links">
                    <ul class="contact_links">
                      <h3>Daffodil International University</h3>
					  <h4>Admin Panel</h4>
                    </ul>
                </div>
                
                </div>
            </div>
        </div>
        </div>

    </section>

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
                        <h1>Project Fair</h1><span>Department of Software Engineering</span></a>
                </div>
                <div id="navbar" class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="technology.php">Languages</a></li>
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
      <center><h3>Event</h3></center>
	</li>
  </ul>
</div>
</nav>
<br/>
			
			<div id="content">
			<?php
			include_once("crud.php");
			$crud = new crud();
			$query = "SELECT * FROM event ORDER BY event_id DESC";
			$result = $crud->getData($query);
			?>
			<table class="table">
			<th> Event Create Date </th>
			<th> Semester </th>
			<th> Event Name </th>
			<th> Location </th>
			<th> Description </th>
			<th> Fair Date </th>
			<th> Registration End Date </th>
			<?php
				foreach ($result as $key => $res) 
				{	
					echo "<tr>";
					echo "<td>".$res['create_date']."</td>";
					echo "<td>".$res['semester']."</td>";
					echo "<td>".$res['event_name']."</td>";
					echo "<td>".$res['location']."</td>";
					echo "<td>".$res['description']."</td>";
					echo "<td>".$res['fair_date']."</td>";
					echo "<td>".$res['end_date']."</td>";
					echo "</tr>";
				}
				echo "</table>";
				?>
			</div>
				
			</div>
		</div>



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
