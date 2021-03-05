var bitcoinRequestURL = 'https://www.cryptonator.com/api/full/btc-usd';
var requestBitcoin = new XMLHttpRequest();

requestBitcoin.open('GET', bitcoinRequestURL);
requestBitcoin.send();

requestBitcoin.onload = function() {

    var bitcoin = JSON.parse(requestBitcoin.responseText);
    document.getElementById('currencyPrice').innerHTML = bitcoin.ticker.price;
    document.getElementById('bitcoinVolume').innerHTML = bitcoin.ticker.volume;
}