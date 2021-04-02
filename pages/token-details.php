<html>

<head>
  <?php include '../inc/head.php'; ?>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
<div class="content">
<?php $token =$_GET['id'];?>
<script type="text/javascript">

var asset = "<?php echo $token;?>";
//var coingeckoRequestURL = "https://api.coingecko.com/api/v3/simple/price?ids=" + asset + "&vs_currencies=USD&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true";
asset = "ethereum";
var coingeckoRequestURL = "https://api.coingecko.com/api/v3/coins/" + asset + "?localization=false&tickers=true&market_data=true&community_data=true&developer_data=true&sparkline=true";

var myRequest = new XMLHttpRequest();

myRequest.open('GET', coingeckoRequestURL);
myRequest.send();

myRequest.onload = function () {

    var currency = JSON.parse(myRequest.responseText);

    /*
    var cPrice = currency[x].market_data.current_price.usd;
    var cMarketcap = currency[x].usd_market_cap;
    var cVolume = currency[x].usd_24h_vol;
    var cChange = currency[x].usd_24h_change; */

    
    var cPrice = currency.market_data.current_price.usd;
    var cMarketcap = currency.market_cap.usd;
    var cVolume = currency.total_volume.usd;
    var cChange = currency.price_change_percentage_24h;

    console.log("Asset:" + asset);
    console.log("Marketcap:" + cMarketcap);
    console.log("Price:" + cPrice);
    console.log("Volume:" + cVolume);
    console.log("Change:" + cChange);

    document.getElementById('price').innerHTML = "$" + cPrice + " USD";
    document.getElementById('marketcap').innerHTML = "$" + cMarketcap + " USD";
    document.getElementById('volume').innerHTML =  "$" + cVolume + " USD";
    document.getElementById('change').innerHTML = cChange + "%";

}

</script>
  <h3>Bitcoin</h3>
  <br>
  <span class="token-details-img"><img class="token-details-img" src="/images/twitterLogo.png" alt="Token Logo"></span>
  <br>
  
  <span class="token-details-line">Current price (USD): <span class="token-details" id="price">price</span></span>
  <span class="token-details-line">Current price (BTC): <span class="token-details" id="price">0.00000045 BTC</span></span>
  <span class="token-details-line">Current price (ETH): <span class="token-details" id="price">0.00000684 ETH</span></span>

  <br>

  <span class="token-details-line">Rank: <span class="token-details" id="change">#26</span></span>
  <span class="token-details-line">Total Marketcap: <span class="token-details" id="marketcap">marketcap</span></span>
  <span class="token-details-line">Total Supply: <span class="token-details" id="change">500,000,000</span></span>
  <span class="token-details-line">Circulating Supply: <span class="token-details" id="change">295,000,000</span></span>



  <br>

  <span class="token-details-line">24h Volume: <span class="token-details" id="volume">volume</span></span>
  <span class="token-details-line">24h Change: <span class="token-details" id="change">change</span></span>
  <span class="token-details-line">24h Low / 24h high: <span class="token-details" id="change">$0.14 / $0.21</span></span>
  <span class="token-details-line">7d Low / 7d high: <span class="token-details" id="change">$0.11 / $0.29</span></span>
  <span class="token-details-line">All-Time High: <span class="token-details" id="change">$15.41</span></span>



  <br>

  <span class="token-details-line">About: <span class="token-details" id="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consequuntur corrupti laudantium doloribus laborum vero accusantium rerum deserunt voluptatem dolorem, tempore temporibus magnam commodi dolore explicabo tempora eius, facilis sit.</span></span>


  <br>



  </div>
  </body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>