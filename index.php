<?php
    if(isset($_POST['submit']))
    {
            session_start();

            $_SESSION['Name'] = htmlentities($_POST['Name']);
            $_SESSION['Email'] = htmlentities($_POST['Email']);
            $_SESSION['Username'] = htmlentities($_POST['Username']);
            $_SESSION['Password'] = htmlentities($_POST['Password']);
            $_SESSION['Comment'] = htmlentities($_POST['Comment']);
            $_SESSION['Gender'] = htmlentities($_POST['Gender']);
          header('Location: validation.php');
    }
?>
<!DOCTYPE HTML>  
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Validation Form</title>
<style>
body {
  background-image: url("motor.jpg");
  background-repeat: no-repeat;
  background-size: cover;
}
.error {color: #FF0000;}
</style>
</head>
<body>  

<!-- <?php
// define variables and set to empty values
$nameErr = $emailErr = $usernameErr = $passwordErr = $genderErr = "";
$name = $email = $username = $password = $comment = $gender = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//Name
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  //Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  //Username  
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
  }

  //Password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  //Comment
  if (empty($_POST["comment"])) {
    $comment = "";
  } else {
    $comment = test_input($_POST["comment"]);
  }

  //Gender
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> -->

<h2 align="center"><font color="white">PHP Form Validation Example</font></h2>
 <!-- <p><span class="error">* required field</span></p> -->
<!-- <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="off">   -->
  <!-- Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Username: <input type="text" name="username">
  <span class="error">*<?php echo $usernameErr;?></span>
  <br><br>
  Password: <input type="password" name="password">
  <span class="error">*<?php echo $passwordErr;?></span>
  <br><br>
  Comment: <textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form> -->

<div class ="container col-lg-4">
<div class= "col">
<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="form-group">
    <label style="color: white" for="Name">Name:</label>
   <input type="text" class="form-control" name="Name" placeholder="Name" required>
  </div>

  <div class="form-group">
    <label style="color: white" for="Email">Email:</label>
    <input type="email" class="form-control" name="Email" placeholder="Email" required>
  </div>

  <div class="form-group">
    <label style="color: white" for="Username">Username:</label>
    <input type="username" class="form-control" name="Username" placeholder="Username" required>
  </div>

  <div class="form-group">
    <label style="color: white" for="Password">Password:</label>
    <input type="text" class="form-control" name="Password" placeholder="Password" required>
  </div>
  
  <!-- comment -->
  <div>
    <label style="color: white" for="Comment">Comment:</label>
   <textarea name="comment" rows="5" cols="40"></textarea>
</div>
<br>
<legend style="color: white" class="col-form-label col-sm-2 pt-0">Gender:</legend>

<!-- male -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
  <label style="color: white" class="custom-control-label" for="customRadioInline1">Male</label>
</div>

<!-- Female -->
<div class="custom-control custom-radio custom-control-inline">
  <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
  <label style="color: white" class="custom-control-label" for="customRadioInline2">Female</label>
</div>
<br>

<br>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>