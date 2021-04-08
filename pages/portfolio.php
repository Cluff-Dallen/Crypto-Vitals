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

<?php 


 /*$asset= $_POST['asset'];
 $date = $_POST['date'];
 $exchange = $_POST['exchange'];
 $USD = $_POST['USD']; 
 $user = $_SESSION["currentUser"];

 if ($user !== "Please log in for full functionality." && $asset !== ""){ 
 //Connect to DB
  require "../db/dbConnect.php";
 $db = get_db(); 


 //Insert results into DB
 $statement = $db->prepare("INSERT INTO transactions (emailOfThisTransaction, transaction_asset, transaction_date, transaction_exchange, transaction_USD_value) VALUES('$user', '$asset', '$date', '$exchange', $USD);"); 
 $statement->execute(); } */
 
/* 

   <h5>Portfolio Total Value:</h5>
      <span id="portfolioTotalValue">$0.00</span>USD
      <br><br>
      <h5>Current Holdings:</h5>
      <table id="holdingsList" width="100%" cellspacing="0" cellpadding="0">
        <span id="portfolioTotalValue">1 BTC</span>
      </table>
      <br>
      <h5>Recent Transactions:</h5>
      <table id="holdingsList" width="100%" cellspacing="0" cellpadding="0">
        <span id="portfolioTotalValue">Bought 1 BTC on March 9th 2021</span>
      </table>
      <br>

*/

?>
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


     
     <form action="portfolio-view.php">
    <button type="submit">View Transactions</button>
    </form>
    
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