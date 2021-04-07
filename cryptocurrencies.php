<?php 

session_start();
$_SESSION["currentUser"] = "PLEASE LOG IN!";
?>
<html>

<head>
  <?php include 'inc/head.php'; ?>
  <script type="text/javascript" src='js/coingecko_currencies.js'></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<header>
  <?php include 'inc/header.php'; ?>
</header>

<body onload="js/coingecko_currencies.js">
  <div class="content">
  <form action="token-details.php" id="form-id" method="post">
    <?php $pageTitle = "Cryptocurrencies"; ?>
    <h3><?php echo $pageTitle ?></h3>
    <br>
    <hr>
    <table id="currencyList" width="100%" cellspacing="0" cellpadding="0">
    <tr>
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
  </div>
  </form>
</body>

<footer>
  <?php
  include('inc/footer.php');
  ?>
</footer>

</html>