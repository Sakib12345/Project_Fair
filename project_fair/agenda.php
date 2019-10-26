<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agenda</title>
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
                        <li><a href="home.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li class="active"><a href="agenda.php">FAQ</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li ><a href="logindesign.php">Sign In</a></li>
                        <li><a href="signup.php">Sign Up</a></li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!--/.nav-ends -->
    </header>

    <section id="top_banner">
        <div class="banner">
            <div class="inner text-center">
                <h2>Show Your Project & Explore Your Creativity</h2>
            </div>
        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12 block">
                    <div class="footer-block">
                        <h3>Agenda</h3>
                        <hr/>
                        <table class="table">
						<tr>
							<td>Phases</td>
							<td>Details</td>
							<td>Responsible Person/Team</td>
						</tr>
						<tr>
							<td>Phase-1: Prepare Event Plan</td>
							<td>Firstly a committee is formed and they decide how, when they arrange the project fair.</td>
							<td>Department Head and Committee</td>
						</tr>
						<tr>
							<td>Phase-2: Execution of Event Plan</td>
							<td>After planning an event is created to declare project date, registration deadline, location, registration link and details.</td>
							<td>Admin</td>
						</tr>
						<tr>
							<td>Phase-3: Ask for Projects</td>
							<td>Students can submit their project proposal by online registration form. They can submit single or group projects in particular category or language.</td>
							<td>Admin and Participants</td>
						</tr>
						<tr>
							<td>Phase-4: Project Showcasing</td>
							<td>On particular project fair date, students are  showing their projects. Teachers and other students see the projects and project features.</td>
							<td>Teachers and Students</td>
						</tr>
						<tr>
							<td>Phase-5: Evaluation of Projects</td>
							<td>Teachers submit marks online after examine the projects and Students who are not participated they can vote to 1 project based on their choice.</td>
							<td>Teacher and Students</td>
						</tr>
						<tr>
							<td>Phase-6: Declare the Final Result</td>
							<td>System takes marks from teacher and vote from students, then calculate it and declare the final result.</td>
							<td>Department Head and Teachers</td>
						</tr>
					</table>    
                    </div>
				</div>
                </div>
                </div>
				

    </section>

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
