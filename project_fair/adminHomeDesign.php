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
    <title>Login</title>
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
    <nav class="navbar navbar-expand-sm bg-success">
		<div class="container">
        <h3>Admin Panel</h3>
</div>
</nav>
    

    
                    <div class="footer-block">
                    <div id="content">

<div id="demo" class="carousel slide" data-ride="carousel">

    <!-- The slideshow -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Images/admin_p1.jpg" alt="photo1" width="100%" height="100%">
        </div>
    </div>

</div>
</div>
				

    <section id="bottom-footer">
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
