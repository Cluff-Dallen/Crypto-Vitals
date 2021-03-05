//var bitcoinRequestURL = 'https://www.cryptonator.com/api/full/btc-usd';

var ethereumRequestURL = 'https://api.coingecko.com/api/v3/simple/price?ids=Ethereum&vs_currencies=USD&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true';
var requestEthereum = new XMLHttpRequest();

requestEthereum.open('GET', ethereumRequestURL);
requestEthereum.send();

requestEthereum.onload = function() {

   /*var bitcoin = JSON.parse(requestBitcoin.responseText);
    document.getElementById('bitcoinTicker').innerHTML = bitcoin.ticker.base;
    document.getElementById('bitcoinPrice').innerHTML = bitcoin.ticker.price;
    document.getElementById('bitcoinVolume').innerHTML = bitcoin.ticker.volume;
    document.getElementById('bitcoinChange').innerHTML = bitcoin.ticker.change;*/

    var ethereum = JSON.parse(requestEthereum.responseText);
    document.getElementById('ethereumPrice').innerHTML = ethereum.ethereum.usd;
    document.getElementById('ethereumVolume').innerHTML = ethereum.ethereum.usd_24h_vol;
    document.getElementById('ethereumChange').innerHTML = ethereum.ethereum.usd_24h_change;
}