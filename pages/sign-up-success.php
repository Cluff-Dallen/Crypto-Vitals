<html>

<head>
  <?php include '../inc/head.php'; ?>
  <?php /*include ('../db/db.php') */
  
$userN = $_POST['username'];

$userE = $_POST['email'];


$userP = $_POST['password'];

?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>

<?php

echo $userP;
echo $userE;
echo $userN;

require "../db/dbConnect.php";
$db = get_db();

$statement = $db->prepare("INSERT INTO users(user_name, user_email, user_password) VALUES ('Sam', 'Sam@gam.com', 'Bruh123');");
$statement->execute(); 
      
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

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>