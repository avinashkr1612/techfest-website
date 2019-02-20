<?php
$servername = "localhost";
$username = "root";
$password = "techcurio@2019";
$db = "techcurio";
$conn = mysqli_connect($servername, $username, $password,$db);

$mob =  $_POST['mobileNo'];

$query="SELECT * FROM techcurio_tb WHERE phoneNo = '$mob';";
$result = mysqli_query($conn, $query);

$data = mysqli_fetch_array($result, MYSQLI_NUM);
if($data[0] > 1) {
    echo "this email is already Registered!!<br> please go to login page to login";
}
else {
  echo "email not registered";
}

?>
