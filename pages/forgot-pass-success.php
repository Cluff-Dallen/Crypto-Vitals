<?php 
session_start();
?>
<html>

<head>
  <?php include '../inc/head.php'; ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php

$userEmail = $_POST['email'];
$newPassword = $_POST['new-password'];

require "../db/dbConnect.php";
$db = get_db();

$statement = $db->prepare("UPDATE users SET user_password = '$newPassword' WHERE user_email = '$userEmail';");
$statement->execute(); 
  ?>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
<?php 

echo "Welcome, " . $_SESSION["currentUser"];

?>
<div id="sign-in-form">
<h3>Password Reset Complete</h3>
<p>Your password has now been reset. You can now sign in <strong><a href="sign-in.php">here</a></strong> to begin.</p>
<br>
</div>

</body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>