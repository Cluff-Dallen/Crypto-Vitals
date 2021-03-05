var coingeckoRequestURL = 'https://api.coingecko.com/api/v3/simple/price?ids=Ethereum&vs_currencies=USD&include_market_cap=true&include_24hr_vol=true&include_24hr_change=true';
var myRequest = new XMLHttpRequest();

myRequest.open('GET',  coingeckoRequestURL);
myRequest.send();

myRequest.onload = function() {

    var currency = JSON.parse(myRequest.responseText);

    var table = document.getElementById("currencyList");
    var rows = 50;

    for (var key in currency){
        var row = table.insertRow(rows);
        rows = rows - 1;

        var cell1 = row.insertCell(0);
        cell1.innerHTML = currency.ethereum.usd_;
    }
}