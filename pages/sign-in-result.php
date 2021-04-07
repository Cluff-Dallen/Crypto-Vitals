<html>

<head>
  <?php include '../inc/head.php'; ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php

//$userE = $_POST['email'];
//$userP = $_POST['password'];

require "../db/dbConnect.php";
$db = get_db();
$session_start();



if($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  
  $userE = mysqli_real_escape_string($db,$_POST['email']);
  $userP = mysqli_real_escape_string($db,$_POST['password']); 
  
  $sql = "SELECT user_email FROM users WHERE user_email = '$userE' AND user_password = '$userP'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  $active = $row['active'];
  
  $count = mysqli_num_rows($result);
  
  // If result matched $userE and $userP, table row must be 1 row

  if($count == 1) {
     //session_register('$userE');
     $_SESSION['login_user'] = $userE;
     
     header("location: cryptocurrencies.php");
  }else {
     $error = "Your Login Name or Password is invalid";
  }
}




$statement = $db->prepare("INSERT INTO users(user_name, user_email, user_password) SELECT '$userN', '$userE', '$userP' WHERE NOT EXISTS (SELECT user_name, user_email, user_password FROM users WHERE (user_email = '$userE'));");
//$statement = $db->prepare("INSERT INTO users(user_name, user_email, user_password) VALUES ('$userN', '$userE', '$userP');");
$statement->execute(); 
  ?>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
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