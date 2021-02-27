var bitcoinRequestURL = 'https://www.cryptonator.com/api/full/btc-usd';
var requestBitcoin = new XMLHttpRequest();

requestBitcoin.open('GET', bitcoinRequestURL);
requestBitcoin.send();

requestBitcoin.onload = function() {

    var bitcoin = JSON.parse(requestBitcoin.responseText);
    document.getElementById('bitcoinTicker').innerHTML = bitcoin.ticker.base;
    document.getElementById('bitcoinPrice').innerHTML = bitcoin.ticker.price;
    document.getElementById('bitcoinVolume').innerHTML = bitcoin.ticker.volume;
    document.getElementById('bitcoinChange').innerHTML = bitcoin.ticker.change;
}