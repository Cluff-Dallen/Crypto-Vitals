var bitcoinRequestURL = 'https://www.cryptonator.com/api/full/btc-usd';
var requestBitcoin = new XMLHttpRequest();

requestBitcoin.open('GET', bitcoinRequestURL);
requestBitcoin.send();

requestBitcoin.onload = function() {

    var bitcoin = JSON.parse(requestBitcoin.responseText);
    document.getElementById('price').innerHTML = bitcoin.ticker.price;
    document.getElementById('vol').innerHTML = bitcoin.ticker.volume;
}