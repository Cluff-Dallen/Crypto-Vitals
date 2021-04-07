<html>

<head>
  <?php include '../inc/head.php'; ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php

//$userE = $_POST['email'];
//$userP = $_POST['password'];

require "../db/dbConnect.php";
$db = get_db();

$email = $_POST['email'];

$stmt = $db->prepare("SELECT * FROM users WHERE user_email=?");
$stmt->execute([$email]);
$user = $stmt->fetch();
if($user){
echo "found";
echo 'console.log("Found")';
}else {
  echo "nothing";
  echo 'console.log("Noething")';

}
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