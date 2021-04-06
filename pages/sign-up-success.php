<html>

<head>
  <?php include '../inc/head.php'; ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php

$userN = $_POST['username'];
$userE = $_POST['email'];
$userP = $_POST['password'];

require "../db/dbConnect.php";
$db = get_db();

$statement = $db->prepare("INSERT INTO users(user_name, user_email, user_password) VALUES ('$userN', '$userE', '$userP');");
$statement->execute(); 
  ?>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>

<div id="sign-in-form">
<h3>Registration Complete</h3>
<p>Thank you for signing up. You can now sign in <a href="sign-in.php">here</a> to begin.</p>
</div>

</body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>