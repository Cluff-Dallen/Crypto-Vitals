<?php
  session_start();
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
  <div id="sign-up-form">
    <h1>Sign-up</h1>
    <form action="sign-up-success.php" method="POST">
      <div class="signupInput"><span class="material-icons">perm_identity</span><input type="text" name="username" placeholder="Username" required></div>
      <div class="signupInput"><span class="material-icons">mail_outline</span><input type="email" name="email" placeholder="Email Address" required></div>
      <div class="signupInput"><span class="material-icons">lock_outline</span><input type="password" name="password" placeholder="Password" required></div>
      <div class="signupInput"><input id="signupSubmit" type="submit" name="signupSubmit"></div>
    </form>
    <p><a href="sign-in.php">Already have an account</a> | <a href="forgot-pass.php">Forgot Password</a></p>
  </div>
</body>

<footer>
  <?php
    include('../inc/footer.php');
  ?>
</footer>
</html>