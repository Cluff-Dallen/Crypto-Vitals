<html>

<head>
  <?php include '../inc/head.php'; ?>
  <?php /*include ('../db/db.php') */
  


?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php

$userN = $_POST['username'];
$userE = $_POST['email'];
$userP = $_POST['password'];

echo $userP;
echo $userE;
echo $userN;

require "../db/dbConnect.php";
$db = get_db();

$statement = $db->prepare("INSERT INTO users(user_name, user_email, user_password) VALUES ('$userN', '$userE', '$userP');");
$statement->execute(); 

$new_page = "sign-in.php";

header("Location: $new_page");
die();
  ?>q
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>