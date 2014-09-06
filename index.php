<?php

/*
get username
fetch image list for username
save list of short_id per user

*/
//collect username from form
$username = 'test';

//save to users db and obtain primary key

$userID = ''; //obtained from db after saving

// call twitpic api and fetch all user details in json format

$jsonResponse = "{}";

// convert json into php array

$responseArray = array();

//loop through the images object in the array (has multiple image details)
for ($i=0; $i < count($responseArray); $i++) {
  //save details (shortID, userID) to userImageDetails table

}



//after scraping, now on front end to display images to user
// get criteria GET
//query db

// save obtained data into php array
// convert php array into json
// return response

header('ContentType: application/json');
echo $convertedJSONResponse;
