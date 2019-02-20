<?php
$servername = "localhost";
$username = "root";
$password = "techcurio@2019";
$db = "techcurio";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
$name = strtoupper($_POST['name']);
$email = $_POST['email'];
$year = $_POST['year'];
$college = strtoupper($_POST['college']);
$class = $_POST['class'];
$phoneNo = $_POST['phone'];
$pass = $_POST['passwd'];
//$paymentInfo = $_POST['pay'];
//	echo $query = "insert into `blog_data`(`b_id`, `b_title`, `b_content`, `author`, `views`, `category`,`img_link`) VALUES (null,'$title','$ct','$auth','$vw','$category','$lnk')";

$query = "INSERT INTO techcurio_tb(id, name, email, year, college, class, phoneNo, password, paymentInfo) VALUES (NULL,'$name','$email','$year','$college','$class','$phoneNo','$pass','0');";
mysqli_query($conn, $query);
echo 'success';
// header("Location: registered_user.php?email=$email");
?>
<html>
<body>
  <form id="myForm" action="registered_user.php" method="POST">
  <?php
          echo '<input type="hidden" name="email" value="'.$email.'">';
          echo '<input type="hidden" name="stats" value="success">';
  ?>
  </form>
  <script type="text/javascript">
      document.getElementById('myForm').submit();
  </script>
</body>
</html>
