<html>

<head>
  <?php include '../inc/head.php'; ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
  <div id="forgot-pass-form">
    <h1>Reset password</h1>
    <br>
    <form action="forgot-pass-success.php" method="POST">

      <div class="forgotPassInput"><span class="material-icons">mail_outline</span><input type="email" name="email" placeholder="Email address" required></div>
      <div class="forgotPassInput"><span class="material-icons">lock_outline</span><input type="new-password" name="new-password" placeholder="New password" required></div>

      <br>

      <h5>Security Questions</h5>
      <div class="forgotPassInput"><span class="material-icons">lock_outline</span><input type="securityQuestion" name="securityQuestion" placeholder="Mothers maiden name?"></div>
      <div class="forgotPassInput"><span class="material-icons">lock_outline</span><input type="securityQuestion" name="securityQuestion" placeholder="Year of birth?"></div>

      <div class="forgotPassInput"><input type="submit" id="forgotpassSubmit" name="forgotpassSubmit"></div>
    </form>

    <p><a href="forgot-pass.php">Register</a> | <a href="sign-in.php">Sign In</a></p>
  </div>

  <?php
  
require "../db/dbConnect.php";
$db = get_db();

$statement = $db->prepare("DELETE FROM users WHERE user_name LIKE '$userN';");
$statement->execute(); 
  ?>



</body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>