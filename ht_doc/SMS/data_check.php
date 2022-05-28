<?php 



$host="localhost";

$user="root";

$password="";

$db="sms";


$data=mysqli_connect($host,$user,$password,$db);

if($data===false)
{
	die("connection error");
}

if (isset($_POST['apply'])) 
{
	$data_name=$_POST['name'];
	$data_email=$_POST['email'];
	$data_phone=$_POST['phone'];
	$data_messege=$_POST['messege'];

	$sql="INSERT INTO admission(name,email,phone,messege)
		VALUES ('$data_name','$data_email','$data_phone','$data_messege')"; 
	$result=mysqli_query($data,$sql);

	if($result)
	{
		echo "Apply Success";
	}

	else
	{
		echo "Apply Failed";
	}
}


 ?>