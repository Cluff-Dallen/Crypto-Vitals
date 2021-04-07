<?php 

session_start();

?>


<html>
<head>
  <?php include '../inc/head.php';?>
  <script type="text/javascript" src='../js/coingecko_currencies.js'></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
<?php 

echo "Welcome, " . $_SESSION["currentUser"];

?>
  <div class="content">
  <form action="token-details.php" id="form-id" method="post">
    <?php $pageTitle = "Cryptocurrencies"; ?>
    <h3><?php echo $pageTitle ?></h3>
    <br>
    <hr>
    <table id="currencyList" width="100%" cellspacing="0" cellpadding="0">
    <tr>
    <th><span id="testfav" onclick="favClick(this, 'red')" class="material-icons">star_rate</span></th>
    <th>Rank</th>
    <th>Image</th>
    <th>Name</th>
    <th>Ticker</th>
    <th>Price</th>
    <th>24h Change</th>
    <th>Volume</th>
    <th>Marketcap</th>
  </tr>
    </table>
    <BUTTON>Try Me</BUTTON>
  </div>
  </form>
</body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>