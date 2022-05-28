<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Student Management System</title>
	<link rel="stylesheet" type="text/css" href="style.css">





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
			<li><a href="index.php">Home</a></li>
			<li><a href="">Contact</a></li>
			<li><a href="admission_apply.php">Admission</a></li>
			<li><a href="login.php" class="btn btn-success">Login</a></li>
		</ul>
	</nav>


<div class="section1">

	<img class="main_img" src="PngItem_3145160.png">

<ASIDE>
            <center>   
            Learn as much as you can while you are young, 
                       since life becomes too busy later
            </center>



            	<center>
		<h1 class="adm">Admission Form</h1>
	</center>

<div align="center" class="Admission_form">

	<form action="data_check.php" method="POST">
		<div class="adm_int">
			<label class="label_text">Name</label>
			<input class="input_deg" type="Text" name="name">
		</div>
		<div class="adm_int">
			<label class="label_text">Email</label>
			<input class="input_deg" type="Text" name="email">
		</div>
		<div class="adm_int">
			<label class="label_text">Phone</label>
			<input class="input_deg" type="Text" name="phone">
		</div>
		<div class="adm_int">
			<label class="label_text">Massage</label>
			<input class="input_deg" type="Text" name="messege">
		</div>
		<div class="adm_int">
			<input class="btn btn-primary" id="Submit" type="submit" value="Apply" name="apply">
		</div>
	</form>
</div>


           </ASIDE>
</div>


       <footer>
           &copy; Prieo's Project 2022
       </footer>
</div>

</body>
</html>