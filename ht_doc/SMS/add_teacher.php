<?php 

$host="localhost";

$user="root";

$password="";

$db="sms";


$data=mysqli_connect($host,$user,$password,$db);

if (isset($_POST['add_teacher'])) 
{
	$t_name=$_POST['name'];

	$t_description=$_POST['description'];

	$file=$_FILES['image']['name'];

	$dst="./image/".$file;

	$dst_db="image/".$file;

	move_uploaded_file($_FILES['image']['tmp_name'],$dst );

		$sql="INSERT INTO teacher(name,description,image)
		VALUES ('$t_name','$t_description','$dst_db')"; 

		$result=mysqli_query($data,$sql);

	if($result)
	{
		echo "Teacher Added Success";
	}

		else
	{
		echo "Teacher Added Failed";
	}
}


 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin_Dashboard</title>

	<link rel="stylesheet" type="text/css" href="admin.css">


		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>

<body>
<nav>
		<label class="Logo">Prieo Sikkha Niketon</label>
		<ul>
			
			<li><a href="adminhome.php">Home</a></li>
			<li><a href="admission.php">Admission</a></li>
			<li><a href="add_student.php">Add Student</a></li>
			<li><a href="view_student.php">View Student</a></li>
			<li><a href="add_teacher.php">Add Teacher</a></li>
			<li><a href="view_teacher.php">View Teacher</a></li>
			<li><a href="">Add Course</a></li>
			<li><a href="">View Course</a></li>
			<li><a href="logout.php" class="btn btn-primary">Logout</a></li>
		</ul>
	</nav>


       <main>
           <SECTion>
            <article>
               <h2><a href="">Add Teacher</a></h2> 
               <span>Dashboard</span>
            </article>
<center>
    <form action="#" method="POST" enctype="multipart/form-data">
		<div>
			<label class="label_text">Teacher Name</label>
			<input type="Text" name="name">
		</div>
		<div>
			<label class="label_text">Description</label>
			<textarea name="description"></textarea>
		</div>
		<div>
			<label class="label_text">Image</label>
			<input type="file" name="image">
		</div>
		<div> <br>
			<input type="submit" class="btn btn-primary" name="add_teacher" value="Add Teacher">
		</div>
	</form>
</center>

           </SECTion>
       </main>











</body>

</html>