//var bitcoinRequestURL = 'https://www.cryptonator.com/api/full/btc-usd';

var bitcoinRequestURL = 'https://api.coingecko.com/api/v3/simple/price?ids=Ethereum&vs_currencies=USD&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true';
var requestBitcoin = new XMLHttpRequest();

requestBitcoin.open('GET', bitcoinRequestURL);
requestBitcoin.send();

requestBitcoin.onload = function() {

   /*var bitcoin = JSON.parse(requestBitcoin.responseText);
    document.getElementById('bitcoinTicker').innerHTML = bitcoin.ticker.base;
    document.getElementById('bitcoinPrice').innerHTML = bitcoin.ticker.price;
    document.getElementById('bitcoinVolume').innerHTML = bitcoin.ticker.volume;
    document.getElementById('bitcoinChange').innerHTML = bitcoin.ticker.change;*/

    var bitcoin = JSON.parse(requestBitcoin.responseText);
    document.getElementById('bitcoinPrice').innerHTML = ethereum.usd;
    document.getElementById('bitcoinVolume').innerHTML = ethereum.usd_24h_vol;
    document.getElementById('bitcoinChange').innerHTML = ethereum.usd_24h_change;
}