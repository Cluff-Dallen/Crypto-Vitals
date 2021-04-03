<html>

<head>
  <?php include '../inc/head.php'; ?>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body onload="atStart()">
  <div id="content">
    <?php $pageTitle = "Converter"; ?>
    <h3><?php echo $pageTitle ?></h3>
    <br>
    <script>
      function atStart() {
        var tokenID = "Bitcoin"; //default

        document.getElementById("tokenID").value = tokenID;

        //Where is the data coming from?
        var coingeckoRequestURL = 'https://api.coingecko.com/api/v3/simple/price?ids=' + tokenID + '&vs_currencies=USD&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true';


        var myRequest = new XMLHttpRequest();

        //How is the data coming? 
        myRequest.open('GET', coingeckoRequestURL);

        //Research..
        myRequest.send();


        //More Research
        myRequest.onload = function() {


          /* Create a variable called currency, and store the entire JSON text inside it.*/
          var currentTokenPrice = JSON.parse(myRequest.responseText);

          var tokenPrice = currentTokenPrice.bitcoin.usd;
          document.getElementById("usdInput").value = tokenPrice;
          document.getElementById("tokenInput").value = 1;



          //document.getElementById('usdInput').value = btcPrice;

        }
      }

      function refresh() {
        tokenID = document.getElementById("tokenID").value;
        document.getElementById("tokenID").value = tokenID;

        document.getElementById("token").innerHTML = tokenID;



        //Where is the data coming from?
        var coingeckoRequestURL = 'https://api.coingecko.com/api/v3/simple/price?ids=' + tokenID + '&vs_currencies=USD&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true';


        var myRequest = new XMLHttpRequest();

        //How is the data coming? 
        myRequest.open('GET', coingeckoRequestURL);

        //Research..
        myRequest.send();


        //More Research
        myRequest.onload = function() {


          /* Create a variable called currency, and store the entire JSON text inside it.*/
          var currentTokenPrice = JSON.parse(myRequest.responseText);

          console.log(tokenID);
          console.log(JSON.stringify(currentTokenPrice));
          var x = tokenID;
          tokenPrice = console.log(currentTokenPrice[x].usd);


          tokenPrice = currentTokenPrice[x].usd;

          document.getElementById("usdInput").value = tokenPrice;
          document.getElementById("tokenInput").value = 1;



          //document.getElementById('usdInput').value = btcPrice;

        }
      }
    </script>

    <div id="converter">

      <label for="tokenID">What token would you like to convert?</label>
      <br><br>
      <div class="convertLine">
      <select name="tokenID" id="tokenID"  onchange="refresh()">
        <option value="bitcoin">Bitcoin</option>
        <option value="ethereum">Ethereum</option>
        <option value="ripple">XRP</option>
        <option value="beaxy-exchange">BXY</option>
        <option value="litecoin">LTC</option>
        <option value="polkadot">DOT</option>
        <option value="bitcoin-cash">BCH</option>
        <option value="bitcoin-sv">BSV</option>
      </select>
      </div>
      <br>
      <br>
      <div class="convertLine"><input id="tokenInput" name="tokenInput" type="number" onchange="convertToUSD()" placeholder=" # of token"><label id="token" for="tokenInput">BTC</label></div>
      <div class="convertLine"><input id="usdInput" name="usdInput" type="number" onchange="convertToToken()"><label for="usdInput">USD</label></div>
      <br><br><br>
    </div>

    <script>
      function convertToUSD() {
        document.getElementById("usdInput").value = document.getElementById("tokenInput").value * tokenPrice;
      }

      function convertToToken() {
        document.getElementById("tokenInput").value = document.getElementById("usdInput").value / tokenPrice;
      }
    </script>
  </div>
  <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br><br>
      <br>
</body>

<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>