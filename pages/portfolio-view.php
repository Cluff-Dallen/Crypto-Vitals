<?php 
session_start();
?>
<html>

<head>
  <?php include '../inc/head.php'; ?>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
<div class="profile-bar"><?php echo "Welcome, " . $_SESSION["currentUser"]; ?></div>
  <div class="content">
    <?php $pageTitle = "Portfolio"; ?>
    <h3><?php echo $pageTitle ?></h3>
    <br>
    <div id="portfolio">

     <p id="portfolio-intro">Hello, <?php $_SESSION["currentUser"]; ?> welcome to your portfolio. Please enter your transacitons in the form below
     to keep track of your portfolio. Be sure to include the asset name, purchase location, usd value, and date.</p>

     <br>

     <form action="portfolio-results.php" id="transactions" method="POST">
     <select name="type" id="type">
        <option value="BOUGHT">BOUGHT</option>
        <option value="SOLD">SOLD</option>
      </select>
      <input type="text" name="asset" id="asset" placeholder="Token Name" required>
     <input type="date" name="date" id="date" required>
     <input type="text" name="exchange" id="exchange" placeholder="Purchase Location" required>
     <input type="number" name="amount" id="amount" placeholder="Quantity" required>
     <input type="submit" value="Submit Transaction">
     </form>

<br>
<br>

     <div id="transactions">

     <?php 

     $user = $_SESSION["currentUser"];
 if ($user !== "Please log in for full functionality."){ 

$conn = pg_connect("host=ec2-3-216-181-219.compute-1.amazonaws.com port=5432 dbname=d807d5gmkubr3a user=girkmmugorgrnp password=3d9767bc57920a3bc22f771b885d47b7d3a880f23f8fb2a9cc08a5aa5ed96be8");
if (!$conn) {
  echo "An error occurred.\n";
  exit;
}

$result = pg_query($conn, "SELECT * FROM transactions WHERE emailOfThisTransaction = '$user'");

if (!$result) {
  echo "An error occurred.\n";
  exit;
}

$transactions = array(" ");

while ($row = pg_fetch_row($result)) {
  echo "You $row[6]: $row[5] $row[2] on $row[3]";
  echo "<br />\n";
}

$_SESSION["transactionList"] = implode( ", ", $transactions );
echo $_SESSION["transactionList"];
 }
?>
<br>
<br>

</div>
    </div>
  </div>
  <br><br>
</body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>