<?php
session_start();
$name = $_SESSION['Name'];
$email = $_SESSION['Email'];
$username = $_SESSION['Username'];
$password = $_SESSION['Password'];
$comment = $_SESSION['Comment'];
$gender = $_SESSION['Gender'];
?>
<!DOCTYPE html>
<html>
<style>
body {
  background-color:  #00b300
}</style>
<script>
function goBack() {
  window.history.back()
}

</script>
<body>
	<div class="container col-lg-8">
 <?php
 	echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $username;
echo "<br>";
echo $password;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender
 ?>

<button class="btn btn-secondary" onclick="goBack()">Go Back</button>
</div>

</body>
</html