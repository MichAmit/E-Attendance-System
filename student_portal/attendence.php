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
include '../connect.php';
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
		<a href="Attendence.php" class="nav-link active navtabs" role="tab" data-toggle="tab"  id="tab-home">Your Attendnece</a>
	</li>

	
	<li class="nav-item">
		<a href="marks.php" id="photo-gal-btn" class="nav-link navtabs" role="tab" data-toggle="tab">Your Marks</a>
	</li>
	<li class="nav-item">
		<a href="news.php" id="photo-gal-btn" class="nav-link navtabs" role="tab" data-toggle="tab">NEWS AND NOTICES</a>
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

if (! isset($_SESSION['username'])) {
  echo "PLEASE LOGIN!";
  DIE();
}
$total = 40;
$year = $_SESSION['year'];
// $div = $_SESSION['div'];
// $sub = $_SESSION['sub'];
$que = "SELECT * from attendence Where 'year' = '$year'";
$fire_query = mysqli_query($connect,$que);

while($row=mysqli_fetch_array($fire_query)){ 
//var_dump($row);
$att = $row[$sub];
$tot = ($att / $total)*100;
if($tot <= 75){
$name = $row['name'];
}
}
echo "<table class = 'table table-bordered table-hover'>"; 
echo "<tr>
    <th>Name</th>
    <th>Percentage of attendence</th>
    </tr>";
for($i=0;$i<sizeof($name[i]);$i++) {
    echo "<tr>";
    echo "<td>".$name."</td>";
    echo "<td>".$tot."</td>";
    echo   "</tr>";


}
