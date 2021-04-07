<html>

<head>
  <?php include '../inc/head.php'; ?>
  <?php /*include ('../db/db.php') */?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
<?php

/*
$userN = 'Kree';
$userE = 'KreeKree96@gmail.com';
$userP = 'Sofia'; */

/*
require "../db/dbConnect.php";
$db = get_db();

$statement = $db->prepare("INSERT INTO users(user_name, user_email, user_password) VALUES ('namey', 'emaily', 'passy');");
$statement->execute(); */
      
      /*$statement = $db->prepare("SELECT user_name, user_email, user_password FROM users");
      $statement->execute();

      while ($row = $statement->fetch(PDO::FETCH_ASSOC))
      {
          $user_name = $row['user_name'];
          $user_email = $row['user_email'];
          $user_password = $row['user_password'];

          echo "<tr><td>$user_name</td> <td>$user_email</td> <td>$user_password</td><tr>";
      } */
  ?>
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