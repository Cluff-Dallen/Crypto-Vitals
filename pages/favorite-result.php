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
 $add = $_POST['true'];
 $remove = $_POST['false'];
 $you = $_SESSION["currentUser"];

 //Connect to DB
 require "../db/dbConnect.php";
 $db = get_db();


 if ($remove == ""){
   echo ">Adding<";
 
 //Insert results into DB
 $statement = $db->prepare("INSERT INTO favorites(favorite_coingecko_id, emailOfThisFavorite) SELECT '$add', '$you' WHERE NOT EXISTS (SELECT favorite_coingecko_id, emailOfThisFavorite FROM favorites WHERE (emailOfThisFavorite = '$you' AND favorite_coingecko_id = '$add'));"); 
 $statement->execute();
 }

 if ($add == ""){
  echo ">Removing<";

  //Delete results from DB
 $statement = $db->prepare("DELETE FROM favorites where emailOfThisFavorite = '$you' AND favorite_coingecko_id = '$remove';"); 
 $statement->execute();
 }


 
$conn = pg_connect("host=ec2-3-216-181-219.compute-1.amazonaws.com port=5432 dbname=d807d5gmkubr3a user=girkmmugorgrnp password=3d9767bc57920a3bc22f771b885d47b7d3a880f23f8fb2a9cc08a5aa5ed96be8");
if (!$conn) {
  echo "An error occurred.\n";
  exit;
}
$result = pg_query($conn, "SELECT * FROM favorites WHERE emailOfThisFavorite = 'cluffrdallen@gmail.com'");
if (!$result) {
  echo "An error occurred.\n";
  exit;
}

$favorites = array("chainlink");

while ($row = pg_fetch_row($result)) {
  array_push($favorites, $row[1]);
}
$_SESSION["favoriteList"] = implode( ", ", $favorites ); 

echo $_SESSION["favoriteList"];

echo "Welcome, " . $_SESSION["currentUser"];
echo "Your List: " . $_SESSION["favoriteList"];

?>
<script type="text/javascript">

console.log('<?php echo $_SESSION["currentUser"]; ?>');

var activeUser = '<?php echo $_SESSION["currentUser"]; ?>';
var list = '<?php echo $_SESSION["favoriteList"]; ?> '

if (activeUser !== "PLEASE LOG IN!"){
  console.log("USER IS LOGGED IN.");

var urlBeginning = "https://api.coingecko.com/api/v3/coins/markets?vs_currency=usd&ids=";

console.log("list type:" + typeof list);
console.log("Stored in list: " + list);

list = list.split(",");

console.log("list type after split:" + typeof list);
console.log("Stored in work after list: " + list);

var favoritesList = list;
console.log(favoritesList);

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