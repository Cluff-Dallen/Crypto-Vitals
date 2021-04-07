<?php
  session_start();
?>

<html>
<head>
  <?php include '../inc/head.php'; ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  
  <?php

    //Connect to DB
    require "../db/dbConnect.php";
    $db = get_db();

    //Catch results from sign-in
    $email = $_POST['email'];
    $pass = $_POST['password'];

    //If email is correct & valid
    $stmt = $db->prepare("SELECT * FROM users WHERE user_email=?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();

    $response = "Sorry but your credentials were invalid. Please try signing in again.";

    if ($user) {
    
      //If password is correct & valid
      $stmt2 = $db->prepare("SELECT * FROM users WHERE user_email='$email' AND user_password=?");
      $stmt2->execute([$pass]);
      $password = $stmt2->fetch();

      //Success -- login!
      if ($password) {
       
        //Start session for current user
        $_SESSION["currentUser"] = $email;

        $response = "Welcome, " . $_SESSION["currentUser"] . "! Thank you for being a loyal user. Please enjoy.";
        
      } else {
        echo "INVALID CREDENTIALS (Password)";
      }
    } else {
      echo "INVALID CREDENTIALS (Email)";
    }
  ?>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
  <div id="sign-in-form">
    <h3>Sign in</h3>
    <p><?php echo $result ?> Click <strong><a href="cryptocurrencies.php">here</a></strong> to begin.</p>
    <br>
  </div>
</body>

<footer>
  <?php
    include('../inc/footer.php');
  ?>
</footer>
</html>