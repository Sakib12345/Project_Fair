<?php
session_start();
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
                        
                        <li><a href="agenda.php">FAQ</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li class="active"><a href="login.html">Sign In</a></li>
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



    <section id="login-reg">
        <div class="container">
            <!-- Top content -->
            <div class="row">
                <div class="col-md-6 col-sm-12 forms-right-icons">
                    <div class="section-heading">
                        <h2><span>Our Objectives</span></h2>
                        <p class="subheading">To make an easy process of managing the project fair,
                             we keep the features of categorizes the projects, online evaluation submission, 
                             calculating all the evaluations and announce the final result,
                            event creation of starting the registration, previous awarded projects 
                            list as well as other participated projects list with student list. 
                            As students get the proper information about project fair,
                             it makes them more interested to participate in project fair.</p>
                    </div>
                    <div class="row">
                        <div class="col-xs-2 icon"><i class="fa fa-bullhorn"></i></div>
                        <div class="col-xs-10 datablock">
                            <h4>Powerful Features</h4>
                            <p>There are two different portals – student portal and teacher’s portal.
                                 They need to log in to the system to get and provide information.</p>
                        </div>
                    </div>
                    

                </div>
                <div class="col-md-6 col-sm-12">

                    <div class="form-box">
                        <div class="form-top">
                            <div class="form-top-left">
                                <h3>Login to our site</h3>
                                <p>Enter email and password to log on:</p>
                            </div>
                            <div class="form-top-right">
                                <i class="fa fa-key"></i>
                            </div>
                        </div>
                        <div class="form-bottom">
                        <form action="login.php" method="POST"  class="form-inlin justify-content-center" >	

	<div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" required="true">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
  </div>
	<input type="submit" name="submit" value="Submit" class="btn btn-primary" >
  </div>
	</form>
                        </div>
                    

                   
                </div>

    </section>

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>About</h4>
                        <hr/>
                        <p>Every year our department arranges project fair.
                        An event will create to announce when the registration starts.
                        It's a oppurtunity for students to explore their skill and ideas and also sharing those ideas to others</p>
                    </div>
                </div>

               

                <div class="col-md-3 col-sm-3 col-xs-12 block">
                    <div class="footer-block">
                        <h4>Contact</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li>Mr. Md. Towfiq Ahmed</li>
                            <li>Assistant Coordination Officer</li>
                            <li>Daffodil Tower-04 (Main Campus)</li>
                            <li>E-Mail: sweoffice@daffodilvarsity.edu.bd</li><li>Cell: 01847140012<br>EXT: 168</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-12">
                    <div class="footer-block">
                        <h4>Recent Posts</h4>
                        <hr/>
                        <ul class="footer-links">
                            <li>
                                <a href="#" class="post">Result</a>
                                <p class="post-date">May 25, 2017</p>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section id="bottom-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 btm-footer-links">
                    <a href="#">Privacy Policy</a>
                    <a href="#">Terms of Use</a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12 copyright">
                Developed by <a href="">Rafika Risha, Adnan Shahriar & Md Sakib Al Islam</a> 
					designed by <a href="">Rafika Risha & Md Sakib Al Islam</a>
                </div>
            </div>
        </div>
    </section>
    <div id="panel">
        <div id="panel-admin">
            <div class="panel-admin-box">
                <div id="tootlbar_colors">
                    <button class="color" style="background-color:#1abac8;" onclick="mytheme(0)"></button>
                    <button class="color" style="background-color:#ff8a00;" onclick="mytheme(1)"> </button>
                    <button class="color" style="background-color:#b4de50;" onclick="mytheme(2)"> </button>
                    <button class="color" style="background-color:#e54e53;" onclick="mytheme(3)"> </button>
                    <button class="color" style="background-color:#1abc9c;" onclick="mytheme(4)"> </button>
                    <button class="color" style="background-color:#159eee;" onclick="mytheme(5)"> </button>
                </div>
            </div>

        </div>
        <a class="open" href="#"><span><i class="fa fa-gear fa-spin"></i></span></a>
    </div>

</body>

</html>


<?php
include_once("config.php");
if(isset($_POST["submit"]))
{
	$email=$_SESSION['email']=$_POST['email'];
	$password=$_POST['password'];

	$result_admin=mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND password='$password'");
	$result_teacher=mysqli_query($con,"SELECT * FROM teacher WHERE email='$email' AND password='$password'");
	$result_student=mysqli_query($con,"SELECT * FROM student WHERE email='$email' AND password='$password'");
	if(mysqli_num_rows($result_admin)>0)
	{
		while($row=mysqli_fetch_assoc($result_admin))
		{
			header("location:adminHomeDesign.php");
		}
	}
	if(mysqli_num_rows($result_teacher)>0)
	{
		while($row=mysqli_fetch_assoc($result_teacher))
		{	
			$_SESSION['name'] = $row['name'];
			$_SESSION['phone'] = $row['phone'];
			header("location:teacher_home.php");
		}
	}
	if(mysqli_num_rows($result_student)>0)
	{
		while($row=mysqli_fetch_assoc($result_student))
		{
			$_SESSION['name'] = $row['name'];
			$_SESSION['phone'] = $row['phone'];
			header("location:student_home.php");
		}
	}
	else
	{
		echo "Error!";
	}
}
?>