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
          var row = table.insertRow(i);
         
          var currency_rank = row.insertCell(0);
          currency_rank.innerHTML = currency[i].market_cap_rank;

          var currency_id = row.insertCell(1);
          currency_id.innerHTML = currency[i].id;

          var currency_symbol = row.insertCell(2);
          currency_symbol.innerHTML = currency[i].symbol;

          var currency_price = row.insertCell(3);
          currency_price.innerHTML = currency[i].current_price;

          var currency_24h_change = row.insertCell(4);
          currency_24h_change.innerHTML = currency[i].price_change_24h;

          var currency_24h_volume = row.insertCell(5);
          currency_24h_volume.innerHTML = currency[i].total_volume;

          var currency_marketcap = row.insertCell(6);
          currency_marketcap.innerHTML = currency[i].market_cap;

          x += 1;
      }
}