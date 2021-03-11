
//Where is the data coming from?
var coingeckoRequestURL = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=true&price_change_percentage=24h';
var myRequest = new XMLHttpRequest();

//How is the data coming? 
myRequest.open('GET',  coingeckoRequestURL);

//Research..
myRequest.send();


//More Research
myRequest.onload = function() {

    /* Create a variable called currency, and store the entire JSON text inside it.*/
    var currency = JSON.parse(myRequest.responseText);

    //Create table object, link to HTML by id. 
    var table = document.getElementById("currencyList");

    //For each item in the currency array, create a row, add data for each cell.
      for (i in currency) {

        //Create new row
          var row = table.insertRow(table.rows.length);
         
          //Create cells and add data inside
          var currency_rank = row.insertCell(0);
          currency_rank.innerHTML = currency[i].market_cap_rank;
          currency_rank.setAttribute("width", "5%");


          var currency_image = row.insertCell(1);
          var img = document.createElement("img");
          img.setAttribute("class", "currencyImage");
          img.src = currency[i].image;
          currency_image.appendChild(img);
          currency_image.setAttribute("width", "5%");


          var currency_name = row.insertCell(2);
          currency_name[i].name = str.link("https://www.yahoo.com"); 
          currency_name.innerHTML = currency[i].name;  
          currency_name.setAttribute("width", "12.5%");


          var currency_symbol = row.insertCell(3);
          currency_symbol.innerHTML = currency[i].symbol;
          currency_symbol.setAttribute("width", "10%");


          var currency_price = row.insertCell(4);
          currency_price.innerHTML = "$" + currency[i].current_price;
          currency_price.setAttribute("width", "12.5%");


          var currency_24h_change = row.insertCell(5);
          currency_24h_change.innerHTML =  "$" + currency[i].price_change_24h;
          currency_24h_change.setAttribute("width", "15%");

          var currency_24h_volume = row.insertCell(6);
          currency_24h_volume.innerHTML =  "$" + currency[i].total_volume;
          currency_24h_volume.setAttribute("width", "15%");


          var currency_marketcap = row.insertCell(7);
          currency_marketcap.innerHTML =  "$" + currency[i].market_cap;
          currency_marketcap.setAttribute("width", "20%");
      }
}