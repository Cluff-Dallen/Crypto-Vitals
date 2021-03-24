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
    var asset = "<?php echo $token;?>";

var coingeckoRequestURL = "https://api.coingecko.com/api/v3/simple/price?ids=" + asset + "&vs_currencies=USD&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true";
var myRequest = new XMLHttpRequest();

myRequest.open('GET', coingeckoRequestURL);
myRequest.send();

myRequest.onload = function () {

    var currency = JSON.parse(myRequest.responseText);

    console.log("asset:" + asset);

    var x = asset;
    console.log("x:" + x);

    var cPrice = currency[x].usd;
    console.log("cPrice:" + cPrice);

    var cVolume = currency[x].usd_24h_vol;
    console.log("cVolume:" + cVolume);



    document.getElementById('price').innerHTML = cPrice;
    document.getElementById('volume').innerHTML = cVolume;
}

</script>
  <h3><?php echo $token?></h3>
  <span id="price">price</span>
  <span id="volume">volume</span>

  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consequuntur corrupti laudantium doloribus laborum vero accusantium rerum deserunt voluptatem dolorem, tempore temporibus magnam commodi dolore explicabo tempora eius, facilis sit.</p>
</body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>