<html>
  <head>
  <?php include '../inc/head.php'; ?>
  </head>

  <header>
    <?php include '../inc/header.php'; ?>
  </header>

  <body>
  <div class="content">
      <?php $pageTitle = "Portfolio"; ?>
      <h3><?php echo $pageTitle?></h3>
      <br>
      <div id="portfolio">
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
      </div>
      </div>
    </body>

  <footer>
   <?php 
    include ('../inc/footer.php'); 
   ?>
  </footer>
</html>