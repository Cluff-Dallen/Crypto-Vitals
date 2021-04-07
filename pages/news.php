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
  <?php 

echo "Welcome, " . $_SESSION["currentUser"];

?>
  <?php $pageTitle = "Crypto News"; ?>
  <div id="twitters">
    <div class="newsTitle">
      <h3><?php echo $pageTitle?></h3>
      <br>
    </div>
    <a class="twitter-timeline" data-chrome="noheader noborders" href="https://twitter.com/Dallen_C?ref_src=twsrc%5Etfw"></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  </div> 
 </body>

  <footer>
   <?php 
    include ('../inc/footer.php'); 
   ?>
  </footer>
</html>