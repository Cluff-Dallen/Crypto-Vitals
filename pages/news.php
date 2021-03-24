<html>
  <head>
  <?php include '../inc/head.php'; ?>
  </head>

  <header>
    <?php include '../inc/header.php'; ?>
  </header>

  <body>
    <?php $pageTitle = "News"; ?>
    <h3><?php echo $pageTitle?></h3>
    <a class="twitter-timeline" data-width="500" data-height="1000" data-theme="dark" href="https://twitter.com/TwitterDev?ref_src=twsrc%5Etfw">Tweets by TwitterDev</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </body>

  <footer>
   <?php 
    include ('../inc/footer.php'); 
   ?>
  </footer>
</html>