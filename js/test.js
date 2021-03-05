var coingeckoRequestURL = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false&price_change_percentage=7d';
var myRequest = new XMLHttpRequest();

myRequest.open('GET',  coingeckoRequestURL);
myRequest.send();

myRequest.onload = function() {

    var currency = JSON.parse(myRequest.responseText);

    var table = document.getElementById("currencyList");
    for (let [key, value] of Object.entries(currency)) {
        console.log(`${key}: ${value}`);
      }

      
for (var key of Object.keys(currency)) {
    console.log(key + " -> " + currency[key])
}
}