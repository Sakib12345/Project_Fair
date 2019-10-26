<?php
session_start();
if(!$_SESSION['email'])
{
    header("location:login.php");
}
?>


<?php
    include_once("crud.php");
    $crud = new crud();
    if(isset($_POST['Save'])) 
    {   
        $event_id = $crud->escape_string($_POST['event_id']);
        $email = $crud->escape_string($_POST['email']);
        $student_id = $crud->escape_string($_POST['student_id']);
        $student_name = $crud->escape_string($_POST['student_name']);
        $phone = $crud->escape_string($_POST['phone']);
        $develop_semester = $crud->escape_string($_POST['develop_semester']);
        $course_code = $crud->escape_string($_POST['course_code']);
        $category = $crud->escape_string($_POST['category']);
        $language = $crud->escape_string($_POST['language']);
        $project_title = $crud->escape_string($_POST['project_title']);
        $short_description = $crud->escape_string($_POST['short_description']);
        $collaboration_type = $crud->escape_string($_POST['collaboration_type']);
        $id_name = $crud->escape_string($_POST['id_name']);

        $result = $crud->execute("INSERT INTO participants (event_id,email,student_id,student_name,phone,develop_semester,course_code,category,language,project_title,short_description,collaboration_type,id_name) VALUES ('$event_id' ,'$email', '$student_id', '$student_name', '$phone', '$develop_semester', '$course_code', '$category', '$language', '$project_title', '$short_description', '$collaboration_type', '$id_name') ");
        
        echo "<font color='green'>Data added successfully.";
        
    }
    ?>



<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Participant</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="scss/main.css">
    <link rel="stylesheet" href="media.css">

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
                  <li><a href="result_std.php">Result</a></li>
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

<div class="container">
    <form action="media.php" method="POST">
        
<table border="0">
<tr>
    <td colspan="2">
        <center><label>Project Proposal Submission Form</label><br><br></center>
    </td>
</tr>
<tr> 
    <td>Event ID</td>       
    <td><input type="number" readonly="true" name="event_id" value="<?php echo  $_GET['event_id'];?>"></td>
</tr>       

<tr>
    <td>
        <label>Email Address</label><br>
    </td>
    <td>
        <input type="email" name="email" id="email" class="field" required="true"> <br/><br/>
    </td>
</tr>
<tr>
    <td>
        <label>Student ID</label><br>
    </td>
    <td>
        <input type="number" name="student_id" id="student_id" class="field" required="true"> <br/><br/>
    </td>
</tr>
<tr>
    <td>
        <label>Student Name</label><br>
    </td>
    <td>
        <input type="text" name="student_name" id="student_name" class="field" required="true"> <br/><br/>
    </td>
</tr>
<tr>
    <td>
        <label>Phone Number</label><br>
    </td>
    <td>
        <input type="number" name="phone" id="phone" class="field" required="true"> <br/><br/>
    </td>
</tr>
<tr>
    <td>
        <label>Select Semester</label><br>
    </td>
    <td>
        <select class="field" required="true" name="develop_semester">
            <option>First</option>
            <option>Second</option>
            <option>Third</option>
            <option>Fourth</option>
            <option>Fifth</option>
            <option>Sixth</option>
            <option>Seventh</option>
            <option>Eighth</option>
            <option>Ninth</option>
            <option>Tenth</option>
            <option>Eleventh</option>
        </select><br><br>
    </td>
</tr>
<tr>
    <td>
        <label>Course Code</label><br>
    </td>
    <td>
        <input type="text" name="course_code" id="course_code" class="field" required="true"> <br/><br/>
    </td>
</tr>
<tr>
    <td>
        <label>Category</label><br>
    </td>
    <td>
        <select class="field" required="true" name="category">
            <option>Web Application</option>
            <option>Desktop Application</option>
            <option>Mobile Application</option>
            <option>Hardware Application</option>
        </select><br><br>
    </td>
</tr>
<tr>
    <td>
        <label>Languages</label><br>
    </td>
    <td>
        <select class="field" required="true" name="language">
            <option>C</option>
            <option>ASP .NET</option>
            <option>C#</option>
            <option>PHP</option>
            <option>JAVA</option>
            <option>Other</option>  
        </select><br><br>
    </td>
</tr>
<tr>
    <td>
        <label>Project Title</label><br>
    </td>
    <td>
        <input type="text" name="project_title" id="project_title" class="field" required="true"> <br/><br/>
    </td>
</tr>   
<tr>
    <td>
        <label>Short Description</label><br>
    </td>
    <td>
        <textarea id="description" class="field" name="short_description" required="true">Write here...</textarea><br><br>
    </td>
</tr>
<tr>
    <td>
        <label>Collaboration type</label><br>
    </td>
    <td>
        <select id="type" class="field" required="true" name="collaboration_type">
            <option>Single</option>
            <option>Group</option>
        </select><br><br>
    </td>
</tr>
<tr>
    <td>
        <label>If group then write down the IDs and Name of all members</label><br>
    </td>
    <td>
        <textarea id="group" class="field" required="true" name="id_name">Write here...</textarea><br><br>
    </td>
</tr>   
<tr>
    <td><input type="hidden" name="project_id" value="<?php echo $_GET['project_id'];?>"></td>
    
</tr>
<tr>
    <td colspan="2">
        <td><input type="submit" name="Save" value="Save"></td>
    </td>
</tr>       
</table>
</form>
<?php
    $event_id = $crud->escape_string($_GET['event_id']);
    $query = "SELECT event_id FROM event ORDER BY event_id DESC LIMIT 1";
    $result = $crud->getData($query);
    foreach($result as $res)
    {   
        $event_id = $res['event_id'];
    }
    echo "</table>";
?>      


    </form>     

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
