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
//asset = "ethereum";
var coingeckoRequestURL = "https://api.coingecko.com/api/v3/coins/" + asset + "?localization=false&tickers=true&market_data=true&community_data=true&developer_data=true&sparkline=true";
//var coingeckoRequestURL = "https://api.coingecko.com/api/v3/coins/ethereum?tickers=true&market_data=true&community_data=true&developer_data=true&sparkline=true";

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


    console.log("Asset:" + asset);

    var cPriceUSD = currency.market_data.current_price.usd;
    var cPriceBTC = currency.market_data.current_price.btc;
    var cPriceETH = currency.market_data.current_price.eth;
    console.log("Price:" + cPriceUSD);
    console.log("Price:" + cPriceBTC);
    console.log("Price:" + cPriceETH);


    var cMarketcap = currency.market_data.market_cap.usd;
    console.log("Marketcap:" + cMarketcap);

    var cVolume = currency.market_data.total_volume.usd;
    console.log("Volume:" + cVolume);

    var cChange = currency.market_data.price_change_percentage_24h;
    console.log("Change:" + cChange);

    var cImage = currency.image.small;
    console.log("Image:" + cImage);

    var cRank = currency.market_cap_rank;
    console.log("Rank:" + cRank);

    var c_tSupply = currency.market_data.max_supply;
    console.log("tSupply:" + c_tSupply);

    var c_cSupply = currency.market_data.circulating_supply;
    console.log("cSupply:" + c_cSupply);

    var cTicker = currency.symbol;
    console.log("Ticker:" + cTicker);

    var cPrice_24h_low = currency.market_data.low_24h.usd;
    console.log("Price_24_low:" + cPrice_24h_low);

    var cPrice_24h_high = currency.market_data.high_24h.usd;
    console.log("cPrice_24_high:" + cPrice_24h_high);

    var cPrice_7d_change = currency.market_data.price_change_percentage_7d_in_currency.usd;
    console.log("cPrice_7d_change:" + cPrice_7d_change);

    var cATH = currency.market_data.ath.usd;
    console.log("ATH:" + cATH);

    var cATL = currency.market_data.atl.usd;
    console.log("ATL:" + cATL);

    var cDescription = currency.description.en;
    console.log("Description:" + cDescription);


    document.getElementById("cImage").src = cImage;
    document.getElementById('priceUSD').innerHTML = "$" + cPriceUSD + " USD";
    document.getElementById('priceBTC').innerHTML = cPriceBTC.toFixed(8) + " BTC";
    document.getElementById('priceETH').innerHTML = cPriceETH + " ETH";

    document.getElementById('rank').innerHTML = "#" + cRank;
    document.getElementById('marketcap').innerHTML = "$" + cMarketcap + " USD";
    document.getElementById('tSupply').innerHTML = c_tSupply + " " + cTicker.toUpperCase();
    document.getElementById('cSupply').innerHTML =  c_cSupply + " " + cTicker.toUpperCase();

    document.getElementById('volume').innerHTML =  "$" + cVolume + " USD";
    document.getElementById('change').innerHTML = cChange + "%";
    document.getElementById('price_24h_low').innerHTML ="$" + cPrice_24h_low;
    document.getElementById('price_24h_high').innerHTML = "$" + cPrice_24h_high;
    document.getElementById('price_7d_change').innerHTML = cPrice_7d_change.toFixed(2) + "%";
    document.getElementById('ath').innerHTML =  "$" + cATH + " USD";
    document.getElementById('atl').innerHTML =  "$" + cATL + " USD";

    document.getElementById('description').innerHTML = cDescription;





}

</script>
<h3><?php echo ucfirst($token); ?></h3>
  <br>
  <!-- <span class="token-details-img"><img class="token-details-img" src="/images/twitterLogo.png" alt="Token Logo"></span> -->
  <img id="cImage" class="token-details-img" src="tokenImage.png" alt="token-image">
  <br>
  
  <span class="token-details-line">Current price (USD): <span class="token-details" id="priceUSD">USD Price</span></span>
  <span class="token-details-line">Current price (BTC): <span class="token-details" id="priceBTC">BTC Price</span></span>
  <span class="token-details-line">Current price (ETH): <span class="token-details" id="priceETH">ETH Price</span></span>

  <br>

  <span class="token-details-line">Rank: <span class="token-details" id="rank">#26</span></span>
  <span class="token-details-line">Total Marketcap: <span class="token-details" id="marketcap">Marketcap</span></span>
  <span class="token-details-line">Total Supply: <span class="token-details" id="tSupply">Total Supply</span></span>
  <span class="token-details-line">Circulating Supply: <span class="token-details" id="cSupply">Circulating Supply</span></span>

  <br>

  <span class="token-details-line">24h Volume: <span class="token-details" id="volume">volume</span></span>
  <span class="token-details-line">24h Change: <span class="token-details" id="change">change</span></span>
  <span class="token-details-line">24h Price Low / High: <span class="token-details" id="price_24h_low">24h LOW</span> / <span class="token-details" id="price_24h_high">24h HIGH</span></span>
  <span class="token-details-line">7d Price Change: <span class="token-details" id="price_7d_change">Price Change 7D</span></span>
  <span class="token-details-line">All-Time High: <span class="token-details" id="ath">ATH</span></span>
  <span class="token-details-line">All-Time Low: <span class="token-details" id="atl">ATL</span></span>




  <br>

  <span class="token-details-line">Description: <span class="token-details" id="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor consequuntur corrupti laudantium doloribus laborum vero accusantium rerum deserunt voluptatem dolorem, tempore temporibus magnam commodi dolore explicabo tempora eius, facilis sit.</span></span>


  <br>



  </div>
  </body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>