<html>

<head>
  <?php include '../inc/head.php'; ?>
  <script type="text/javascript" src='../js/coingecko_currencies.js'></script>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
  <div class="content">
  <form action="token-details.php" id="form-id" method="post">
    <?php $pageTitle = "Cryptocurrencies"; ?>
    <h3><?php echo $pageTitle ?></h3>
    <br>
    <hr>
    <table id="currencyList" width="100%" cellspacing="0" cellpadding="0">
    </table>
  </div>
  </form>
</body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>