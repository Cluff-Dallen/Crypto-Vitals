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


 $asset= $_POST['asset'];
 $date = $_POST['date'];
 $exchange = $_POST['exchange'];
 $amount = $_POST['amount']; 
 $type = $_POST['type']; 
 $user = $_SESSION["currentUser"];

 echo $asset;
 echo $date;
 echo $exchange;
 echo $amount;
 echo $type;
 echo $user;


 
 if ($user !== "Please log in for full functionality." && $asset !== ""){ 
 //Connect to DB
  require "../db/dbConnect.php";
 $db = get_db(); 


 //Insert results into DB
 $statement = $db->prepare("INSERT INTO transactions (emailOfThisTransaction, transaction_asset, transaction_date, transaction_exchange, transaction_USD_value) VALUES('$user', '$asset', '$date', '$exchange', $USD);"); 
 $statement->execute(); 
echo "success";
} 




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

echo "result: " . $result;

$transactions = array("TESTY");

echo "transactions: " . $transactions;


while ($row = pg_fetch_row($result)) {
  echo "You $row[6]: $row[5] $row[2] on $row[3]";
  echo "<br />\n";
}

echo "array transactions: " . $transactions;

$_SESSION["transactionList"] = implode( ", ", $transactions );
echo "session: " . $_SESSION["transactionList"];

 
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







<script type="text/javascript">

/*var activeUser = '<?php echo $_SESSION["currentUser"]; ?>';
var list = '<?php echo $_SESSION["transactionList"]; ?> '

if (activeUser !== "PLEASE LOG IN!"){

list = list.split(",");

var transactionsList = list;

var table = document.getElementById("favoritesList");

} else {
  console.log("User hasn't logged in.");
} */

</script>

  <div class="content">
    <?php $pageTitle = "Portfolio"; ?>
    <h3><?php echo $pageTitle ?></h3>
    <br>
    <div id="portfolio">

     <p id="portfolio-intro">Hello, <?php $_SESSION["currentUser"]; ?> welcome to your portfolio. Please enter your transacitons in the form below
     to keep track of your portfolio. Be sure to include the asset name, purchase location, usd value, and date.</p>

     <br>

     <form action="portfolio.php" id="transactions" method="POST">
     <input type="text" name="asset" id="asset" placeholder="Token Name" required>
     <input type="date" name="date" id="date" required>
     <input type="text" name="exchange" id="exchange" placeholder="Purchase Location" required>
     <input type="number" name="USD" id="USD" placeholder="Value in USD" required>
     <input type="submit" value="Submit Transaction">
     </form>

     <br>
     <br>
     <br>
     <br>
     <br>
     <br>

    </div>
  </div>
  <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
</body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>