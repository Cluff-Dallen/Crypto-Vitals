<?php
  session_start();
?>
<html>

<head>
  <?php include '../inc/head.php'; ?>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <?php
    //Catch the results from sign-up
    $userN = $_POST['username'];
    $userE = $_POST['email'];
    $userP = $_POST['password'];

    //Connect to DB
    require "../db/dbConnect.php";
    $db = get_db();

    //Insert results into DB
    $statement = $db->prepare("INSERT INTO users(user_name, user_email, user_password) SELECT '$userN', '$userE', '$userP' WHERE NOT EXISTS (SELECT user_name, user_email, user_password FROM users WHERE (user_email = '$userE'));");
    $statement->execute();
  ?>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
  <div id="sign-in-form">
    <h3>Registration Complete</h3>
    <p>Thank you <?php echo $userN ?> for signing up. You can now sign in <strong><a href="sign-in.php">here</a></strong> to begin.</p>
    <br>
  </div>
</body>

<footer>
  <?php
    include('../inc/footer.php');
  ?>
</footer>

</html>