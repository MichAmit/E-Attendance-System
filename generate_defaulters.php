<?php
session_start();
include 'connect.php';
$connect = connect_to_database();
if (! isset($_SESSION['username'])) {
  echo "PLEASE LOGIN!";
  DIE();
}
$total = 40;
$div = "A";
$sub = "sub1";
//$div = $_SESSION['div'];
//$sub = $_SESSION['sub'];
$que = "SELECT * from attendence Where '$sub' = '$sub' and division = '$div'";
$fire_query = mysqli_query($connect,$que);

while($row=mysqli_fetch_array($fire_query)){ 
//var_dump($row);
$att = $row[$sub];
$tot = ($att / $total)*100;
if($tot <= 75){
$name = $row['name'];
}
for($i=0;$i<sizeof($name);$i++) {
 echo "\n".$name."\n".$tot."<br>";

}
}
