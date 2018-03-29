
<?php


session_start();

//if (! isset($_SESSION['username'])) {
  //echo "PLEASE LOGIN!";
  //DIE();
//}
//$year = $_SESSION['year'];

$year = "TE";

include 'connect.php';
$connect = connect_to_database();
$que = "SELECT * FROM subjects WHERE year = '$year'";
$result = mysqli_query($connect,$que);
$row=mysqli_fetch_assoc($result);
if(! mysqli_query($connect,$que)){
	echo "database failed";
}

?>

<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>ENTER DETAILS  </title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="bootstrap/css/login.css">

</head>
<body>
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-4 col-md-3 col-sm-2" id="left"></div>
    <div class="col-lg-4 col-md-6 col-sm-8" id="middle">
    <br>
    <div id="box">
      <br>
      <h2 class="text-grey text-center">ENTER DETAILS</h2>
      <hr>
      <br>
      <form method="post" action="">
      
        <div class="row">
          <br>

          <h4 class="ml-3"> Select Subject: </h4>
<select name="sub"  class="form-control col-lg-4 ml-3">
   
   <option value= <?= $row['Sub1']?>><?= $row['Sub1']?> </option>";
   <option value= <?= $row['Sub2']?>><?=$row['Sub2']?> </option>";
   <option value=<?= $row['Sub3']?>><?=$row['Sub3']?> </option>";
   <option value=<?= $row['Sub4']?>><?=$row['Sub4']?> </option>";
   <option value=<?= $row['Sub5']?>><?=$row['Sub5']?> </option>";
  <option value=<?= $row['Sub6']?>><?=$row['Sub6']?></option>";
    
  </select>
  </div>
  
  <br>
  <br>
  <div class="row">
  <h4 class="ml-3"> Select Division: </h4>
  <select name="division"  class="form-control col-lg-4 ml-3">
   
   <option value='A' selected="">A </option>";
   <option value='B'>B</option>";
    
  </select>
</div>
  </div>

  
  <br>
  <div class="row">
  <h4 class="ml-3"> Select no. Lectures: </h4>
  <select name="lec"  class="form-control col-lg-4 ml-3">
   <option value='1' selected="">1</option>";
   <option value='2'>2</option>";
    <option value='3'>3</option>";
    
    
  </select>
</div>
  </div>

  <br>
  <br>

</div>
        <div class="text-center">
        <button class=" button button1 btn btn-outline-primary m-4" name="submit">Submit</button>
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


if(isset($_POST['submit'])){
	$div = $_POST['division'];
	$lec = $_POST['lec'];
	$sub = $_POST['sub'];
  
if($sub == "OST"){
  $sub = 'sub1';
}
if($sub == "ABMS"){
  $sub = 'sub2';
}
if($sub == "SE"){
  $sub = 'sub3';
}
if($sub == "DMBI"){
  $sub = 'sub4';

}
if($sub == "OS"){
  $sub = 'sub5';

}
if($sub == "COA"){
  $sub = 'sub6';
}
	$_SESSION['div'] = $div;
	$_SESSION['lec'] = $lec;
	$_SESSION['sub'] = $sub;

header("location: attendence.php");

}
