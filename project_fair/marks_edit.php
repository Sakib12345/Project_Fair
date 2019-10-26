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

    <section id="top-header">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12 top-header-links">
                    <ul class="contact_links">
                      <h3>Daffodil International University</h3>
					  <h4>Teacher Panel</h4>
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
                  <li><a href="teacher_tech.php">Languages</a> </li>
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
	include_once("config.php");
	if(isset($_POST['update']))
	{
		$marks = $_POST['marks'];
		$project_id = $_POST["project_id"];
		$result = mysqli_query($con, "UPDATE project_result SET marks = '$marks' where project_id = $project_id");
		if($result)
		{
			header("location:update.php");
		}
		else
		{
			echo "update error!";
		}
	}
?>	
<?php
	$result = mysqli_query($con, "SELECT * FROM project_result");
	while ($res=mysqli_fetch_array($result))
	{	
		$project_id = $res['project_id'];
		$student_id = $res['student_id'];
		$marks = $res['marks'];
	}
	echo "</table>";
?>
<form action = "marks_edit.php" method = "POST">
	<input type = "number" name = "project_id" readonly = "true" value = "<?php echo $project_id; ?>" />
	<input type = "number" name = "student_id" readonly = "true" value = "<?php echo $student_id; ?>" />
	<input type = "number" name = "marks" value = "<?php echo $marks; ?>" />
	<input type = "hidden" name = "result_id" value = "<?php echo $result_id; ?>" />
	<input type = "submit" name = "update" value = "Update" />
</form>

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
