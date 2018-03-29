
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

for($i=0;$i<$count; $i++ ){
    
    if(isset($rollno[$i]) && isset($checkbox[$i])){
    
    $que = "UPDATE attendence SET sub1 = sub1 + 1 WHERE rollno = '$checkbox[$i]' ";
    $fire_query = mysqli_query($connect,$que);
    echo ("<SCRIPT LANGUAGE='JavaScript'> window.alert('Attendence uploaded successfully')
                      window.location.href='index.php'</SCRIPT>");
    }


    }
}





?>

<form method="POST">

<input class="btn btn-success fixed-bottom " type="submit" name = "submit" value="Upload">
</form>

