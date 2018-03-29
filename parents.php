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
		<a href="marks.php" id="photo-gal-btn" class="nav-link navtabs" role="tab" data-toggle="tab">MARKS</a>
	</li>
	<li class="nav-item">
		<a href="news.php" id="photo-gal-btn" class="nav-link navtabs" role="tab" data-toggle="tab">NEWS AND NOTICES</a>
	</li>

	
	<li class="nav-item">
		<a href="defaulters.php" id="photo-gal-btn" class="nav-link navtabs" role="tab" data-toggle="tab">Generate Defaulters</a>
	</li>

	<li class="nav-item">
		<a href="parents.php" id="photo-gal-btn" class="nav-link navtabs" role="tab" data-toggle="tab">Contact Parents</a>
	</li>

	<li class="nav-item">
		<a href="logout.php"  class="nav-link navtabs" role="tab" data-toggle="tab">LOGOUT</a>
	</li>
</ul>
</div>
</div>
</div>


<?php
$que = "SELECT * From student_details";
$que_fire = mysqli_query($connect,$que);
echo "<form method='POST' action=''>";
echo "<select name='select' class='form-control mt-4 mb-3'>";
var_dump($que_fire);
while($row = mysqli_fetch_array($que_fire)){
echo "<option value=".$row['name'].">".$row['name']."</option>";

}
?>
<br>
<br>
<textarea name="msg" rows="7" cols="100"> </textarea>
<br>
<input type="submit" name="submit">

<?php

if (isset($_POST['submit'])) {

  $name = $_POST['select'];

// the message
$msg = $_POST['msg'];
$que = "SELECT p_email From student_details WHERE name='$name'";
$result = mysqli_query($connect,$que);
$email = mysqli_fetch_array($result);
$header = "From:college@xyz.com";

// send email
mail($email[0],"My subject",$msg,$header);
  echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('email sent successfully')
                      window.location.href='parents.php'</SCRIPT>");

}
?>
