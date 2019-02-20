<?php
$servername = "localhost";
$username = "root";
$password = "techcurio@2019";
$db = "techcurio";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
$email =  $_POST['email'];
$trns_id = $_POST['transaction'];
echo  $trns_id;
echo $email;
$query = "UPDATE techcurio_tb SET paymentInfo='$trns_id' WHERE email='$email' ;";
echo $query;
mysqli_query($conn, $query);
//  header("Location: registered_user.php?email=$email");
?>
<html>
<body>
  <form id="myForm" action="registered_user.php" method="POST">
  <?php
          echo '<input type="hidden" name="email" value="'.$email.'">';
          echo '<input type="hidden" name="transaction" value="success">';
  ?>
  </form>
  <script type="text/javascript">
   document.getElementById('myForm').submit();

  </script>
</body>
</html>
