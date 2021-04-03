
  //var favoritesList = ["bitcoin", "ethereum", "chainlink" ];

  var favoritesList = sessionStorage.getItem("transferList");
  favoritesList = favoritesList + " ";
  favoritesList = favoritesList.split(",");

  console.log(typeof work);


function addtoFavorites(tokenname){
  favoritesList.push(tokenname);
  console.log("Added:" + favoritesList);

  var favsURL = favoritesList.toString();
  var favsURL = favsURL.split(",");

  console.log("Updated from addition: " + favsURL);
  sessionStorage.setItem("transferList", favsURL);
  console.log(typeof favoritesList);
  console.log(typeof favsURL);
}

function removeFromFavorites(tokenname){
for (var i = favoritesList.length - 1; i >= 0; i--) {
    if (favoritesList[i] === tokenname) {
     favoritesList.splice(i, 1);
    }
   }
  console.log("Removed: " + tokenname);
  var favsURL = favoritesList.toString();
  console.log("Updated from removal: " + favsURL);
  sessionStorage.setItem("transferList", favsURL);

}

function checkFavorites(){
  //alert("removed");
  }


//Where is the data coming from?
var coingeckoRequestURL = 'https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&order=market_cap_desc&per_page=100&page=1&sparkline=true&price_change_percentage=24h';
var myRequest = new XMLHttpRequest();

//How is the data coming? 
myRequest.open('GET', coingeckoRequestURL);

//Research..
myRequest.send();

//More Research
myRequest.onload = function () {

  /* Create a variable called currency, and store the entire JSON text inside it.*/
  var currency = JSON.parse(myRequest.responseText);

  //Create table object, link to HTML by id. 
  var table = document.getElementById("currencyList");

  //For each item in the currency array, create a row, add data for each cell.
  for (i in currency) {

    //Create new row
    var row = table.insertRow(table.rows.length);

    //Create cells and add data inside

    checkFavorites();

    var cfavorite = row.insertCell(0);
    var fav = document.createElement('input');

    fav.setAttribute("class", "cFavorites");
    fav.setAttribute('type', 'checkbox');

    var currency_rank = row.insertCell(1);
    currency_rank.innerHTML = currency[i].market_cap_rank;
    currency_rank.setAttribute("width", "5%");


    var currency_image = row.insertCell(2);
    var img = document.createElement("img");
    img.setAttribute("class", "currencyImage");
    img.src = currency[i].image;
    currency_image.appendChild(img);
    currency_image.setAttribute("width", "5%");



    var currency_name = row.insertCell(3);
     result = currency[i].name;
     id = currency[i].id;
     var url = "http://www.crypto-vitals.com/pages/token-details.php?id=" + id;
     result = result.link(url);

     fav.setAttribute('value', id);
     fav.setAttribute("id", id);

     cfavorite.appendChild(fav);
     cfavorite.setAttribute("width", "1%"); 

     fav.addEventListener("click",function(){
      var tokenname = this.value;
      console.log(tokenname);
      
      if (document.getElementById(tokenname).checked){
        addtoFavorites(tokenname);

      } else {
        removeFromFavorites(tokenname);
      }
    });

    currency_name.innerHTML = result;
    currency_name.setAttribute("width", "12%");


    var currency_symbol = row.insertCell(4);
    currency_symbol.innerHTML = currency[i].symbol.toUpperCase();
    currency_symbol.setAttribute("width", "8%");


    var currency_price = row.insertCell(5);
    currency_price.innerHTML = "$" + currency[i].current_price.toLocaleString();
    currency_price.setAttribute("width", "10%");


    var currency_24h_change = row.insertCell(6);
    currency_24h_change.innerHTML = "$" + currency[i].price_change_24h;
    currency_24h_change.setAttribute("width", "12%");

    var currency_24h_volume = row.insertCell(7);
    currency_24h_volume.innerHTML = "$" + currency[i].total_volume.toLocaleString();
    currency_24h_volume.setAttribute("width", "12%");


    var currency_marketcap = row.insertCell(8);
    currency_marketcap.innerHTML = "$" + currency[i].market_cap.toLocaleString();
    currency_marketcap.setAttribute("width", "10%");
  }
}