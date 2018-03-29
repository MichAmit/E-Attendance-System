<?php
session_start();
include 'connect.php';
$connect = connect_to_database();
$que = "SELECT * From student_details";
$que_fire = mysqli_query($connect,$que);
echo "<form method='POST' action=''>";
echo "<select name='select'>";
var_dump($que_fire);
while($row = mysqli_fetch_array($que_fire)){
echo "<option value=".$row['name'].">".$row['name']."</option>";

}
?>
<br>
<br>
<textarea name="msg" rows="10" cols="150"> </textarea>
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
$header = "From:chinmayvinchurkar24@gmail.com";

// send email
if(mail($email[0],"My subject",$msg,$header)){
  echo($email[0]);
  echo "mail sent!";

}
}
?>
