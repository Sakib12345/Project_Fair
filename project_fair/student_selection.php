<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Project Fair</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="landing.css">
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
                 
                  <li><a href="student_reg.php"></a></li>
                  </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
        <!--/.nav-ends -->
    </header>
    <!-- container  -->
    <br/>
    
        <div class="box">
            <center><h2 style="color:#ffc629">Login</h2></center>
            
            <p>__________________________________________________________________________________________________</p>
            <br/> 
        <form action="login.php" method="POST" id="box2" class="form-inlin justify-content-center" >	

            <div class="form-group">
                <label style="color:white">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Enter Your Email" required="true">
            </div>
            <div class="form-group">
                <label style="color:white" for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Enter Your Password">
            </div>
                <input type="submit" name="submit" value="Submit" class="btn btn-primary" >
            </div>
            
        </form>
       <div class="h4"> <h4 style="color:#70ffd7">Not Registered?   <a href="signup.php"><button class="btn btn-primary">Sign up</button></a></h4></div>
    </div>
    <img style="width:100%" src="img/transport.jpg"/>
<!-- container end-->
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
                                <p class="post-date">May 25, 2019</p>
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

	//$result_admin=mysqli_query($con,"SELECT * FROM user WHERE email='$email' AND password='$password'");
	$result_teacher=mysqli_query($con,"SELECT * FROM teacher WHERE email='$email' AND password='$password'");
	$result_student=mysqli_query($con,"SELECT * FROM student WHERE email='$email' AND password='$password'");
	// if(mysqli_num_rows($result_admin)>0)
	// {
	// 	while($row=mysqli_fetch_assoc($result_admin))
	// 	{
	// 		header("location:adminHomeDesign.php");
	// 	}
	// }
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