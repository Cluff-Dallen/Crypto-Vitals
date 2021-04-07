<?php 
session_start();
?>
<html>

<head>
  <?php include '../inc/head.php'; ?>
</head>

<header>
  <?php include '../inc/header.php'; ?>
</header>

<body>
<?php 

echo "Welcome, " . $_SESSION["currentUser"];

?>
<script type="text/javascript">

console.log('<?php echo $_SESSION["currentUser"]; ?>');

var activeUser = '<?php echo $_SESSION["currentUser"]; ?>';

if (activeUser != "PLEASE LOG IN!"){
  console.log("USER IS LOGGED IN.");




<?php 
require "../db/dbConnect.php";
$db = get_db();
$stmt = $db->prepare("SELECT * FROM favorites WHERE user_email=?");
$stmt->execute([$email]);
$user = $stmt->fetch();

echo $stmt;

?>


var urlBeginning = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=";

var work = sessionStorage.getItem("transferList");
console.log(typeof work);
work = work.split(",");
console.log(typeof work);

var favoritesList = work;

var urlList = "bitcoin";

console.log(favoritesList.length);

for (x = 1; x < favoritesList.length; x++){
  console.log(favoritesList[x]);
  urlList = urlList + "%2C%20" + favoritesList[x];
  console.log(favoritesList[x]);
  console.log(x);
}

console.log(urlList);

var urlEnd = "&order=market_cap_desc&per_page=100&page=1&sparkline=true&price_change_percentage=1h%2C%2024h%2C%207d%2C%2030d";

var urlComplete = urlBeginning + urlList + urlEnd;

console.log(urlComplete);

//Where is the data coming from?
var coingeckoRequestURL = urlComplete;
var myRequest = new XMLHttpRequest();

//How is the data coming? 
myRequest.open('GET', coingeckoRequestURL);

//Research..
myRequest.send();

//More Research
myRequest.onload = function () {

//Create a variable called currency, and store the entire JSON text inside it.
var currency = JSON.parse(myRequest.responseText);

//Create table object, link to HTML by id. 
var table = document.getElementById("favoritesList");


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
 result = currency[i].name;
 id = currency[i].id;
 var url = "http://www.crypto-vitals.com/pages/token-details.php?id=" + id;
 result = result.link(url);

currency_name.innerHTML = result;
currency_name.setAttribute("width", "12%");


var currency_symbol = row.insertCell(3);
currency_symbol.innerHTML = currency[i].symbol.toUpperCase();
currency_symbol.setAttribute("width", "8%");


var currency_price = row.insertCell(4);
currency_price.innerHTML = "$" + currency[i].current_price.toLocaleString();
currency_price.setAttribute("width", "10%");


var currency_24h_change = row.insertCell(5);
currency_24h_change.innerHTML = "$" + currency[i].price_change_24h;
currency_24h_change.setAttribute("width", "12%");

var currency_24h_volume = row.insertCell(6);
currency_24h_volume.innerHTML = "$" + currency[i].total_volume.toLocaleString();
currency_24h_volume.setAttribute("width", "12%");


var currency_marketcap = row.insertCell(7);
currency_marketcap.innerHTML = "$" + currency[i].market_cap.toLocaleString();
currency_marketcap.setAttribute("width", "10%"); 
} 
}



} else {
  console.log("User hasn't logged in.");
}

</script>
  <div class="content">
    <?php $pageTitle = "Favorites"; ?>
   
    <h3><?php echo $pageTitle ?></h3>
    <br>
    <hr>
    <table id="favoritesList" width="100%" cellspacing="0" cellpadding="0">
    <tr>
    <th>Rank</th>
    <th>Image</th>
    <th>Name</th>
    <th>Ticker</th>
    <th>Price</th>
    <th>24h Change</th>
    <th>Volume</th>
    <th>Marketcap</th>
  </tr>
    </table>
  </div>
</body>
<footer>
  <?php
  include('../inc/footer.php');
  ?>
</footer>

</html>