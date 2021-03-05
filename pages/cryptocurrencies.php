<html>
  <head>
  <?php include '../inc/head.php'; ?>
  <script type="text/javascript" src='../js/cryptonator.js'></script>
  <script type="text/javascript" src='../js/coingecko.js'></script>
  <script type="text/javascript" src='../js/test.js'></script>

  </head>

  <header>
    <?php include '../inc/header.php'; ?>
  </header>

  <body>
    <?php $pageTitle = "Home"; ?>
    <h3><?php echo $pageTitle?></h3>

    <table id="priceTable" width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <th>price</th>
            <th>vol</th>
        </tr>

        <tr>
            <td id="price1">price1</td>
            <td id="vol1">vol1</td>
        </tr>

        <tr>
            <td id="price2">price2</td>
            <td id="vol2">vol2</td>
        </tr>

        </table>

        <table id="myTable" width="100%" cellspacing="0" cellpadding="0">
        <tr>
            <th>Rank: </th>
            <th>Currency: </th>
            <th>Ticker: </th>
            <th>Price: </th>
            <th>24h Change: </th>
            <th>24h Volume: </th>
            <th>Market Cap: </th>
        </tr>
        </table>


Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consequuntur corrupti laudantium doloribus laborum vero accusantium rerum deserunt voluptatem dolorem, tempore temporibus magnam commodi dolore explicabo tempora eius, facilis sit.</p>
  </body>

  <footer>
   <?php 
   // include ('../inc/footer.php'); 
   ?>
  </footer>
</html>
