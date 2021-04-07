<?php 
session_start();
?>
<?php require_once "../db/dbConnect.php";
?>


<html>
<head>
  <?php include '../inc/head.php'; ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
<?php 

echo "Welcome, " . $_SESSION["currentUser"];

?>
  <div id="sign-in-form">
    <h1>Sign-in</h1>
    <form action="sign-in-result.php" method="POST">
      <div class="signinInput"><span class="material-icons">mail_outline</span><input type="email" name="email" placeholder="Email address" required></div>
      <div class="signinInput"><span class="material-icons">lock_outline</span><input type="password" name="password" placeholder="Password"required></div>
      <div class="signinInput"><input type="submit" id="signinSubmit" name="loginSubmit"></div>
    </form>
    <p><a href="sign-up.php">Register</a> | <a href="forgot-pass.php">Forgot Password</a></p>
  </div>
</body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>