<?php 

error_reporting(0);

$host="localhost";

$user="root";

$password="";

$db="sms";


$data=mysqli_connect($host,$user,$password,$db);


$sql="SELECT * FROM teacher";

$result=mysqli_query($data,$sql);

	if($_GET['teacher_id'])

{
	$t_id=$_GET['teacher_id'];

	$sql2="DELETE FROM teacher WHERE id='$t_id'";

	$result2=mysqli_query($data,$sql2);
	{
		echo "Delete Success";
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




<br>

       <main>
       	<center>
           <SECTion>
           <h1>Teacher's Data</h1>
<br>	
           <table border="2px">
           	<tr>
           		<td style="padding: 20px; font-size: 15px;">Teacher_Name</td>
           		<td style="padding: 20px; font-size: 15px;">Description</td>
           		<td style="padding: 20px; font-size: 15px;">Photo</td>
           		<td style="padding: 20px; font-size: 15px;">Delete</td>
           		<td style="padding: 20px; font-size: 15px;">Update</td>
           	</tr>



<?php 

	while ($info=$result->fetch_assoc())
	{

		?>

       	<tr>
           		<td style="padding: 20px;">
           			<?php echo "{$info['name']}"; ?>
           		</td>
           		<td style="padding: 20px;">
           			<?php echo "{$info['description']}"; ?>
           		</td>

           		<td style="padding: 20px;">
           			<img height="100px" width="100px" src="<?php echo "{$info['image']}" ?>"></td>



           		<td style="padding: 20px;">
           		<?php 
           		echo "<a class='btn btn-danger' href='view_teacher.php?teacher_id={$info['id']}'>Delete</a>"; 
        ?>
           		</td>
           		<td style="padding: 20px;">
           		<?php 
           		echo "<a class='btn btn-primary' href='view_teacher.php?teacher_id={$info['id']}'>Update</a>"; 
        ?>
           		</td>

           	</tr>


         <?php
          

          }

         ?>

           </table>

</center>

           </SECTion>
       </main>


</body>

</html>