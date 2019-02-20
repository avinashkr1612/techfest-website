<?php
$servername = "localhost";
$username = "root";
$password = "techcurio@2019";
$db = "techcurio";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

$teamName = $_POST['TeamName'];
$mem1 = $_POST['Member1'];
$mem2 = $_POST['Member2'];
$mem3 = $_POST['Member3'];
$mem4 = $_POST['Member4'];
$mem5 = $_POST['Member5'];
$event = $_POST['eventName'];

$query = "INSERT INTO `team_tb`(`team_id`, `team_name`, `team_member1`, `team_member2`, `team_member3`, `team_member4`, `team_member5`, `eventName`) VALUES (NULL,'$teamName','$mem1','$mem2','$mem3','$mem4','$mem5','$event');";
mysqli_query($conn, $query);
echo 'Your Team Has been Successfully Registered!!!';

?>

