<?php 
session_start();
?>
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

/*$statement = $db->prepare("INSERT INTO users(user_name, user_email, user_password) SELECT '$userN', '$userE', '$userP' WHERE NOT EXISTS (SELECT user_name, user_email, user_password FROM users WHERE (user_email = '$userE'));");
echo "your statement:";


//$statement = $db->prepare("INSERT INTO users(user_name, user_email, user_password) VALUES ('$userN', '$userE', '$userP');");
$statement->execute(); */



$res = pg_query($db, "SELECT * FROM users;");
$val = pg_fetch_result($res, 1, 0);

echo "first field in teh second row is: ", $val, "\n";






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
<h3>Registration Complete</h3>
<p>Thank you for signing up. You can now sign in <strong><a href="sign-in.php">here</a></strong> to begin.</p>
<br>
</div>

</body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>