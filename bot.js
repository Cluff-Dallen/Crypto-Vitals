var twit = require('twit');
var express = require('express');
var config = require('./config');

const app = express();
const port = process.env.PORT || 3000;

//hi
app.use(express.static(__dirname + '/public'));
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');


app.get('/bot', bot);

app.listen(port, function() {
    console.log('Server is listening to port...', port);
  });

function bot(request, response) {
    console.log('A request to activate bot was made. Activating..');
	autobotActivate(response);
}

function autobotActivate(response) {
    response.render('result');
    
    var Twitter = new twit(config);

/* For retweeting */

//Search for the most tweet that that used the hashtag that the paramaters for 'q' are set to, than retweet it.
var retweet = function() {
    var params = {
        
        //Set 'q' paramaters to #puppy, and #Puppy only.
        q: '#puppy, #Puppy',
        result_type: 'recent', //we want the most recent tweet only.
        lang: 'en' //This is optional but we do want english.
    }

    //search for the most resent post
    Twitter.get('search/tweets', params, function(err, data) {
      
        //No errors, than continue.
        if (!err) {

          //Grab the tweet ID
            var retweetId = data.statuses[0].id_str;

            //Send the retweet request to Twitter
            Twitter.post('statuses/retweet/:id', {
                id: retweetId
            }, function(err, response) {
                if (response) {
                    console.log('You have successfully retweeted the most recent tweet using your select paramaters.');
                }
                //Error than do this
                if (err) {
                    console.log('Error, please try again later.');
                }
            });
        }

        //Search error
        else {
          console.log('You got a SEARCH error.');
        }
    });
}

//find tweet, retweet
retweet();

//every five minutes repeat, find tweet and retweet.
setInterval(retweet, 300000);

/* Like the tweet */

//same as how our retweet function worked here..
var favoriteTweet = function(){
  var params = {
      q: '#puppy, #Puppy',
      result_type: 'recent',
      lang: 'en'
  }

  //search for a random tweet containing the 'q' paramaters
  Twitter.get('search/tweets', params, function(err,data){
    var tweet = data.statuses;
    var randomTweet = ranDom(tweet);   // pick a random tweet

    //If the random tweet does exist
    if(typeof randomTweet != 'undefined'){
    
      //Send a request to Twitter to retweet. 
      Twitter.post('favorites/create', {id: randomTweet.id_str}, function(err, response){

        //error trying to like tweet..
        if(err){
          console.log('Error liking tweet.');
        }
        else{
          console.log('You have successfully liked a random tweet according to your search paramaters.');
        }
      });
    }
  });
}
//find tweet, like tweet.
favoriteTweet();

// repeat favoriteTweet every five minutes.
setInterval(favoriteTweet, 300000);

//found this function online that will generate a random tweet to like.
function ranDom (arr) {
  var index = Math.floor(Math.random()*arr.length);
  return arr[index];
}; 
}