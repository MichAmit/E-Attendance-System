<?php
function connect_to_database()
{
$hostname='localhost';
$username='root';
$password='';
$dbname='portal';
$connect=mysqli_connect($hostname,$username,$password,$dbname);
if(!$connect) 
  return;
return $connect;
}
?>
