var coingeckoRequestURL = 'https://api.coingecko.com/api/v3/simple/price?ids=Ethereum&vs_currencies=USD&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true';
var myRequest = new XMLHttpRequest();

myRequest.open('GET',  coingeckoRequestURL);
myRequest.send();

myRequest.onload = function() {

    var currency = JSON.parse(myRequest.responseText);
    document.getElementById('price2').innerHTML = currency.ethereum.usd;
    document.getElementById('vol2').innerHTML = currency.Ethereum.usd_24h_vol;
}