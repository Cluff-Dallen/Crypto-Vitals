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
<div class="profile-bar"><?php echo "Welcome, " . $_SESSION["currentUser"]; ?></div>

  <div class="content">
    <?php $token = $_GET['id']; ?>

    <script type="text/javascript">

    var $true = "hello";
    var $testing = "hi";


      var asset = "<?php echo $token; ?>";
      var coingeckoRequestURL = "https://api.coingecko.com/api/v3/coins/" + asset + "?localization=false&tickers=true&market_data=true&community_data=true&developer_data=true&sparkline=true";
      var myRequest = new XMLHttpRequest();

      myRequest.open('GET', coingeckoRequestURL);
      myRequest.send();
      myRequest.onload = function() {

        var currency = JSON.parse(myRequest.responseText);
        var cPriceUSD = currency.market_data.current_price.usd;
        var cPriceBTC = currency.market_data.current_price.btc;
        var cPriceETH = currency.market_data.current_price.eth;
        var cMarketcap = currency.market_data.market_cap.usd;
       
        cMarketcap = cMarketcap.toLocaleString();

        var cVolume = currency.market_data.total_volume.usd;
        
        cVolume = cVolume.toLocaleString();

        var cChange = currency.market_data.price_change_percentage_24h;
        var cImage = currency.image.small;
        var cRank = currency.market_cap_rank;
        var c_tSupply = currency.market_data.max_supply;
        var cTicker = currency.symbol;

        if (c_tSupply != null) {
          c_tSupply = c_tSupply.toLocaleString() + " " + cTicker.toUpperCase();
        } else {
          c_tSupply = "N/A";
        }

        var c_cSupply = currency.market_data.circulating_supply;
        if (c_cSupply != null) {
          c_cSupply = c_cSupply.toLocaleString() + " " + cTicker.toUpperCase();
        } else {
          c_cSupply = "N/A";
        }

        var cPrice_24h_low = currency.market_data.low_24h.usd;
        var cPrice_24h_high = currency.market_data.high_24h.usd;
        var cPrice_7d_change = currency.market_data.price_change_percentage_7d_in_currency.usd;
        var cATH = currency.market_data.ath.usd;
        var cATL = currency.market_data.atl.usd;
        var cDescription = currency.description.en;


        document.getElementById("cImage").src = cImage;
        document.getElementById('priceUSD').innerHTML = "$" + cPriceUSD + " USD";
        document.getElementById('priceBTC').innerHTML = cPriceBTC.toFixed(8) + " BTC";
        document.getElementById('priceETH').innerHTML = cPriceETH + " ETH";

        document.getElementById('rank').innerHTML = "#" + cRank;
        document.getElementById('marketcap').innerHTML = "$" + cMarketcap + " USD";
        document.getElementById('tSupply').innerHTML = c_tSupply;
        document.getElementById('cSupply').innerHTML = c_cSupply;

        document.getElementById('volume').innerHTML = "$" + cVolume + " USD";
        document.getElementById('change').innerHTML = cChange + "%";
        document.getElementById('price_24h_low').innerHTML = "$" + cPrice_24h_low;
        document.getElementById('price_24h_high').innerHTML = "$" + cPrice_24h_high;
        document.getElementById('price_7d_change').innerHTML = cPrice_7d_change.toFixed(2) + "%";
        document.getElementById('ath').innerHTML = "$" + cATH + " USD";
        document.getElementById('atl').innerHTML = "$" + cATL + " USD";

        document.getElementById('description').innerHTML = cDescription;
      }
    </script>
    <h3><?php echo ucfirst($token); ?></h3>
    
    <br>
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

    <form action="favorite-result.php" method="POST">
    <button class="favbtns" name="true" value="<?php echo $token; ?>" type="submit">Add as Favorites</button>
    <br>
    <button class="favbtns" name="false" value="<?php echo $token; ?>" type="submit">Remove from Favorites</button>
    </form>
  </div>
</body>

<footer>
  <?php
    include('../inc/footer.php');
  ?>
</footer>
</html>