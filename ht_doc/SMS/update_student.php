<?php 



$host="localhost";

$user="root";

$password="";

$db="sms";


$data=mysqli_connect($host,$user,$password,$db);

$id=$_GET['student_id'];

$sql="SELECT * from user WHERE id='$id' ";

$result=mysqli_query($data,$sql);

$info=$result->fetch_assoc();

if (isset($_POST['update'])) 
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];


	$query="UPDATE user SET username='$name',email='$email',phone='$phone',password='$password' WHERE id='$id'";

	$result2=mysqli_query($data,$query);

	if($result2)
	{
		header("location:view_student.php");
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
               <h2><a href="">Update Student</a></h2> 
               <span>Dashboard</span>
            </article>
<center>
    <form action="#" method="POST">
		<div>
			<label class="label_text">Userame</label>
			<input type="Text" name="name" 
			value="<?php echo "{$info['username']}"; ?>">
		</div>
		<div>
			<label class="label_text">Email</label>
			<input type="Text" name="email" 
			value="<?php echo "{$info['email']}"; ?>">
		</div>
		<div>
			<label class="label_text">Phone</label>
			<input type="Text" name="phone"
			value="<?php echo "{$info['phone']}"; ?>">
		</div>
		<div>
			<label class="label_text">Password</label>
			<input type="Text" name="password"
			value="<?php echo "{$info['password']}"; ?>">
		</div>
		<div>
			<input type="submit" class="btn btn-primary" name="update" value="Update">
		</div>
	</form>
</center>

           </SECTion>
       </main>







</body>

</html>