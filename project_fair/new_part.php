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
    <title>Student</title>
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
                  <li><a href="participant.php">Participant</a> </li>
                  <li><a href="visitor.php">Visitor</a></li>
                  <li><a href="proList_std.php">Previous Project List</a></li>
                  <li><a href="evaluation.php">Result</a></li>
                  <li><a href="loginDesign.php">Log out</a></li>
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
      <center> <?php
      echo "<h4><center>Student Name: $_SESSION[name]</center></h4>";
      ?></center>
	</li>
  </ul>
</div>
</nav>
<br/>

    
      
<br/>		
    <div id="content" class="container">
    <form action="new_part.php" method="POST">
			<label> Current Event</label>
			<input type="number" name="event_id">
			<input type="submit" class="btn btn-success" name="Submit">
		</form> 
		<?php
		include_once("crud.php");
		$crud = new crud();

		if(isset($_POST['Submit']))
		{
			$event_id = $_POST['event_id'];
			$query = "SELECT event_id FROM event ORDER BY event_id DESC LIMIT 1";
			$result = $crud->getData($query);
		?>
			<form method="POST" action="new_part.php">
			<table class="table">
			<th> Event ID </th>
			<th> Apply </th>
		<?php 
			foreach ($result as $key => $res) 
			{	
				echo "<tr>";
				echo "<td>".$res['event_id']."</td>";
				echo "<td><a href='media.php?event_id=$res[event_id]'>Apply</a></td>";	
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
