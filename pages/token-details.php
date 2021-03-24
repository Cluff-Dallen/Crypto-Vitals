<html>

<head>
  <?php include '../inc/head.php'; ?>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
<?php $token =$_GET['id'];?>
<script type="text/javascript">
    var asset = <?php Print($token); ?>;

var coingeckoRequestURL = 'https://api.coingecko.com/api/v3/simple/price?ids=Ethereum&vs_currencies=USD&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true';
var myRequest = new XMLHttpRequest();

myRequest.open('GET', coingeckoRequestURL);
myRequest.send();

myRequest.onload = function () {

    var currency = JSON.parse(myRequest.responseText);
    document.getElementById('price2').innerHTML = currency.ethereum.usd;
    document.getElementById('vol2').innerHTML = currency.ethereum.usd_24h_vol;
}

</script>
  <h3><?php echo $token?></h3>
  <span id="price2">price</span>
  <span id="vol2">volume</span>

  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consequuntur corrupti laudantium doloribus laborum vero accusantium rerum deserunt voluptatem dolorem, tempore temporibus magnam commodi dolore explicabo tempora eius, facilis sit.</p>
</body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>