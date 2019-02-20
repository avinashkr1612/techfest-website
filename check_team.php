<?php
$servername = "localhost";
$username = "root";
$password = "techcurio@2019";
$db = "techcurio";

$conn = mysqli_connect($servername, $username, $password,$db);
$teamName = $_POST['TeamName'];
$q1 ="SELECT * FROM team_tb WHERE team_name = '$teamName' ;";
$r1 = mysqli_query($conn, $q1);
$d1 = mysqli_fetch_array($r1, MYSQLI_NUM);
if($d1[0] > 1)
{
  echo "Sorry Team Name is already Taken" ;
}

?>

