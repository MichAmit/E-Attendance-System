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
		<a href="#defaulters.php" id="photo-gal-btn" class="nav-link navtabs" role="tab" data-toggle="tab">Generate Defaulters</a>
	</li>

	<li class="nav-item">
		<a href="#parents.php" id="photo-gal-btn" class="nav-link navtabs" role="tab" data-toggle="tab">Contact Parents</a>
	</li>

    <li class="nav-item">
        <a href="logout.php"  class="nav-link navtabs" role="tab" data-toggle="tab">LOGOUT</a>
    </li>
</ul>
</div>
</div>
</div>
	
<?php

if( ! $connect){

    echo "failed to connect to database";

    die();
}

//$div = $_SESSION['div']; //get division 
$div = "A";

$get_data = "SELECT * FROM attendence WHERE division = '$div'";

if(! mysqli_query($connect,$get_data)){
    echo "database failure";
}
$get_data_fire = mysqli_query($connect,$get_data);
$count = 0;

echo "<form method='POST'>";
echo "<table class = 'table table-hover table-bordered' bordor = '1'>"."\n";
echo "<tr>
    <th>Present/absent</th>
    <th>Name</th>
    <th>Roll NO</th>
    </tr>";
while($row=mysqli_fetch_array($get_data_fire)){ 
    echo "<tr>";
    echo "<td><input type='checkbox' name= 'array[]' value=". $row['rollno']." </td>";
    echo "<td>".$row['name']."</td>";
    echo "<td>".$row['rollno']."</td>";
    echo   "</tr>";
    $count = $count + 1;
    $rollno[] = $row['rollno'];
}

?>


<?php



if(isset($_POST['submit'])){
$checkbox = $_POST['array'];
$sub = $_SESSION['sub'];
for($i=0;$i<$count; $i++ ){
    
    if(isset($rollno[$i]) && isset($checkbox[$i])){
    
    $que = "UPDATE attendence SET $sub = $sub + 1 WHERE rollno = '$checkbox[$i]' ";
    $fire_query = mysqli_query($connect,$que);
    echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Successfully uploaded the attendence')
                      window.location.href='attendence.php'</SCRIPT>");
    }


    }
}





?>

<form method="POST">

<input class="btn btn-success fixed-bottom " type="submit" name = "submit" value="Upload">
</form>

