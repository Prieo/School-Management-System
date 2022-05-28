<?php 

$host="localhost";

$user="root";

$password="";

$db="sms";


$data=mysqli_connect($host,$user,$password,$db);

if (isset($_POST['add_student'])) 
{
	$username=$_POST['name'];
	$user_email=$_POST['email'];
	$user_phone=$_POST['phone'];
	$user_password=$_POST['password'];
	$usertype="student";

	$check="SELECT * FROM user WHERE username= '$username' ";

	$check_user=mysqli_query($data,$check);

	$row_count=mysqli_num_rows($check_user);

	if($row_count==1)
	{
		echo "Username already Exist";
	}

	else
	{


		$sql="INSERT INTO user(username,email,phone,usertype,password)
		VALUES ('$username','$user_email','$user_phone','$usertype','$user_password')"; 
		$result=mysqli_query($data,$sql);

	if($result)
	{
		echo "Data Uploaded Success";
	}

		else
	{
		echo "Data Uploaded Failed";
	}
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
			<li><a href="">Add Teacher</a></li>
			<li><a href="">View Teacher</a></li>
			<li><a href="">Add Course</a></li>
			<li><a href="">View Course</a></li>
			<li><a href="logout.php" class="btn btn-primary">Logout</a></li>
		</ul>
	</nav>


       <main>
           <SECTion>
            <article>
               <h2><a href="">Add Student</a></h2> 
               <span>Dashboard</span>
            </article>
<center>
    <form action="#" method="POST">
		<div>
			<label class="label_text">Userame</label>
			<input type="Text" name="name">
		</div>
		<div>
			<label class="label_text">Email</label>
			<input type="Text" name="email">
		</div>
		<div>
			<label class="label_text">Phone</label>
			<input type="Text" name="phone">
		</div>
		<div>
			<label class="label_text">Password</label>
			<input type="Text" name="password">
		</div>
		<div>
			<input type="submit" class="btn btn-primary" name="add_student" value="Add Student">
		</div>
	</form>
</center>

           </SECTion>
       </main>











</body>

</html>