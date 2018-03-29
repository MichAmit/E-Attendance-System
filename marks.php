<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>TEACHER | FRCRCE </title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style >.page-header {
    padding-bottom: 9px;
    margin: 40px 0 20px;
    border-bottom: 1px solid #eee;
}
</style>
</head>
<h1 class="page-header mt-2 mb-4"> Welcome To teachers portal </h1>
</html>
<?php
session_start();
include 'connect.php';
$connect = connect_to_database();
if(! isset( $_SESSION['username'])){
  echo '<script> alert("Please login with correct credentials !");
	window.location.href = "login.php";
  </script>';
  //header("refresh:0 ;url=login.php");
  DIE();

}
?>

<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
<ul class="nav nav-tabs">

<li class="nav-item">
		<a href="Attendence.php" class="nav-link active navtabs" role="tab" data-toggle="tab"  id="tab-home">Attendence</a>
	</li>

	
	<li class="nav-item">
		<a href="marks.php"  class="nav-link navtabs" role="tab" data-toggle="tab">MARKS</a>
	</li>
	<li class="nav-item">
		<a href="news.php" class="nav-link navtabs" role="tab" data-toggle="tab">NEWS AND NOTICES</a>
	</li>

	
	<li class="nav-item">
		<a href="defaulters.php"  class="nav-link navtabs" role="tab" data-toggle="tab">Generate Defaulters</a>
	</li>

	<li class="nav-item">
		<a href="parents.php"  class="nav-link navtabs" role="tab" data-toggle="tab">Contact Parents</a>
	</li>

	<li class="nav-item">
		<a href="logout.php"  class="nav-link navtabs" role="tab" data-toggle="tab">LOGOUT</a>
	</li>
	

</ul>
</div>
</div>
</div>






<h3 class="text-center d6-color">Marksheet</h3>
<hr class="hr-dark">
<form method="POST" enctype="multipart/form-data" action="marks_upload.php">
	<h3 class="d6-color">Insert Marksheet</h3>
	<br>
	<input class="form-control" placeholder="Enter Rollno of the student" type="text" name="rollno" maxlength="225" required>
	<br>
	<input class="form-control" type="file" name="file" maxlength="225" required>
	<br>
	<div class="text-center">
		<input class="btn btn-danger" type="submit" value="Upload">
	</div>
</form>
<br>
<hr>
<br>

<h3 class="d6-color">Delete Marksheet</h3>
<br>
<input class="form-control" placeholder="Enter Rollno of the student" type="text" name="rollno" maxlength="225" required>

<br>
<div class="text-center">
	<br>
<input class="btn btn-danger" type="submit" value="Delete">
</div>
</form>
</div>
</body>
