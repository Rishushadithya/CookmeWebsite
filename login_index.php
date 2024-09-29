<?php
include('config.php');
session_start();
error_reporting(0);


if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = md5($_POST['password']);
  $query = mysqli_query($con, "SELECT ID FROM tbladmin WHERE Email='$email' && Password='$password'");
  $ret = mysqli_fetch_array($query);
  if ($ret > 0) {
    $_SESSION['userid'] = $ret['ID'];
    header('location:dashboard.php');
  } else {
    echo '<script>alert("Invalid Details.")</script>';
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login to Cook Me</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="./CSS/login.css">
  
 
</head>
<body>


  <div class="login-container">
    <form id="loginForm" action="" method="post">
      <h2>Login to Cook Me</h2>
      <div class="input-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required placeholder="Enter your email">
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required placeholder="Enter your password">
      </div>
      <div class="checkbox-group">
        <input type="checkbox" id="remember-me" name="remember-me">
        <label for="remember-me">Remember me</label>
      </div>
      <button type="submit" name="login">Log in</button>
      <a href="/forgot-password">Forgot your password?</a>
      <span>Not a Member ?<a href="/login"> Click here to Register </a></span>
    </form>
  </div>
</body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./JS/login.js"></script>
</html>
