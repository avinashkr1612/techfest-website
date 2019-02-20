<?php 
$servername = "localhost";
$username = "root";
$password = "techcurio@2019";
$db = "techcurio";

$conn = mysqli_connect($servername, $username, $password,$db);
$member = $_POST['Member'];
$event =  $_POST['Events'];

$q1 ="SELECT * FROM techcurio_tb WHERE phoneNo = '$member' ;";
$r1 = mysqli_query($conn, $q1);

$d1 = mysqli_fetch_array($r1, MYSQLI_NUM);

$count = 0 ;
if($d1[0] > 1)
{
  for($i  = 1; $i <= 5; $i++ )
  {   $q2 = "SELECT * FROM team_tb WHERE team_member$i = '$member' and eventName = '$event' ;";
      $r2 = mysqli_query($conn, $q2);
      $d2 = mysqli_fetch_array($r2, MYSQLI_NUM);
      if($d2[0] >= 1) {
          $count++; 
          echo "Team Member already Registered with another Team";
          break;
      }
  }
  if($count == 0)
  {
    echo "";
  }


}
else {
    echo "Mobile No is not registered!! first please register individually to participate in  an event.";
}



?>

