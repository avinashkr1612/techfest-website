<?php
$servername = "localhost";
$username = "root";
$password = "techcurio@2019";
$db = "techcurio";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

$login = $_POST['useremail'];
$passwd = $_POST['passwd'];
if($login!=''&&$passwd!='')
{
    $query="select * from techcurio_tb where email ='".$login."' and password ='".$passwd."'";
    echo $query;
    $result = mysqli_query($conn, $query);
    $row = $result->fetch_assoc();
}

mysqli_query($conn, $query);
echo 'success';
// header("Location: registered_user.php?email=$email");
?>
<html>
<?php
if($row)
{
?>
 <body>
    <form id="myForm" action="registered_user.php" method="POST">
    <?php
            echo '<input type="hidden" name="email" value="'.$login.'">';
            echo '<input type="hidden" name="stats" value="success">';
    ?>
    </form>
    <script type="text/javascript">
        document.getElementById('myForm').submit();
    </script>
  </body>
<?php
}
else
{
    echo'You entered username or password is incorrect';
}
 ?>

</html>

