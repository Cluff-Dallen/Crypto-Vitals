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

    //Default sign in response
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

        //Set welcome message
        $response = "Welcome, " . $_SESSION["currentUser"] . "! Thank you for being a loyal user. Please enjoy.";
        
      } else {}
    } else {} 
?>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<?php 

$conn = pg_connect("host=ec2-3-216-181-219.compute-1.amazonaws.com port=5432 dbname=d807d5gmkubr3a user=girkmmugorgrnp password=3d9767bc57920a3bc22f771b885d47b7d3a880f23f8fb2a9cc08a5aa5ed96be8");
if (!$conn) {
  echo "An error occurred.\n";
  exit;
}
$result = pg_query($conn, "SELECT * FROM favorites WHERE emailOfThisFavorite = 'cluffrdallen@gmail.com'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}
while ($row = pg_fetch_row($result)) {
  echo "Currencies: $row[1]";
  echo "<br />\n";
}

?>

<body>
  <div id="sign-in-form">
    <h3>Sign in</h3>
    <p><?php echo $response ?> Click <strong><a href="cryptocurrencies.php">here</a></strong> to begin.</p>
    

    <br>
  </div>
</body>

<footer>
  <?php
    include('../inc/footer.php');
  ?>
</footer>
</html>