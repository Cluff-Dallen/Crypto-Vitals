var coingeckoRequestURL = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=false&price_change_percentage=7d';
var myRequest = new XMLHttpRequest();

myRequest.open('GET',  coingeckoRequestURL);
myRequest.send();

myRequest.onload = function() {

    var currency = JSON.parse(myRequest.responseText);

    var table = document.getElementById("myTable");

    var x = 1;

      for (i in currency) {
          console.log(currency[i].id, currency[i].symbol);
          var row = table.insertRow(1);
          var cell = row.insertCell(0);
          x += 1;
          cell.innerHTML = currency[i].id;
      }
}