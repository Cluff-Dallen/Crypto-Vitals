<html>
<head>
  <?php include '../inc/head.php'; ?>
  <?php /*include ('../db/db.php') */?>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
  <div id="about-content" class="content">
    <?php $pageTitle = "Meet the Team"; ?>
    <h3><?php echo $pageTitle?></h3>
    <br>
    <img id="aboutUsImg" src="/images/aboutBig.jpg" alt="About us image">
    <br>
    <p>
      Crypto Vitals was created by a student for the purpose of both completing the requirements of a senior project to
      get their degree as a softare engineer, but also to turn it into an on going product that could one day be a very
      handy tool to traders and investers in the crypto industry.
    </p>

    <br>

    <p>
      If you would like to donate to the project to help fund further development feel free too. Also if you have any
      suggestions or feedback I am also accepting that to make this the best tool possible.

      I am accepting ETH (or any other ERC20) at my ethereum address:
      <br>
      
      </p>

      <br>

      <div id="address">0x3f4321aF60EeE186E7Fd5877e8F9799eF1635738</div>
      <br>
     <div id="closing">
      Alternatively you can scan and deposit funds using the QR code below.
    </div>
    <span class="qrCode"><img class="qrCode" src="/images/Eth_QR.PNG" alt="Qr code">
    <br>
    <br>



  <?php
  /*
  $sql = 'SELECT * FROM family';
  $stmt = $pdo->prepare($sql);
  $stmt->execute();
  $rowCount = $stmt->rowCount();
  $details = $stmt->fetch();

  print_r ($details);
*/
  
  ?>





<table class="table">
                <tr>
                    <thead class="thead-dark">
                    <th>USERNAME</th>
                    <th>USEREMAIL</th>
                    <th>USERPASSWORD</th>
                </tr>
                </thead>

<?php

$userN = 'Kree';
$userE = 'KreeKree96@gmail.com';
$userP = 'Sofia';

require "../db/dbConnect.php";
$db = get_db();

$statement = $db->prepare("INSERT INTO users(user_name, user_email, user_password) VALUES ($userN, $userE, $userP);");
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

</table>






<br>

    <br>
    <br>
  </div>
</body>

<footer>
  <?php 
    include ('../inc/footer.php'); 
   ?>
</footer>

</html>