//Where is the data coming from?
var coingeckoRequestURL = 'https://api.coingecko.com/api/v3/simple/price?ids=Bitcoin&vs_currencies=USD&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true';
var myRequest = new XMLHttpRequest();

//How is the data coming? 
myRequest.open('GET', coingeckoRequestURL);
myRequest.send();
myRequest.onload = function () {

  /* Create a variable called currency, and store the entire JSON text inside it.*/
  var currentTokenPrice = JSON.parse(myRequest.responseText);
  tokenPrice = currentTokenPrice.bitcoin.usd;
}