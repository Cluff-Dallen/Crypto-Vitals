
//Where is the data coming from?
var coingeckoRequestURL = 'https://api.coingecko.com/api/v3/exchanges';
var myRequest = new XMLHttpRequest();

//How is the data coming? 
myRequest.open('GET',  coingeckoRequestURL);

//Research..
myRequest.send();


//More Research
myRequest.onload = function() {

    /* Create a variable called exchange, and store the entire JSON text inside it.*/
    var exchange = JSON.parse(myRequest.responseText);

    //Create table object, link to HTML by id. 
    var table = document.getElementById("exchangeList");

    //For each item in the exchange array, create a row, add data for each cell.
      for (i in exchange) {

        //Create new row
          var row = table.insertRow(table.rows.length);
         
          //Create cells and add data inside
          var exchange_rank = row.insertCell(0);
          exchange_rank.innerHTML = exchange[i].trust_score_rank;
          exchange_rank.setAttribute("width", "5%");


          var exchange_image = row.insertCell(1);
          var img = document.createElement("img");
          img.setAttribute("class", "exchangeImage");
          img.src = exchange[i].image;
          exchange_image.appendChild(img);
          exchange_image.setAttribute("width", "5%");


          var exchange_name = row.insertCell(2);
          exchange_name.innerHTML = exchange[i].name;  
          exchange_name.setAttribute("width", "10%");


          var exchange_country = row.insertCell(3);
          exchange_country.innerHTML = exchange[i].country;
          exchange_country.setAttribute("width", "10%");


          var exchange_volume = row.insertCell(4);
          exchange_volume.innerHTML = exchange[i].trade_volume_24h_btc + " BTC";
          exchange_volume.setAttribute("width", "12.5%");


          var exchange_year = row.insertCell(5);
          exchange_year.innerHTML =  exchange[i].year_established;
          exchange_year.setAttribute("width", "7.5%");

          var exchange_url = row.insertCell(6);
          exchange_url.innerHTML = exchange[i].url;
          exchange_url.setAttribute("width", "15%");
      }
}