<?php
session_start();
//error_reporting(0);
include('../connect.php');

$email = $_SESSION['uemail'];

 $sql = "SELECT * FROM admission WHERE email='".$email."'";
  $result = mysqli_query($conn, $sql);
($row = mysqli_fetch_assoc($result));
if (mysqli_num_rows($result) > 0) {
// output data of each row

 ?>
									
<script type="text/javascript" language="Javascript">
window.location = "index.php";
window.open('status.php');
</script>

	<?php	}


?>