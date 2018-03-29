
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>TEACHER LOGIN  </title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/login.css">

</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4 col-md-3 col-sm-2" id="left"></div>
		<div class="col-lg-4 col-md-6 col-sm-8" id="middle">
		<br>
		<div id="box">
			<br>
			<h2 class="text-grey text-center">STUDENT LOGIN</h2>
			<hr>
			<form method="post" action="">
				<input type="text" name="rollno" class="form-control" placeholder="Enter Roll no:" required maxlength="40" data-toggle="popover" data-placement= bottom"><br>
				<input type="password" name="password" class="form-control" placeholder="Enter password:" required maxlength="20"><br>
				<div class="row">
				<h4 class="ml-3"> Select Year: </h4><select class="form-control col-lg-4 ml-3" name="year">
					<option value="FE">FE</option>
					<option value="SE">SE</option>
					<option value="TE">TE</option>
					<option value="BE">BE</option>

                 </select>
             </div>
				<div class="text-center">
				<button class=" button button1 btn btn-outline-primary m-4" name="login_user">Login</button>
				</div>
			</form>
			<br>
		</div>
		</div>
		<div class="col-lg-4 col-md-3 col-sm-2" id="right"></div>
	</div>
</div>
<br>
<br>
<br>
</html>

<?php
session_start();
include '../connect.php';
$connect = connect_to_database();

	if (isset($_POST['login_user'])) {
		$rollno = $_POST['rollno'];
		$password = $_POST['password'];
			$query = "SELECT * FROM attendence WHERE rollno = '$rollno' AND password='$password'";
			$results = mysqli_query($connect, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['rollno'] = $rollno;
				$year = $_POST['year'];
				$_SESSION['year'] = $year;

				echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Login successful!')
                      window.location.href='enter_parameters.php'</SCRIPT>");
			}
		else {
				echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('wrong rollno or password!')
                      window.location.href='login.php'</SCRIPT>");

			}
		
	}

?>