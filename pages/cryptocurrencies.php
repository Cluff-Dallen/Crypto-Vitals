<html>
  <head>
  <?php include '../inc/head.php'; ?>
  <script type="text/javascript" src='../js/bitcoin.js'></script>
  </head>

  <header>
    <?php include '../inc/header.php'; ?>
  </header>

  <body>
    <?php $pageTitle = "Home"; ?>
    <h3><?php echo $pageTitle?></h3>

    <table id="priceTable" width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <th>Logo</th>
            <th>Name</th>
            <th>Ticker</th>
            <th>Price</th>
            <th>Volume</th>
        </tr>

        <tr>
            <td><img class="logo" src="Ethereum.png" alt="Ethereum logo"></td>
            <td onclick="f1()" id="Bitcoin">Ethereum</td>
            <td id="ethereumTicker">Ticker</td>
            <td id="ethereumPrice">Price</td>
            <td id="ethereumVolume">Volume</td>
        </tr>
        </table>


Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consequuntur corrupti laudantium doloribus laborum vero accusantium rerum deserunt voluptatem dolorem, tempore temporibus magnam commodi dolore explicabo tempora eius, facilis sit.</p>
  </body>

  <footer>
   <?php 
    include ('../inc/footer.php'); 
   ?>
  </footer>
</html>
