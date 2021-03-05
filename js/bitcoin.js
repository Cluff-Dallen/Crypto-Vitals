var bitcoinRequestURL = 'https://www.cryptonator.com/api/full/btc-usd';

//var bitcoinRequestURL = 'https://api.coingecko.com/api/v3/coins/bitcoin?tickers=true&market_data=true';
var requestBitcoin = new XMLHttpRequest();

requestBitcoin.open('GET', bitcoinRequestURL);
requestBitcoin.send();

requestBitcoin.onload = function() {

   var bitcoin = JSON.parse(requestBitcoin.responseText);
    document.getElementById('bitcoinTicker').innerHTML = bitcoin.ticker.base;
    document.getElementById('bitcoinPrice').innerHTML = bitcoin.ticker.price;
    document.getElementById('bitcoinVolume').innerHTML = bitcoin.ticker.volume;
    document.getElementById('bitcoinChange').innerHTML = bitcoin.ticker.change;

    /*var bitcoin = JSON.parse(requestBitcoin.responseText);
    document.getElementById('bitcoinPrice').innerHTML = bitcoin.id;
    document.getElementById('bitcoinVolume').innerHTML = bitcoin.name;
    document.getElementById('bitcoinChange').innerHTML = bitcoin.bitcoin.symbol;*/
}