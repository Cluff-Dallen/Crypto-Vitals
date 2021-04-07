<?php 
session_start();
?>

<html>

<head>
  <?php include '../inc/head.php'; ?>
  <script type="text/javascript" src='../js/coingecko_exchanges.js'></script>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
<?php 

echo "Welcome, " . $_SESSION["currentUser"];

?>
  <div class="content">
    <?php $pageTitle = "Exchanges"; ?>
    <h3><?php echo $pageTitle ?></h3>
    <br>
    <hr>
    <table id="exchangeList" width="100%" cellspacing="0" cellpadding="0">
    <tr>
    <th>Rank</th>
    <th>Image</th>
    <th>Name</th>
    <th>Ticker</th>
    <th>Volume</th>
    <th>Start Date</th>
    <th>Site</th>
  </tr>
    </table>
  </div>
</body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>